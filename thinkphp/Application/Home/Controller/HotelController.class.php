<?php
namespace Home\Controller;
use Think\Controller;
class HotelController extends Controller {
	
    public function index(){
	
	
	 $this->display();
}
  public function oper(){
	
	if($_POST){
		$hotelid=I("post.hotelid");//获取从前端传递过来的酒店id
	    $ordertime=date('Y-m-d H-i-s',time());//订单时间
		$id=session("userid");//获取用户id
		if(empty($id)){
			
			echo 2;//如果用户没有登录返回2
			
		}else{
		$orderid=substr(date("ymdHis"),2,8).mt_rand(100000,999999);//生成订单号
        $username=session("username");//获取用户名
		$data['hotelid']=$hotelid;
	    $data['orderid']=$orderid;
	    $data['ordertime']=$ordertime;
		$data['id']=$id;
		$data['username']=$username;
		
		$G=M('orders');//连接数据库
		$r=$G->add($data);//将数据添加到order表里面去
		
		if($r){
			echo 1;//如果添加成功则返回1
		}else{
			echo 0;//添加失败则返回0
		}
		}
	}
}
 

}