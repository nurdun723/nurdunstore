<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/3
 * Time: 15:21
 */

namespace Admin\Controller;

/*------------品牌管理器-------*/
class BrandController extends CommonController
{
     /*-----品牌列表------*/
     public function brandlist(){
         $this->display();
     }

     /*-----品牌添加-----*/
     public function addbrand(){
         $brand=D('brand');
         if(IS_POST){
             if($brand->create()){
                 if($brand->add()){
                     $this->success('添加品牌成功!',U('brandlist'));
                 }else{
                     $this->error('添加品牌失败');
                 }
             }else{
                 $this->error($brand->getError());
             }

             return;
         }
         $this->display();
     }
}