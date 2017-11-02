<?php
//管理员模型
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
    //自动验证
    protected $_validate=array(
        array('username','require','管理员名称不能为空！',1),
        array('password','require','管理员密码不能为空！',1,'regex'),
        array('username','','管理员名称已存在！',1,'unique',2),
        array('verify','verify','验证码不正确！',1,'callback',4),
    );
     //对比数据
    public function login($username='',$password=''){
        $info=$this->where("username='$username' and password='$password'")->find();
        if($info){
            session("admin_id",$info['id']);
            session("admin_name",$info['username']);
            return $info;
        }else{
            return false;
        }

    }
    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    /*可以用Think\Verify类的check方法检测验证码的输入是否正确*/
    function verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
}