<?php
namespace Admin\Controller;
use Think\Controller;
//后台首页
class IndexController extends Controller {
    public function index()
    {
        $this->display();
    }
}