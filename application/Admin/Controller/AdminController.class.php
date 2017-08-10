<?php

//管理员管理

namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller
{
   //管理员列表
    public function lst(){
        $this->display();
    }

    //管理员添加
    public function add(){
        $this->display();
    }

    //管理员编辑
    public function edit(){
        $this->display();
    }

    //管理员删除
    public function delt(){
        $this->display();
    }
}