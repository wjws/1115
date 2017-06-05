<?php

// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");//设置utf-8
class UserController extends Controller {
	function __call($method, $args){}
// 	public function _empty($name){
// 		//把所有城市的操作解析到city方法
// 		$this->city($name);
// 	}
// 	//注意 city方法 本身是 protected 方法
// 	protected function city($name){
// 		//和$name这个城市相关的处理
// 		echo '当前城市' . $name;
// 	}
	
	
	//用户登陆
    public function login(){
    	
    	$this->display();
    }
    //注册
    public function register(){
    	$this->display();
    }
    //清除缓存
    function delRuntime(){
    	$del=delFileByDir(RUNTIME_PATH);
    	echo "OK";
    }
}