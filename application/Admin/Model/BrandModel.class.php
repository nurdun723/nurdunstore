<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/3
 * Time: 16:16
 */

namespace Admin\Model;
use Think\Model;

class BrandModel extends Model
{
   protected $_validate=array(
       array("brandName",'require','品牌名称不能为空！',1),
   );

   public function _before_insert($date,$option){
       var_dump($date);
       var_dump($option);die;
   }
}