<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/5
 * Time: 15:38
 */
//管理商品分类
namespace Admin\Controller;


class GoodsController extends CommonController
{
      //分类列表
      public function typelist(){
          $gdtype=D('goodstype');
          $result=$gdtype->goodstypes();
          /*var_dump($result);exit;*/
          $this->assign('result',$result);
          $this->display();
      }

      //添加分类
      public function addtype(){
          $data['typeName']=$_POST['typeName'];
          $data['typePid']=$_POST['typepid'];
          $gdtype=D('goodstype');
          if(IS_POST){
             if($gdtype->create()){
                 if($gdtype->add($data)){
                     $this->success('商品分类添加成功！,跳转中...',U('typelist'));
                 }else{
                     $this->error('失败！');
                 }
                 }else{
                 $this->error($gdtype->getError());
             }
             return;
          }
          $typename=$gdtype->goodstypes();
          $this->assign('types',$typename);
          $this->display();
      }

      /*----修改商品分类---*/

      public function edittype(){
          $gdtype=D('goodstype');
          if(IS_POST){
              $data = [
                  'typeId' => I('typeid'),
                  'typeName' =>I('typeName'),
                  'typepid'=>I('typepid')
              ];
              if($gdtype->create()){
                  if($gdtype->save($data)){
                      $this->success('商品分类修改成功！,跳转中...',U('typelist'));
                  }else{
                      $this->error('失败！');
                  }
              }else{
                  $this->error($gdtype->getError());
              }
              return;
          }

          $res=$gdtype->find(I('id'));
          $typename=$gdtype->goodstypes();
          $this->assign('types',$typename);
          $this->assign('res',$res);
          $this->display();
      }

      /*------删除分类---------*/
      public function delt($id){
           $gdtype=D('goodstype');
           $resultId=$gdtype->getchild($id);
           $resultId=implode(',',$resultId);
           if($gdtype->delete($resultId)){
               $this->success('删除成功！',U('typelist'));
           }else{
               $this->error('删除失败');
           }
      }
}