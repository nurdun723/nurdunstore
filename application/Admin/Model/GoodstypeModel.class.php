<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/5
 * Time: 16:18
 */

namespace Admin\Model;
use Think\Model;

class GoodstypeModel extends Model{
    //自动验证
    protected $_validate=array(
        array('typeName','require','商品分类名称不能为空！',1),
        array('typeName','','商品分类员名称已存在！',1,'unique',1),
    );

    public function goodstypes(){
        $data=$this->order('typeId desc')->select();
        return $this->resort($data);
    }

    public function resort($data,$pid=0,$level=0){
        static $arr=array();
        foreach($data as $k=>$v){
            if($v['typepid']==$pid){
                $v['lavel']=$level;
                $arr[]=$v;
                $this->resort($data,$v['typeid'],$level+1);
            }
        }
        return $arr;
    }

    /*-----获取子栏目ID------*/
    public function getchild($id){
        $data=$this->select();
        return $this->getchildes($data,$id);
    }

    /*------获取子栏目ID的递归方法-----*/
    public function getchildes($data,$id){
        static $arrId=array();//负责记录本栏目ID和本栏目下的子栏目ID
        $arrId[]=$id;
        foreach ($data as $k=>$v){
            if($v['typepid']==$id){
                $arrId[]=$v['typeid'];
                $this->getchildes($data,$v['typeid']);
            }
        }
        return array_unique($arrId);
    }


}








