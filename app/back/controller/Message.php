<?php
namespace app\back\controller;

use app\back\controller\BaseAdmin;
class Message extends BaseAdmin{
    /**
     * 
     * 留言列表
     * 
     * **/
    public function message(){
        $list = db('message')->paginate(20);
        $this->assign("page",$list->render());
        $this->assign("message_list",$list);
        return $this->fetch('message/message');
    }
    /**
     * 
     * 删除留言记录
     * 
     * **/
    public function del_message(){
        $id = \input('post.delId');
        $res = db('message')->where("message_id","=",$id)->delete();
        if($res){
            echo json_encode(array('msg'=>"删除留言功能成功",'code'=>200));
        }else{
            echo json_encode(array('msg'=>"删除留言功能失败",'code'=>400));
        }
    }
}