<?php
//管理员模型
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
    //自动验证
    protected $_validate=array(
        array('admin_name','require','管理员名称不能为空！',1),
        array('admin_name','','管理员名称已存在！',1,'unique'),
        array('password','require','管理员密码不能为空！',1,'regex',1),
    );
}