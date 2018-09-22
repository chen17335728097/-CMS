<?php

/**
 * @company 陈中
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 

namespace app\back\controller;
use \app\back\controller\BaseAdmin;
use app\common\controller\BaseCommon;
use app\back\model\Product as ProductModel;
use app\back\model\Brand as BrandModel;
use app\back\model\Supplier AS SupplierModel;
use app\back\model\Supplier;
use app\back\model\Format AS FormatModel;
use app\common\controller\Logs;
use think\Cache;
class Product extends BaseAdmin
{
    protected $model = "";
    /**
     * 
     * 构造函数
     * 
     * **/
    public function _initialize(){
        parent::_initialize();
        $this->model = new ProductModel;
        $this->assign("active",20);
    }
    /**
     *
     * 商品列表
     *
     * **/
    public function product()
    {
        $where['product_state'] = ['neq','10'];
        if(\input('product_state')){
            $where['product_state'] = ['eq',\input('product_state')];
        }
        if(\input('pc_id')){
            $where['pc_id'] = ['eq',\input('pc_id')];
        }
        if(\input('brand_id')){
            $where['brand_id'] = ['eq',\input('brand_id')];
        }
        if(\input('supplier_id')){
            $where['supplier_id'] = ['eq',\input('supplier_id')];
        }
        if(\input('key')){
            $key = \input('key');
            $where['product_name|product_keywords|product_content|product_scontent|product_type'] = ['like',"%$key%"];
        }
        //商品分类
        $this->assign("pc_class",product_class_tree($this->model->getProductClass()));
        //商品品牌
        $this->assign("brand_list",(new BrandModel)->selectBrand());
        //商品供货商
        $this->assign("suppliers_list",(new SupplierModel)->selectAllSupplier());
        $p_list = $this->model->getProductByWhere($where);
        $this->assign("page_info",$p_list->render());
        $this->assign("plist",$p_list);
        return $this->fetch("product/product_center");
    }
    /**
     *
     * 添加商品
     *
     * **/
    public function product_add(){
        /**商品分类**/
        $class = $this->model->getProductClass();
        /**商品品牌**/
        $brandModel = new BrandModel;
        $brand = $brandModel->selectBrand();
        //供货商
        $supplier_list = (new SupplierModel())->selectAllSupplier();
        //商品规格
        $format_list = (new FormatModel)->selectAllFormat();
        $this->assign("format_list",TArray($format_list));
        $this->assign("supplier_list",$supplier_list);
        $this->assign("brand",$brand);
        $this->assign("class",product_class_tree($class));
        return $this->fetch("product/add-product");
    }
    /**
     *
     * 添加商品-----保存数据
     *
     * **/
    public function productSave(){
        $data = \input("post.");
        //单文件
        $file = \request()->file("file_logo");
        $product_image = "";
        $thumb_image = "";
        if(!empty($file)){
            $info = image_upload($file,false,'');
            $product_image = $info['return_img'];

        }
        //多文件
        $moreFile = \request()->file("file_more");
        $product_moreImg = "";
        if(!empty($moreFile)){
            $moreInfo = image_uploadMoreFiles($moreFile,false,'');
            if(count($moreInfo['msg'])>0){
                showMessages("上传失败",'product.html',2);
            }
            $product_moreImg = serialize($moreInfo['return_img']);
        }
        $format_id = \input('format_id/a');
        $saveData = array(
            'product_name'      =>\input('pro_title'),
            'product_content'   =>\input('pro_content'),
            'product_image'     =>empty($data['return_img']) ? '' : $data['return_img'],
            'product_scontent'  =>\input('sContent'),
            'brand_id'          =>\input('pro_brand'),
            'pc_id'             =>\input('pc_id'),
            'product_image'=>$product_image,
            'product_imgList'=>$product_moreImg,
            'product_sale_promotion'=>\input('pro_sale_promotion'),
            'product_keywords'=>\input('pro_keywords'),
            'supplier_id'=>\input('pro_supplier'),
            'product_content_attr'=>\input('pro_content_attr'),
            'format_id'=>serialize($format_id),
            'product_sale_price'=>\input('sale_price'),
            'product_market_price'=>\input('market_price'),
            'product_base_price'=>\input('base_price'),
            'product_member_price'=>\input('member_price'),
            'product_base_sale_count'=>\input('base_sale_count'),
            'product_base_hits_count'=>\input('base_hits_count'),
            'product_base_shave_count'=>\input('base_shave_count'),
            'product_account'=>\input('total_count'),
            'product_call_count'=>\input('call_count'),
            'product_thumb_name'=>$thumb_image,
            'product_state'     =>empty($data['open']) ? 20 : '',
            'product_start_time'=>date('Y-m-d H:i:s',time()),
            'product_point'=>\input("pro_point")
        );
        $result = $this->model->insertOne($saveData);
        if($result) {
            if (!empty($format_id)) {
                //添加商品属性规格
                $attr_save_data = [];
                $format_list_name = $data['format_list_name'];
                $format_market_price = $data['format_market_price'];
                $format_sale_price = $data['format_sale_price'];
                $format_base_price = $data['format_base_price'];
                $format_member_price = $data['format_member_price'];
                $point_price = $data['attr_point'];
                if (!empty($format_list_name)) {
                    foreach ($format_list_name as $key => $value) {
                        $attr_save_data[$key] = [
                            'attr_value' => $value,
                            'attr_sale_price' => $format_sale_price[$key],
                            'attr_base_price' => $format_base_price[$key],
                            'attr_market_price' => $format_market_price[$key],
                            'attr_member_price' => $format_member_price[$key],
                            'attr_point'=>$point_price[$key],
                            'product_id' => $result
                        ];
                    }
                    BaseCommon::insertMore('product_attr', $attr_save_data);
                }
            }
            //上传商品成功
            $logs = array(
                'log_title'=>\session('username') . "新增商品成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("添加商品成功",'p_center.html',2);
        }else{
            //删除上传的图片
            $filePath = ROOT_PATH . 'public' . DS . $info['return_img'];
            if(file_exists($filePath)){
                unlink($filePath);
            }
            showMessages("添加商品数据失败",'p_center.html',2);
        }
    }
    /**
     *
     * 删除商品
     *
     * **/
    public function product_del(){
        $id = \input("delId/a");
        $type = \input("type");
        switch($type){
            case 'delete'://彻底删除产品
                $res = $this->model->deleteTrue(['product_id'=>['in',array_filter($id)]]);
                if($res){
                    $info = "彻底删除商品成功";
                }else{
                    $info = "彻底删除商品失败";
                }
                break;
            case 'del'://软删除商品(收入产品回收站)
                $state = 10;
                $res = $this->model->deleteAll(array_filter($id),$state);
                if($res){
                    $info = "软删除商品成功";
                }else{
                    $info = "软删除商品失败";
                }
                break;
            case 'start'://上架商品
                $state = 20;
                $res = $this->model->deleteAll(array_filter($id),$state);
                if($res){
                    $info = "上架商品成功";
                }else{
                    $info = "上架商品失败";
                }
                break;
            case 'stop'://下架商品
                $state = 30;
                $res = $this->model->deleteAll(array_filter($id),$state);
                if($res){
                    $info = "下架商品成功";
                }else{
                    $info = "下架商品失败";
                }
                break;
            case 'restore'://回收站还原商品
                $state = 30;
                $res = $this->model->deleteAll(array_filter($id),$state);
                if($res){
                    $info = "还原商品成功";
                }else{
                    $info = "还原商品失败";
                }
                break;
            case 'wx_code':
                //生成产品二维码
                $data_id = array_filter($id);
                foreach($data_id as $v){
                        $pro_info = db("product")->where("product_id","eq",$v)->value("product_wx_code");
                        if(!empty($pro_info)){
                            $file_path = str_replace("\\","/",ROOT_PATH) . $pro_info;
                        }
                            if(file_exists($file_path)){
                                unlink($file_path);
                            }
                        }
                            $result = makeGoodsWxCode("http://www.baidu.com",$v);
                            if($result){
                                $r = db("product")->where("product_id","eq",$v)->setField("product_wx_code",$result);
                            }

                $res = true;
                $info = "更新商品二维码成功";
                break;
        }

        if($res){
            //操作商品成功
            $logs = array(
                'log_title'=>\session('username') . $info,
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>$info,'code'=>200));exit;
        }else{
            echo json_encode(array('msg'=>$info,'code'=>400));exit;
        }
    }
    /**
     *
     * 编辑商品
     *
     * **/
    public function product_edit(){
        $id = \input("param");
        $info = $this->model->findOne($id);
        if(!empty($info['format_id'])){
            $info['format_id'] = unserialize($info['format_id']);
        }
        /**商品分类**/
        $class = $this->model->getProductClass();
        /**商品品牌**/
        $brandModel = new BrandModel;
        $brand = $brandModel->selectBrand();
        //供货商
        $supplier_list = (new SupplierModel())->selectAllSupplier();
        //商品规格
        $format_list = (new FormatModel)->selectAllFormat();
        //商品规格属性
        $product_attr_format = BaseCommon::findMore('product_attr','',['product_id'=>$info['product_id']],'','');
        $this->assign("product_attr_format",$product_attr_format );
        $this->assign("format_list",TArray($format_list));
        $this->assign("supplier_list",$supplier_list);
        $this->assign("brand",$brand);
        $this->assign("class",product_class_tree($class));
        $this->assign("info",$info);
        return $this->fetch("product/edit-product");
    }
    /**
     * 
     * 编辑商品----保存数据
     * 
     * **/
    public function productEditSave(){
        $data = \input("post.");
        $save_data = array_filter($data);
        $file = \request()->file("file_logo");
        if(!empty($file)){
            $info = image_upload($file,false,'');
            $save_data['product_image'] = $info['return_img'];
            $save_data['product_thumb_name'] = thumb_goods_image($info['return_img'],'100','100');
        }
        //多文件
        $moreFile = \request()->file("file_more");
        if(!empty($moreFile)){
            $moreInfo = image_uploadMoreFiles($moreFile,false,'');
            if(count($moreInfo['msg'])>0){
                showMessages("上传失败",'product.html',2);
            }
            $save_data['product_imgList'] = serialize($moreInfo['return_img']);
        }
        $format_id = \input('format_id/a');
        $save_data['format_id'] = "";
        if (!empty($format_id)) {
            $save_data['format_id'] = serialize($format_id);
            $attr_save_data = [];
            $format_list_name = $data['format_list_name'];
            $format_market_price = $data['format_market_price'];
            $format_sale_price = $data['format_sale_price'];
            $format_base_price = $data['format_base_price'];
            $format_member_price = $data['format_member_price'];
            $attr_point = $data['attr_point'];
            unset($save_data['attr_point']);
            unset($save_data['format_member_price']);
            unset($save_data['format_base_price']);
            unset($save_data['format_sale_price']);
            unset($save_data['format_market_price']);
            unset($save_data['format_list_name']);
        }
        //删除商品属性规格
        BaseCommon::deleteMore('product_attr',['product_id'=>['in',$data['product_id']]]);

        $res = BaseCommon::edit_save('product',['product_id'=>$data['product_id']],$save_data);
        if(!empty($format_list_name)){
            foreach($format_list_name as $key=>$value){
                if(!empty($format_sale_price[$key]) || !empty($format_base_price[$key]) || !empty($format_market_price[$key]) || !empty($format_member_price[$key])){
                    $attr_save_data[$key] = [
                        'attr_value'=>$value,
                        'attr_sale_price'=>$format_sale_price[$key],
                        'attr_base_price'=>$format_base_price[$key],
                        'attr_market_price'=>$format_market_price[$key],
                        'attr_member_price'=>$format_member_price[$key],
                        'attr_point'=>$attr_point[$key],
                        'product_id'=>$data['product_id']
                    ];
                }
            }
            $result_code = BaseCommon::insertMore('product_attr',$attr_save_data);
        }
        if($res || !empty($result_code)){
            //编辑商品成功
            $logs = array(
                'log_title'=>\session('username') . "编辑商品成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("编辑商品成功",'p_center.html',3);
        }else{
            showMessages("编辑商品数据失败",'p_center.html',3);
        }
    }
    /**
     * 
     * 生成商品二维码
     * 
     * **/
    public function product_code(){ 
        $pid = \input("id");
        $data_id = explode("-",$pid);
        $id = array_filter($data_id);
        $product = $this->model->getProductMore($id);
        $this->assign("product",$product);
        return $this->fetch();
    }
    /**
     * 
     * 生成二维码
     * 
     * **/
    public function productSaveCode(){
        $data = \input("string");
        $data_id = array_filter(explode("-", $data));
        $qrfile = date('Y-m-d',time());
        $filename = str_replace("\\","/",ROOT_PATH) . 'public/qrcode/' . $qrfile;
        @set_time_limit(0);
        $start_time = time();
        foreach($data_id as $key=>$value){
              $product_info = explode("|", $value);
              $product_id = $product_info[0];
              $product_num = (int)$product_info[1];
              //生成二维码
              //加载生成二维码类
                  if($product_num>0){
                      try{
                          for($i=0;$i<$product_num;$i++){
                              $random = rand("10000","99999").time();
                              $rand = base64_encode($random);
                              $id = base64_encode($product_id);
                              $url = "http://lan.dd371.com/index.php?data={$rand}&id={$id}";
                              //$img = makeCode($product_id,"http://lan.dd371.com/index.php?data={$rand}&id={$id}",$rand,$qrfile,false);
                              $save_data[] = array(
                                  'img'=>"",
                                  'product_id'=>$product_id,
                                  'status'=>0,
                                  'rand'=>$random
                              );
                              $file_data_array[$product_id][] = array('id'=>$product_id,'info'=>$url);
                          }
                      }catch (\Exception $e){
                          $filename = '/public/qrcode/' . $qrfile . '/' . $product_id;
                          if(file_exists($filename)){
                              unlink($filename);
                          }
                          $this->error($e->getMessage());
                      }
                      
                  }
        }
        /**写入文件中**/
        foreach ($file_data_array as $key=>$value){
            $file_name =  date('Y-m-d',time()) . '_' . $key . '.txt';
            if(is_file($file_name)){
                /**打开文件追加内容**/
                $dir = fopen($file_name,"a");
                foreach ($value as $v){
                    @fwrite($dir,$v['info'] . "\r\n");
                }
            }else{
                /**打开文件或者创建文件**/
                $dir = fopen($file_name,"w");
                foreach ($value as $v){
                    @fwrite($dir,$v['info'] . "\r\n");
                }
            }
            /**关闭句柄**/
            @fclose($dir);
        }       
        if(!empty($save_data)){
               $re =  $this->model->insertQrcodeAll($save_data);
               if($re){
                   //批量生成二维码成功
                   $logs = array(
                       'log_title'=>\session('username') . "批量生成二维码成功",
                       'log_time'=>time(),
                       'u_name'=>\session('username'),
                       'uid'=>\session("user_id")
                   );
                   Logs::log($logs);
                   showMessages("批量生成二维码成功",url('product/product'),2);
               }else{
                   showMessages("批量生成二维码失败",url('product/product'),2);
               }
        }
    }
    /**
     * 
     * 添加活动规则
     * 
     * **/
    public function active_rule_add(){
        if(\request()->post()){
            $id = \input("id");
            $save_data['value'] = \input('content');
            if(empty($id)){
                $re = db("active_rule")->insert($save_data);
            }else{
                $save_data['id'] = $id;
                $re = db("active_rule")->update($save_data);
            }
            //登录日志
            $logs = array(
                'log_title'=>\session('username') . "设置活动规则成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("设置活动规则成功",url('product/active_rule_add'),3);
        }else{
            $info = db("active_rule")->where('id','=',1)->find();
            $this->assign("info",$info);
            return $this->fetch();
        }       
    }
    /**
     * 
     * 获奖者列表
     * 
     * **/
    public function product_list(){
        $list = db("product_qrcode")->alias("pq")->join("think_product p","p.product_id=pq.product_id")->where(['pq.status'=>1])->select();
        $this->assign("list",$list);
        return $this->fetch();
    }
    /**
     *
     * 获奖者删除
     *
     * **/
    public function product_list_del(){
        $id = \input("id/a");
        $in_id = array_filter($id);
        if(empty($in_id)){
            exit(json_encode(array('msg'=>"参数错误",'code'=>404)));
        }
        $list = db("product_qrcode")->where('id','in',$in_id)->delete();
        if($list){
            //日志
            $logs = array(
                'log_title'=>\session('username') . "删除获奖者成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            exit(json_encode(array('msg'=>"删除获奖者成功",'code'=>200)));
        }else{
            exit(json_encode(array('msg'=>"删除获奖者失败",'code'=>404)));
        }
    }
    /**
     * 
     * 上传商品多图
     * 
     * **/
    public function images_upload(){
        $file = \input('file');
        echo p($file);exit;
        if(!file_exists($file)){
            exit(json(array('msg'=>'文件不存在')));
        }
    }
    /**
     * 
     * 商品分类
     * 
     * **/
    public function product_class(){
        $cache = Cache::get("class");
        if($cache){
            $class_list = $cache;
        }else{
            $list = $this->model->getProductClass();
            $class_list = product_class_tree($list);
            Cache::set("class", $class_list,1);
        }
        $this->assign("pcMenu",json_encode($this->model->getProductClass()));
        $this->assign("list",$class_list);
        return $this->fetch("product_class");
    }
    /**
     * 
     * 添加商品分类
     * 
     * **/
    public function add_product_class(){
        if(request()->post()){
            $data = \input("post.");
            $file = \request()->file("pc_file");
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['pc_img'] = $info['return_img'];
            }
           // var_dump($data);exit;
            $res = db("product_class")->insert($data);
            if($res){
                //删除缓存
                if(Cache::get("class")){
                    Cache::rm('class');
                }
                //日志
                $logs = array(
                    'log_title'=>\session('username') . "添加商品分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加商品分类成功",'p_column.html',3);
            }else{
                showMessages("添加商品分类失败",'p_column.html',3);
            }
        }else{
            $list = $this->model->getProductClass();
            $this->assign("list",product_class_tree($list));
            return $this->fetch("add_product_class");
        }
    }
    /**
     * 
     * 编辑商品分类
     * 
     * **/
    public function edit_product_class(){
        if(request()->post()){
            $data = \input("post.");
            $file = \request()->file("pc_file");
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['pc_img'] = $info['return_img'];
            }
            $res = $this->model->editProductClassInfo($data);
            if($res){
                //删除缓存
                if(Cache::get("class")){
                    Cache::rm('class');
                }
                $logs = array(
                    'log_title'=>\session('username') . "编辑商品分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑商品分类成功", 'p_column.html', 3);
            }else{
                showMessages("编辑商品分类失败", 'p_column.html', 3);
            }
        }else{
            $id = \input("id");
            $info = db("product_class")->where("pc_id","=",$id)->find();
            $list = $this->model->getProductClass();
            $this->assign("list",product_class_tree($list));
            $this->assign("info",$info);
            return $this->fetch();
        }
    }
    /**
     * 
     * 删除商品分类
     * 
     * **/
    public function del_product_class(){
        $id = \input("delId/a");

        $res = $this->model->delProductClass(array_filter($id));
        if($res){
            //删除缓存
            if(Cache::get("class")){
                Cache::rm('class');
            }
            echo json_encode(array('msg'=>"删除商品分类成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除商品分类失败",'code'=>200));
        }
    }
    /**
     * 
     * 商品回收站
     * 
     * **/
    public function product_recycle(){
        if(\request()->post()){
            $id = input('id/a');
            $res = db("product")->where('product_id','in',$id)->delete();
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "删除回收站商品成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"删除回收站商品成功",'code'=>200));
            }else{
                echo json_encode(array('msg'=>"删除回收站商品失败",'code'=>400));
            }
        }else{
                $where['product_state'] = ['eq','10'];
                $p_list = $this->model->getProductByWhere($where);
                $this->assign("pageinfo",$p_list->render());
                $this->assign("plist",$p_list);
                return $this->fetch("product/product_recycle");
        }
    }
    /**
     * 
     * 商品属性
     * 
     * **/
    public function product_type(){
        $cache = Cache::get("class");
        if($cache){
            $class_list = $cache;
        }else{
            $list = $this->model->getProductClass();
            $class_list = product_class_tree($list);
            Cache::set("class", $class_list,1);
        }
        $this->assign("list",$class_list);
        return $this->fetch();
    }
    /**
     * 
     * 商品属性---添加
     * 
     * **/
    public function add_product_type(){
        if(\request()->post()){
            $data = \input('post.');
            $name = \input('name');
            $value = \input('value');
            if(!empty($name) && !empty($value)){
                
            }
        }else{
            $cache = Cache::get("class");
            if($cache){
                $class_list = $cache;
            }else{
                $list = $this->model->getProductClass();
                $class_list = product_class_tree($list);
                Cache::set("class",$class_list,1);
            }
            $this->assign("list",$class_list);
            return $this->fetch();
        }
    }
    /**
     * 
     * 商品属性---编辑
     * 
     * **/
    public function edit_product_type(){
        return $this->fetch();
    }
    /**
     *
     * 商品属性---删除
     *
     * **/
    public function del_product_type(){
    
    }
    /**
     *
     * 供货商
     *
     * **/
    public function supplier(){
        $supplier = (new SupplierModel())->selectAllSupplier();
        $supplier_array = $supplier->toArray();
        $this->assign("supplier_list",$supplier);
        $this->assign("supplierMenu",json_encode($supplier_array['data']));
        $this->assign("page",$supplier->render());
        return $this->fetch();
    }
    /**
     *
     * 保存供货商数据
     *
     * **/
    public function addSupplier(){
        if(\request()->isPost()){
            $data = \input('post.');
            //单图片
            $file = \request()->file("supplier_pic");
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['supplier_logo'] = $info['return_img'];
            }

            $res = (new SupplierModel())->addSupplier($data);
            if($res){
                showMessages("添加供货商成功",'p_supplier.html',3);
            }else{
                showMessages("添加供货商成功",'p_supplier.html',3);
            }
        }
    }
    /**
     *
     * 编辑供货商
     *
     * **/
    function edit_supplier(){
        if(\request()->isPost()){
            $data = \input("post.");
            $res = BaseCommon::edit_save('supplier',['supplier_id'=>$data['supplier_id']],$data);
            if($res){
                //操作商品成功
                $logs = array(
                    'log_title'=>\session('username') . "编辑商品供货商成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑商品供货商成功",'p_supplier.html',2);
            }else{
                showMessages("编辑商品供货商失败",'p_supplier.html',2);
            }
        }
    }
    /**
     *
     * 删除供货商
     *
     * **/
    public function delSupplier(){
        $id = \input("delId/a");
        $supplierModel = new SupplierModel;
        $info = $supplierModel->delSupplier($id);
        if($info){
            //操作商品成功
            $logs = array(
                'log_title'=>\session('username') . "删除商品供货商成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            exit(json_encode(array('msg'=>"删除商品供货商成功",'code'=>200)));
        }else{
            exit(json_encode(array('msg'=>"删除商品供货商失败",'code'=>400)));
        }
    }
    /**
    **
     * 商品规格
     *
     **/
    public function format(){
        $format = (new formatModel())->selectAllFormat();
        $this->assign("format_list",$format);
        return $this->fetch();
    }
    /**
     **
     * 添加商品规格
     *
     **/
    public function addFormat(){
        if(\request()->isPost()){
            $data = \input("post.");
            $data['format_value'] = serialize($data['format_value']);
            $result = (new FormatModel())->insertFormat($data);
            if($result){
                //操作商品成功
                $logs = array(
                    'log_title'=>\session('username') . "添加商品规格成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加商品规格成功",'p_format.html',3);
            }else{
                showMessages("添加商品规格失败",'p_format.html',3);
            }
        }else {
            return $this->fetch('add-format');
        }
    }
    /**
     **
     * 刪除商品规格
     *
     **/
    public function delFormat(){
        $id = \input("delId/a");
        $info = (new FormatModel())->delFormat($id);
        if($info){
            //操作商品成功
            $logs = array(
                'log_title'=>\session('username') . "删除商品规格成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            exit(json_encode(array('msg'=>"删除商品规格成功",'code'=>200)));
        }else{
            exit(json_encode(array('msg'=>"删除商品规格失败",'code'=>400)));
        }
    }
    /**
     **
     * 編輯商品规格
     *
     **/
    public function editFormat(){
        if(\request()->isPost()){
            $data = \input("post.");
            $data['format_value'] = serialize($data['format_value']);
            $result = (new FormatModel())->editFormat($data);
            if($result){
                //操作商品成功
                $logs = array(
                    'log_title'=>\session('username') . "编辑商品规格成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑商品规格成功",'p_format.html',3);
            }else{
                showMessages("编辑商品规格失败",'p_format.html',3);
            }
        }else {
            $eid = \input("get.eid");
            if(empty($eid)){
                showMessages('参数错误','p_format.html',3);
            }
            $info = (new FormatModel())->getInfoByID($eid);
            if(!empty($info)){
                $info['format_value'] = unserialize($info['format_value']);
            }
            $this->assign("info",$info);
            return $this->fetch('edit-format');
        }

    }
}
