<?php

/**
 * @company 陈中
 * @author 海豚之泪
 * @email 499211940@qq.com
 *
 * *******************************************************************************************/
 
namespace app\back\controller;

 use app\back\controller\BaseAdmin;
 use app\back\model\News as NewsModel;
 use app\common\controller\Logs;
 use think\Request;
class News extends BaseAdmin{
    private $model = "";
    public function _initialize(){
        parent::_initialize();
        $this->model = new NewsModel;
        $this->assign("active",10);
    }
    /**
     * 
     * 新文新闻
     * 
     * **/
    public function news(){
        $search = array();
        $where = ['news_delete'=>['in','10,30']];
        $start_time = \input("start_time");
        $end_time   = \input("end_time");
        $search = array(
            'news_classid'=>'',
            'key'=>'',
            'date-range-picker'=>'',
            'news_flag'=>'',
            'news_delete'=>''
        );
        if(\input('date-range-picker')){
            $time = explode('-',\input('date-range-picker'));
            if(strtotime($time[0])!=strtotime($time[1])){      
                $start_time = date('Y-m-d H:i:s',strtotime($time[0]));
                $end_time   = date('Y-m-d H:i:s',strtotime($time[1]));
                $where['news_time'] = ['between',"$start_time,$end_time"];
            }
            $search['date-range-picker'] = \input('date-range-picker');
        }
        if(\input('key')){
            $key = \input('key');
            $where['news_title|news_key|news_auto|news_scontent|news_titleshort|news_content'] = ['like',"%$key%"];
            $search['key'] = \input('key');
        }
        if(\input("news_classid")){
            $where["news_classid"] = \input("news_classid");
            $search['news_classid'] = \input("news_classid");
        }
        if(\input("news_delete")){
            $where["news_delete"] = \input("news_delete");
            $search['news_delete'] = \input("news_delete");
        }
        if(\input("news_flag")){
            $where["news_flag"] = \input("news_flag");
            $search['news_flag'] = \input("news_flag");
        }     

        $news = $this->model->getArticleList($where);
        $column_list = $this->model->selectColumnList();
        $this->assign("page",$news->render());
        $this->assign("column_list",ColumnTree($column_list));
        //文章来源
        $source = $this->model->selectSource();
        $this->assign("source",$source);
        //文章属性
        $news_type = $this->model->selectArticleSource();
        $this->assign("newsType",$news_type);
        $this->assign("news_data",$news);
        $this->assign("search",$search);
        return  $this->fetch("news/news");
    }
    /**
     * 
     * 发布新闻
     * 
     * **/
    public function news_add(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file("loadimg");
            
            if(!empty($file)){
                $info = image_upload($file,false,'');//缩略图
                $data['news_img'] = $info['return_img'];
            }
            //多文件
            $morefile = \request()->file("news_moreImg");
            if(!empty($morefile)){
                $moreinfo = image_uploadMoreFiles($morefile,false,"");//缩略图
                $data['news_moreImg'] = implode('|',$moreinfo['return_img']);
            }else{
                $data['news_moreImg'] = "";
            }
            //审核
            if(empty($data['news_delete'])){
                $data['news_delete'] = 10;
            }
            unset($data['type']);
            $result = $this->model->addArticle($data);
            if($result){
                $logs = array(
                    'log_title'=>\session('username') . "发布新闻成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("发布新闻成功",'news.html',5);
            }else{
                showMessages("发布新闻失败",'news.html',3);
            }
        }else{
            //栏目分类
            $where = "";
            $column_list = $this->model->selectColumnList($where);
            //文章来源及分类
            $source = $this->model->selectSource();
            $this->assign("source",$source);
            //文章属性
            $articletype=$this->model->selectArticleSource();
            $this->assign("articletype",$articletype);
            if(Request::instance()->isAjax()){
                echo json_encode(array('data'=>$column_list));exit;
            }else{
                $this->assign("column_list",ColumnTree($column_list));
                return $this->fetch("news/news_add");
            }
            
        }
    }
    /**
     * 
     * 新闻编辑
     * 
     * **/
    public function news_edit(){
            $id = \input('id');
            //栏目分类
            $where = "";
            $column_list = $this->model->selectColumnList($where);
        
            $info = db('news')->where("n_id","=",$id)->find();
            //文章属性
            $articletype=$this->model->selectArticleSource();
            $this->assign("articletype",$articletype);
            //文章来源
            $source = $this->model->selectSource();
            $this->assign("source",$source);
            $this->assign("info",$info);
            $this->assign("column_list",ColumnTree($column_list));
            return $this->fetch("news/news_edit");
        
    }
    /**
     * 
     * 保存编辑
     * 
     * **/
    public function news_editSave(){
        $data = \input("post.");
        
        $file = \request()->file("loadimg");
        
        if(!empty($file)){
            $info = image_upload($file,false,'');//缩略图
            $data['news_img'] = $info['return_img'];
        }
        if(!empty($data['news_class1'])){
            $data['news_classid'] = $data['news_class1'];
        }
        if(!empty($data['news_class2'])){
            $data['news_classid'] = $data['news_class2'];
        }
        if(!empty($data['news_class3'])){
            $data['news_classid'] = $data['news_class1'];
        }
        //多文件
        $morefile = \request()->file("news_moreImg");
        if(!empty($morefile)){
            $moreinfo = image_uploadMoreFiles($morefile,false,'');//缩略图
            $data['news_moreImg'] = implode('|',$moreinfo['return_img']);
        }

        $result = $this->model->editNews($data);
        if($result){
            $logs = array(
                'log_title'=>\session('username') . "编辑新闻成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            showMessages("编辑新闻成功",'news.html',2);
        }else{
            showMessages("编辑新闻失败",'news.html',2);
        }
    }
    /**
     * 
     * 删除新闻
     * 
     * **/
    public function news_del(){
        $id = \input('id/a');
        $res = $this->model->deleteAll(array_filter($id));
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除新闻成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除新闻成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除新闻失败",'code'=>400));
        }
    }
    /**
     * 
     * 新闻分类
     * 
     * **/
    public function news_class(){
        //新闻分类数
        $list = $this->model->selectColumnList();
        $this->assign("column_list",ColumnTree($list));
        return $this->fetch("news/news_class");
    }
    /**
     * 
     * 新闻分类
     * 
     * **/
    public function news_class_add(){
        if(request()->post()){
            $data = \input("post.");
            $file = \request()->file('column_img');
            
            if(!empty($file)){
                 $info = image_upload($file);//缩略图
                 $data['column_img'] = $info['return_img'];
            }
            
            $res = $this->model->addClass($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "添加栏目成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加栏目成功",url('news/news_class'),5);
            }elsE{
                showMessages("添加栏目失败",url('news/news_class'),5);
            }
        }else{
            //新闻分类数
            $list = $this->model->selectColumnList();
            $this->assign("column_list",ColumnTree($list));
            return $this->fetch();
        }
    }
    /**
     *
     * 分类编辑
     *
     * **/
    public function news_class_edit(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file('column_img');
            if(!empty($file)){
                $info = image_upload($file);//缩略图
                $data['column_img'] = $info['return_img'];
            }
            $res = $this->model->editClass($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "编辑栏目分类成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑栏目分类成功",url('news/news_class'),5);
            }elsE{
                showMessages("编辑栏目分类失败",url('news/news_class'),3);
            }
        }else{
            $id = \input('id');
            $info = db("column")->where(['c_id'=>$id])->find();
            //新闻分类数
            $list = $this->model->selectColumnList();
            $this->assign("column_list",ColumnTree($list));
            $this->assign("info",$info);
            return $this->fetch("news/news_class_edit");
        }
    }
    /**
     * 
     * 删除栏目
     * 
     * **/
    public function del_news_class(){
        $id = \input('id/a');
        $res = $this->model->deleteAllClass(array_filter($id));
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除栏目成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除栏目成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除栏目失败",'code'=>400));
        }
    }
    /**
     * 
     * 领导机构
     * 
     * **/
    public function leader(){
        $leader_list = db("leader_job")->alias("lj")->join("think_leader l","l.leader_jobid=lj.leader_job_id")->order("lj.leader_job_order","asc")->select();
        $this->assign("leader_list",$leader_list);
        return $this->fetch("news/leader");
    }
    /**
     * 
     * 领导人员----编辑
     * 
     * **/
    public function edit_leader(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file("file");
            if(!empty($file)){
                $info = image_upload($file);//缩略图
                $data['leader_logo'] = $info['return_img'];
            }
            
            $res = db("leader")->update($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "编辑领导人成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                
                Logs::log($logs);
                showMessages("编辑领导人成功",url('news/leader'),5);
            }else{
                showMessages("编辑领导人失败",url('news/leader'),5);
            }
        }else{
            $id = \input("id");
            $info = db("leader")->where('id','=',$id)->find();
            $this->assign("info",$info);
            $column_list = db("leader_job")->order("leader_job_order",'asc')->select();
            $this->assign("column_list",$column_list);
            return $this->fetch("news/leader_edit");
        }
    }
    /**
     * 
     * 删除领导人员
     * 
     * **/
    public function del_leader(){
        $id = \input('id/a');
        $res = db("leader")->where('id','in',array_filter($id))->delete();
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除领导人员成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除领导人员成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除领导人员失败",'code'=>400));
        }
        
    }
    /**
     * 
     * 添加领导人员班子
     * 
     * **/
    public function leader_add(){
        if(\request()->post()){
            $data = \input("post.");
            $file = \request()->file("file");
            if(!empty($file)){
                $info = image_upload($file);//缩略图
                $data['leader_logo'] = $info['return_img'];
            }
            
            $res = db("leader")->insert($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "发布领导人成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                
                Logs::log($logs);
                showMessages("发布领导人成功",url('news/leader'),5);
            }else{
                showMessages("发布领导人失败",url('news/leader'),3);
            }
        }else{
            $column_list = db("leader_job")->order("leader_job_order",'asc')->select();
            $this->assign("column_list",$column_list);
            return $this->fetch("news/leader_add");
        }
        
    }
    /**
     * 领导职务
     * **/
    public function lead(){
            $list = db("leader_job")->order("leader_job_order","asc")->select();
            $this->assign("job_list",$list);
            return $this->fetch('news/leader_job');
    
    }
    /**
     * 
     * 领导职务---添加
     * 
     * **/
    public function leader_job_add(){
        if(\request()->post()){
            $data = \input('post.');
            $res = db("leader_job")->insert($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "发布领导人成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                
                Logs::log($logs);
                showMessages("发布领导职务成功",url('news/lead'),5);
            }else{
                showMessages("发布领导职务失败",url('news/lead'),5);
            }
        }else{
            $list = db("leader_job")->where("leader_job_pid","=",0)->select();
            if(!empty($list)){
                foreach($list as $key=>$value){
                   $list[$key]['list'] = db("leader_job")->where('leader_job_pid','=',$value['leader_job_id'])->select(); 
                }
            }
            $this->assign("list",$list);
            return $this->fetch('news/leader_job_add');
        }
    }
    /**
     * 
     * 领导职务---编辑
     * 
     * **/
    public function edit_leader_job(){
        if(\request()->post()){
            $data = \input('post.');
            $res = db("leader_job")->update($data);
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "编辑领导职务成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("编辑领导职务成功",url('news/lead'),5);
            }else{
                
                showMessages("编辑领导职务失败",url('news/lead'),5);
            }
        }else{
            $id = \input("id");
            $info = db("leader_job")->where('leader_job_id','=',$id)->find();
            $list = db("leader_job")->where("leader_job_pid","=",0)->select();
            if(!empty($list)){
                foreach($list as $key=>$value){
                   $list[$key]['list'] = db("leader_job")->where('leader_job_pid','=',$value['leader_job_id'])->select(); 
                }
            }
            $this->assign("list",$list);
            $this->assign("info",$info);
            return $this->fetch('news/leader_job_edit');
        }
    }
    /**
     * 
     * 领导职务---删除
     * 
     * **/
    public function del_leader_job(){
        $id = \input('id/a');
        $res = db("leader_job")->where('leader_job_id','in',array_filter($id))->delete();
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除领导职务成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            ); 
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除领导职务成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除领导职务失败",'code'=>400));
        }
    }
    /**
     * 
     * 新闻回收站
     * 
     * **/
    public function news_recycle(){
        if(\request()->post()){
            $id = input('id/a');
            $res = db("news")->where('n_id','in',$id)->delete();
            if($res){
                $logs = array(
                    'log_title'=>\session('username') . "清空新闻回收站成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                echo json_encode(array('msg'=>"清空新闻回收站成功",'code'=>200));
            }else{
                echo json_encode(array('msg'=>"清空新闻回收站失败",'code'=>400));
            }
        }else{
            $where = ['news_delete'=>0];
            $news = $this->model->getArticleList($where);
            $this->assign("page",$news->render());
            $this->assign("news_data",$news);
            return $this->fetch('news/recycle');
        }
    }
    /**
     * 
     * 新闻回收站还原
     * 
     * **/
    public function news_restore(){
        $id = \input("id");
        $resturn = db("news")->where("n_id","=",$id)->update(['news_delete'=>10]);
        if($resturn){
            $logs = array(
                'log_title'=>\session('username') . "新闻还原成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"新闻还原成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"新闻还原失败",'code'=>400));
        }
    }
    /**
     * 
     * 新闻来源
     * 
     * **/
    public function news_source(){
        if(\request()->isPost()){
            $data = \input("post.");
            $re = $this->model->insertSource($data);
            if($re){
                $logs = array(
                    'log_title'=>\session('username') . "新闻还原成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加新闻来源成功",'source.html',3);
            }else{
                showMessages("添加新闻来源成功",'source.html',3);
            }
        }else{
            $source = $this->model->selectSource();
            $this->assign('source_obj',json_encode($source));
            $this->assign("source",$source);
            return $this->fetch("news/source");
        }
        
    }
    /**
     *
     * 编辑来源
     *
     * **/
    public function editSource(){
        if(\request()->isPost()){
            $data = input("post.");
            $result = $this->model->editSource($data);
            if($result){
                showMessages("编辑新闻来源成功",'source.html',3);
            }else{
                showMessages("编辑新闻来源失败",'source.html',3);
            }
        }
    }
    /**
     * 
     * 删除来源
     * 
     * **/
    public function news_source_del(){
        $id = \input('id/a');
        $res = $this->model->deleteSource(array_filter($id));
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除新闻来源成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除新闻来源成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除新闻来源失败",'code'=>400));
        }
    }
    /**
     * 
     * article属性管理
     * 
     * **/
    public function articleSource(){
        if(\request()->isPost()){
            $data = \input("post.");
           
            $re = $this->model->insertArticleType($data);
            if($re){
                $logs = array(
                    'log_title'=>\session('username') . "添加文章属性成功",
                    'log_time'=>time(),
                    'u_name'=>\session('username'),
                    'uid'=>\session("user_id")
                );
                Logs::log($logs);
                showMessages("添加文章属性成功",'articalsource.html',3);
            }else{
                showMessages("添加文章属性成功",'articalsource.html',3);
            }
        }else{
            $source = $this->model->selectArticleSource();
            $this->assign('source_obj',json_encode($source));
            $this->assign("source",$source);
            return $this->fetch("news/articleSource");
        }
    }
    /**
     * 
     * 删除文章属性
     * 
     * **/
    public function delArticleType(){
        $id = \input('id/a');
        $res = $this->model->delArticleType(array_filter($id));
        if($res){
            $logs = array(
                'log_title'=>\session('username') . "删除文章属性成功",
                'log_time'=>time(),
                'u_name'=>\session('username'),
                'uid'=>\session("user_id")
            );
            Logs::log($logs);
            echo json_encode(array('msg'=>"删除文章属性成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除文章属性失败",'code'=>400));
        }
    }
    /**
     *
     * article属性编辑管理
     *
     * **/
    public function editArticleSource(){
        if(\request()->isPost()){
            $data = \input("post.");
            $re = $this->model->editArticleType($data);
            if($re){
                showMessages("编辑文章属性成功",'articalsource.html',3);
            }else{
                showMessages("编辑文章属性成功",'articalsource.html',3);
            }
        }
    }
}