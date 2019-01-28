<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	if(!isset($_SESSION['userid'])) { 
    //跳转到首页
	//return $this->success(L('您还未登录') , U('Index/index') , 2);
	}
     else{
    //跳转到登录页面
	
     
	 $this->assign('username',$_SESSION['username']);

   /*  echo "<script>window.location.href='index.php/member/login/';</script>"; */
     
    } 


		
	 $this->display();
    }
	
	 
}