<?php
namespace app\back\model;

/**
 * @company 至开科技
 * @author 海豚之泪
 * @email 499211940@qq.com
 * @time  2017-09-30
 *
 * *******************************************************************************************/
 
use think\Model;
class Member extends Model{
    /**
     * 
     * 获取会员列表
     * 
     * **/
    public function getMemberList($where=""){
        if(empty($where)){
            $where = ['member_open'=>['neq',30],];
        }
        return db("member")->where($where)->paginate(15);
    }
    /**
     * 
     * 添加会员
     * 
     * **/
    public function addMember($data){
        return db("member")->insert($data);
    }
    /**
     * 
     * 根据条件查询会员信息
     * 
     * **/
    public function checkMember($where){
        return db("member")->where($where)->find();
    }
    /**
     * 
     * 编辑会员信息
     * 
     * **/
    public function saveMember($savedata){
        return db("member")->fetchSql(true)->update($savedata);
        
    }
    /**
     *
     * 软删除会员
     *
     * **/
    public function delMoreMember($id,$status){
        return db("member")->where('member_id','in',$id)->setField('member_open',$status);
    }
    /**
     * 
     * 删除会员
     * 
     * **/
    public function deleteMember($id){
        return db("member")->where('member_id','in',$id)->delete();
    }
    /**
     *
     * 添加会员等级
     *
     *
     **/
    public function addMemberGrade($data){
        return db('member_grade')->insert($data);
    }
    /**
     *
     * 删除会员等级
     *
     *
     **/
    public function delMemberGrade($id){
        return db('member_grade')->where('grade_id','in',$id)->delete();
    }
}