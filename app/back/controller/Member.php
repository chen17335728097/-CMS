<?php
namespace app\back\controller;

/**
 * @company 河南一百度集团
 * @author 海豚之泪
 * @email 499211940@qq.com
 * @time  2017-09-30
 *
 * *******************************************************************************************/



use app\back\controller\BaseAdmin;
use app\back\model\Member as MemberModel;
use app\common\controller\BaseCommon;
use app\common\controller\Logs;
use think\Db;
class Member extends BaseAdmin
{
    public function _initialize(){
        parent::_initialize();
        $this->model = new MemberModel;
        $this->assign("active",110);
    }
    /**
     *
     * 会员列表
     *
     * **/
    public function member(){
        $where = [];
        $key = \input("post.key");
        if(!empty($key)){
            $where = [
                'member_phone|member_name'=>['Like',"%$key%"]
            ];
        }
        $member_list = $this->model->getMemberList($where);
        $this->assign("member_list",$member_list);
        $array = $member_list->toArray();
        $this->assign("memberObj",json_encode($array['data']));
        //会员充值卡

        //消费产品
        $goods_list = BaseCommon::findMore("product",'product_id,product_name,product_market_price',['product_state'=>20],'product_id asc',"");
        $this->assign("goods_list",$goods_list);
        $this->assign("key",$key);
        return $this->fetch("member");
    }

    /**
     *
     * 会员删除
     *
     * **/
    public function member_delete(){
        $id = \input('delId/a');
        $del_array=array_filter($id);
        $type = \input("type");
        switch($type){//10正常;20关闭;30软删除
            case 'reback':
                $res = (new MemberModel())->delMoreMember($del_array,10);//还原
                break;
            case 'delete':
                $res = (new MemberModel())->deleteMember($del_array);//彻底删除记录
                break;
            default:
                // echo var_dump("666");exit;
                $res = (new MemberModel())->delMoreMember($del_array,30);//软删除记录(回收站)
                break;
        }
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除会员用户成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除会员用户成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除会员用户失败",'code'=>400));
        }
    }
    /**
     *
     * 新增会员
     *
     * **/
    public function member_add(){
        if(\request()->isPost()){
            $data = \input("post.");
            $info = (new MemberModel())->checkMember(['member_nickname'=>$data['member_nickname']]);
            if($info){
                showMessages("会员账号已经存在",'member.html',3);
            }
            $file = \request()->file("member_logo");
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['member_logo'] = $info['return_img'];
            }
            $data['member_ip'] = \request()->ip(0,true);
            $data['member_last_login'] = date('Y-m-d H:i:s');
            $re = (new MemberModel())->addMember($data);
            if($re){
                //添加日志
                $logs = array(
                    'log_title'=>\session('username') . "添加会员用户成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages('添加新会员成功','memberList.html',2);
            }else{
                showMessages('添加新会员失败','memberList.html',2);
            }
        }else{
            showMessages('访问错误','memberList.html',2);
        }
    }
    /**
     *
     * 会员编辑
     *
     * **/
    public function member_edit(){
        if(\Request()->isPost()){
            $data = \input("post.");
            /*$edit_data = array(
                'member_name'=>$data['username'],
                'member_phone'=>(int)$data['mobile'],
                'member_point'=>$data['email'],
                'member_sex'   =>$data['sex'],
                'member_content'=>$data['content'],
                'member_pass'=>md5($data['password']),
                'member_id'=>$data['member_id']
            );*/
            $re = $this->model->saveMember($data);
            if($re){
                showMessages('操作成功','memberList.html',2);
            }else{
                showMessages('操作失败','memberList.html',2);
            }
        }else{
            $id = \input("id");
            $member_info = $this->model->checkMember(['member_id'=>$id]);
            $this->assign("Member_info",$member_info);
            return $this->fetch("member-edit");
        }

    }
    public function memberDel(){
        if(\request()->isAjax()){
            $id = \input("post.delId/a");
            $error = "";
            $code = 400;
            Db::startTrans();
            //return json($save_data);
            try{
                BaseCommon::deleteMore("member",['member_id'=>['in',$id]]);
                BaseCommon::deleteMore("member_deposit",['member_id'=>['in',$id]]);
                BaseCommon::deleteMore("member_grade_order",['member_id'=>['in',$id]]);
                BaseCommon::deleteMore("order",['member_id'=>['in',$id]]);
                // 提交事务
                Db::commit();
                $code = 200;
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                $error = $e->getMessage();
            }
            return json(['code'=>$code,'msg'=>$error]);
        }
    }
    /**
     *
     * 会员回收站
     *
     * **/
    public function member_del(){
        $where = ['member_open'=>30];
        $del_list = (new MemberModel())->getMemberList($where);
        $this->assign("del_list",$del_list);
        return $this->fetch("member-recycle");
    }
    /**
     *
     * 会员积分
     *
     * **/
    public function card_type(){
        if(\request()->isPost()){
            $data = \input('post.');
            $file = \request()->file("grade_pic");
            if(!empty($file)){
                $info = file_upload($file,'member_grade');//缩略图
                $data['grade_pic'] = $info['img'];
            }
            $return = (new MemberModel())->addMemberGrade($data);
            if($return){
                $logs = array(
                    'log_title'=>\session('username') . "添加会员等级成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages('添加会员等级成功','grade.html',2);
            }else{
                showMessages('添加会员等级失败','grade.html',2);
            }
        }else{
            $grade_list = db('member_grade')->order('grade_order asc')->select();
            $this->assign('grade_list',$grade_list);
            $this->assign('gradeMenu',json_encode($grade_list));
            return $this->fetch();
        }
    }
    /***
     *
     * 会员等级
     *
     *
     ***/
    public function member_grade(){
        if(\request()->isPost()){
            $data = \input('post.');
            $file = \request()->file("grade_pic");
            if(!empty($file)){
                $info = file_upload($file,'member_grade');//缩略图
                $data['grade_pic'] = $info['img'];
            }
            $return = (new MemberModel())->addMemberGrade($data);
            if($return){
                $logs = array(
                    'log_title'=>\session('username') . "添加会员等级成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages('添加会员等级成功','grade.html',2);
            }else{
                showMessages('添加会员等级失败','grade.html',2);
            }
        }else{
            $grade_list = db('member_grade')->order('grade_order asc')->select();
            $this->assign('grade_list',$grade_list);
            $this->assign('gradeMenu',json_encode($grade_list));
            return $this->fetch();
        }

    }
    /**
     *
     * 会员等级删除
     *
     * **/
    public function member_grade_delete(){
        $id = \input('delId');

        $type = \input("type");
        $res = (new MemberModel())->delMemberGrade($id);//彻底删除记录
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除会员等级成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除会员等级户成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除会员等级失败",'code'=>400));
        }
    }
    /**
     *
     * 会员等级删除
     *
     * **/
    public function member_grade_edit(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file("grade_pic");
            if(!empty($file)){
                $info = file_upload($file,'member_grade');//缩略图
                $data['grade_pic'] = $info['img'];
            }
            $res = db("member_grade")->update($data);
            if($res){
                showMessages("编辑会员等级成功",'grade.html',2);
            }elsE{
                showMessages("编辑会员等级失败",'grade.html',2);
            }
        }
    }

    public function member_detail_logs(){
        $fields = "m.member_nickname as name,sc.*";
        $logs_detail_list = BaseCommon::selectMoreJoinTablesAndPages('shop_currency','sc','member','m','sc.member_id=m.member_id',$fields,'','sc.shop_c_time','');
        $this->assign('logs_detail_list',$logs_detail_list);
        return $this->fetch();
    }
    function del_detail_logs(){
        if(\request()->isAjax()){
            $id = input('id/a');
            $res = db("shop_currency")->where('id','in',array_filter($id))->delete();
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "删除交易日志记录成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"删除交易日志记录成功",'code'=>200));
            }else{
                echo json_encode(array('msg'=>"删除交易日志记录失败",'code'=>400));
            }
        }else{
            echo json_encode(array('msg'=>"系统繁忙，请稍后再试",'code'=>400));
        }
    }

    /**
     *
     * 会员设置
     *
     * **/
    public function set_member(){
        if(\request()->isAjax()){
            $id = \input('delId');
            $res = db("member")->where(['member_id'=>$id])->setField("member_manager",20);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "设置会员成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"设置会员成功",'code'=>200));
            }else{
                echo json_encode(array('msg'=>"设置会员失败",'code'=>400));
            }
        }else{
            echo json_encode(array('msg'=>"系统错误",'code'=>500));
        }

    }

    /**
     *
     *
     * 会员卡管理
     *
     *
     ***/

    public function member_back_card(){
        if(\request()->isPost()){
            $data = input("post.");
            $re = db('member_card')->insertGetId($data);
            if($re){
                showMessages("添加会员卡成功",'member_back_card.html',2);
            }else{
                showMessages("添加会员卡失败",'member_back_card.html',2);
            }
        }else{
            $card_list = db('member_card')->order('mc_order asc')->select();
            $grade_list = db('member_grade')->order('grade_order asc')->select();
            $this->assign('card_list',$card_list);
            $this->assign('grade_list',$grade_list);
            $this->assign('gradeMenu',json_encode($card_list));
            return $this->fetch();
        }
    }

    /**
     *
     * 会员等级删除
     *
     * **/
    public function del_member_back_card(){
        $id = \input('delId');
        $type = \input("type");
        $res = (new MemberModel())->delMemberCard($id);//彻底删除记录
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除会员等级成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除会员等级户成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除会员等级失败",'code'=>400));
        }
    }

    /**
     *
     * 会员卡编辑
     *
     * **/
    public function edit_member_back_card(){
        if(\request()->post()){
            $data = \input("post.");
            $res = db("member_card")->update($data);
            if($res){
                showMessages("编辑会员等级成功",'member_back_card.html',2);
            }elsE{
                showMessages("编辑会员等级失败",'member_back_card.html',2);
            }
        }
    }


    public function memberDeposit(){
        $fields = "";
        $list = BaseCommon::findMoreAndPages("member_deposit","*","","","","");
        $this->assign('logs_detail_list',$list['rows']);
        $this->assign("pages",$list['page']);
        return $this->fetch();
    }

 //会员充值
   public function memberRecharge(){
       if(\request()->isPost()){
           $recharge_count = \input("post.recharge_count");
           $give_count = \input("post.give_count");
           $member_id = \input("post.member_id");
           $member_count = intval($recharge_count+$give_count);
           $msg = "充值成功";
           $info = BaseCommon::findOne('member','member_nickname,member_account',['member_id'=>$member_id]);
           $value = $recharge_count*0.1;
           //开启事物
           Db::startTrans();
           try{

               $update = [
                   'member_recharge_account'=>['exp',"member_recharge_account+$recharge_count"],
                   'member_value'=>['exp',"member_value+$recharge_count*0.1"],
                   'member_account'=>['exp',"member_account+$member_count"]
               ];
               Db::table("think_member")->where(['member_id'=>$member_id])->update($update);
               //会员充值记录
               $log = [
                   'recharge_value'=>empty($give_count) ? "充值{$recharge_count}元" : "充值{$recharge_count}元，赠送{$give_count}元",
                   'recharge_prev'=>$info['member_account'],
                   'recharge_type'=>10,
                   'recharge_next'=>floatval($info['member_account']+$member_count),
                   'recharge_count'=>$recharge_count,
                   'member_id'=>$member_id
               ];
               Db::table("think_member_recharge")->insertGetId($log);
               //会员成长值记录
               $member_value_log = [
                   'recharge_value'=>"会员成长值增长{$value}",
                   'recharge_prev'=>$info['member_account'],
                   'recharge_next'=>floatval($info['member_account']+$member_count),
                   'recharge_type'=>40,
                   'member_id'=>$member_id
               ];
               Db::table("think_member_recharge")->insertGetId($member_value_log);
               // 提交事务
               Db::commit();
           } catch (\Exception $e) {
               // 回滚事务
               Db::rollback();
               $msg = $e->getMessage();
           }
           showMessages($msg,'memberList.html',1);
       }else{
           showMessages("请求出错",'memberList.html',1);
       }
   }
//会员明细

    public function member_recharge_detail(){
        $member_id = \input("get.mid");
        $recharge_list = BaseCommon::findMoreAndPages("member_recharge","*",['member_id'=>$member_id],'recharge_id desc',"",20);
        $this->assign('recharge_list',$recharge_list['rows']);
        $this->assign("pages",$recharge_list['page']);
        return $this->fetch();
    }

    /**
     *
     * 会员明细删除
     *
     * **/
    public function member_recharge_del(){
        $id = \input('delId/a');
        $del_array=array_filter($id);
        $res = BaseCommon::deleteMore('member_recharge',['recharge_id'=>['in',$del_array]]);
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除会员明细成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            return json(['msg'=>"操作成功",'code'=>200]);
        }else{
            return json(['msg'=>"操作失败",'code'=>400]);
        }
    }


   /**
    *
    *   会员消费列表
    *
    *
    **/
   public function member_consume(){
       if(\request()->isPost()){
           $type = \input("post.consume_type");
           $goods_id = \input("post.goods_id");
           $member_id = \input("post.member_id");
           $content = \input("post.member_consume_content");
           $goods_info = BaseCommon::findOne("product","product_name,product_market_price",['product_id'=>$goods_id]);
           $member_info = BaseCommon::findOne('member','member_nickname,member_account,member_value',['member_id'=>$member_id]);
           $grade_info = return_member_grade($member_info['member_value']);
           Db::startTrans();
           $price = $goods_info['product_market_price'];
           $msg = "下单消费成功";
           switch ($type){
                //余额支付
                case 20:
                    //会员折扣价格
                    $discount_price = ($grade_info['grade_goods_discount']/100)*$price;
                    try{
                        //更新会员余额
                        Db::table("think_member")->where(['member_id'=>$member_id])->update(["member_account"=>["exp","member_account-$discount_price"]]);
                        //添加会员余额变动日志
                        $value = [
                            'recharge_value'=>"尊敬的{$member_info['member_nickname']}:你购买了产品{$goods_info['product_name']};原价：{$price}，折扣：{$discount_price}",
                            'member_id'=>$member_id,
                            'recharge_prev'=>floatval($member_info['member_account']),
                            'recharge_next'=>($member_info['member_account']-$discount_price),
                            'consume_type'=>$type,
                            'recharge_count'=>$price,
                            'recharge_type'=>20
                        ];
                        Db::table("think_member_recharge")->insertGetId($value);
                        //提交事物
                        Db::commit();
                    }catch (\Exception $e){
                        $msg = $e->getMessage();
                        //回滚事务
                        Db::rollback();
                    }

                    break;
                //现金支付
                case 10:
                    try{

                        $update_info = [
                            "member_account"=>["exp","member_account-$price"]
                        ];
                        //更新会员余额
                        Db::table("think_member")->where(['member_id'=>$member_id])->update($update_info);
                        //添加会员余额变动日志
                        $value = [
                            'recharge_value'=>"尊敬的{$member_info['member_nickname']}:你购买了产品{$goods_info['product_name']};花费￥{$price}",
                            'recharge_prev'=>($member_info['member_account']),
                            'recharge_next'=>($member_info['member_account']-$price),
                            'consume_type'=>$type,
                            'recharge_count'=>$price,
                            'member_id'=>$member_id,
                            'recharge_type'=>20
                        ];
                        Db::table("think_member_recharge")->insertGetId($value);
                        //提交事物
                        Db::commit();
                    }catch (\Exception $e){
                        $msg = $e->getMessage();
                        //回滚事务
                        Db::rollback();
                    }
                    break;
            }
           showMessages($msg,"memberList.html",10);

       }else{
           $consume_list = BaseCommon::findMoreAndPages("member_recharge",'*',['recharge_type'=>20],"recharge_time desc","",5);
           $this->assign("consume_list",$consume_list);
           $this->assign("active",299);
           return $this->fetch();
       }

   }


























    /**
     *
     * 空操作
     *
     * **/
    public function _empty(){
        parent::_empty();
    }
}

?>