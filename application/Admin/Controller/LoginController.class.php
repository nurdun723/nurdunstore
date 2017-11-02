<?php
//后台登录页面
namespace Admin\Controller;
use Think\Controller;
use Think\Think;

class LoginController extends Controller
{
     public function login(){
         $admin=D('admin');
         if(IS_POST){
             //对表单数据验证
            if($admin->create($_POST,4)){
                //对数据进行操作
               if($admin->login($_POST['username'],$_POST['password'])){
                    $this->success('登录成功！,跳转中...',U('Index/index'));
                    /*var_dump($admin->login());*/
                }else{
                    $this->error("用户名或者密码有误！");
                }
             }else{
                 $this->error($admin->getError());
             }
             return;
         }
         $this->display();
     }

     //验证码
    public function verify(){
        $config =    array(
            'fontSize'    =>    35,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
         $verify=new \Think\Verify($config);
         $verify->entry();
    }
}