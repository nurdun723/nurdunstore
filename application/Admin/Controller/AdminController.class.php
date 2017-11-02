<?php

//管理员管理

namespace Admin\Controller;
use Think\Page;

class AdminController extends CommonController
{
   //管理员列表
    public function lst(){
        $admin=D('admin');
        $count= $admin->count();// 查询总记录数
        $Page= new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $adminiers= $admin->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign("adminers",$adminiers);
        $this->display();

    }

    //管理员添加
    public function add(){
        //实例化Admin模型
        $admin=D('admin');
        //判断表单
        if(IS_POST){
           //创建数据对象 但不保存到数据库而且可以自动验证
           if($admin->create()){
               $admin->password=/*md5(*/$admin->password/*)*/;
               //添加数据
               if($admin->add()){
                   $this->success('添加管理员成功！',U('lst'));
               }else{
                   $this->error('管理员添加失败！');
               }
           }else{
               //操作错误跳转的快捷方法 ->　error();
               //返回模型的错误信息 -> getError()
               $this->error($admin->getError());
           }
           return;
        }
        $this->display();

    }

    //管理员编辑
    public function edit(){
        $admin=D('admin');
        $result=$admin->find(I('id'));
        if(IS_POST){
            if($admin->create()){
                if(I('password')){
                    $admin->password=/*md5(*/I('password')/*)*/;
                }else{
                    $admin->password=$result['password'];
                }
                if($admin->save() !== false){
                    $this->success("修改成功！",U('lst'));
                }else{
                    $this->error('修改失败');
                }
            }else{
                $this->error($admin->getError());
            }
            return;
        }

        $this->assign('adminers',$result);
        $this->display();
    }

    //管理员删除
    public function delt(){
        $admin=D('admin');
        if($admin->delete(I('id'))){
            $this->success('删除管理员成功!');
        }else{
            $this->error('删除管理员失败！');
        }
    }

    //退出后台系统
    public function logout(){
        if(!session(null)){
            $this->success("退出成功！",U('Login/login'));
        }else{
            $this->error('退出失败');
        }
    }
}