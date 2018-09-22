<?php
namespace app\back\model;
use think\Model;
class News extends Model{
    /**
     * 
     * 新增新闻
     * 
     * **/
    public function addArticle($data){
        return db("news")->insert($data);
    }
    /**
     * 
     * 删除新闻
     * 
     * **/
    public function deleteAll($id){
        
        return db("news")->where('n_id','in',$id)->update(['news_delete'=>20]);
    }
    /**
     * 
     * 条件查询新闻列表
     * 
     * **/
    public function getArticleList($where){
        return db('news')->where($where)->order("news_time","desc")->paginate();
    }
    /**
     * 
     * 新增分类数据
     * 
     * **/
    public function addClass($data){
        return db("column")->insert($data);
    }
    /**
     * 
     * 编辑保存分类数据
     * 
     * **/
    public function editClass($data){
        return db("column")->update($data);
    }
    /**
     * 
     * 获取新闻分类列表
     * 
     * **/
    public function selectColumnList($where=''){
        return db('column')->where($where)->order('column_order desc')->select();
    }
    /**
     * 
     * 删除栏目
     * 
     * **/
    public function deleteAllClass($id){
        return db("column")->where('c_id','in',$id)->delete();
    }
    /**
     * 
     * 编辑新闻
     * 
     * **/
    public function editNews($data){
        return db("news")->update($data);
    }
    /**
     * 
     * 添加文章来源
     * 
     * **/
    public function insertSource($data){
        return db("source")->insert($data);
    }
    /**
     *
     * 查询文章来源
     *
     * **/
    public function selectSource(){
        return db("source")->where('source_open','=',10)->select();
    }
    /**
     *
     * 编辑文章来源
     *
     * **/
    public function editSource($data){
        return db('source')->update($data);
    }
    /**
     *
     * 删除新闻来源
     *
     * **/
    public function deleteSource($id){    
        return db("source")->where('sid','in',$id)->delete();
    }
    /**
     * 
     * 新增文章属性
     * 
     * **/
    public function insertArticleType($data){
        return db("articletype")->insert($data);
    }
    /**
     *
     * 删除文章属性
     *
     * **/
    public function delArticleType($id){
        return db("articletype")->where('atid','in',$id)->delete();
    }
    /**
     *
     * 查询文章属性
     *
     * **/
    public function selectArticleSource(){
        return db("articletype")->select();
    }
    /**
     *
     * 编辑文章属性
     *
     * **/
    public function editArticleType($data){
        return db("articletype")->update($data);
    }
}