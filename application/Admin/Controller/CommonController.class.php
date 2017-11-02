<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/29
 * Time: 18:24
 */

namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller
{
      public function __construct(){
          parent::__construct();
          if(!session('admin_id')){
              $this->error('请先登录',U('Login/login'));
          }
      }
}