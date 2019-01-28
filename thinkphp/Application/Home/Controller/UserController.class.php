<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	function __construct(){
        parent::__construct();
		
			if (!CheckLogin()) {
		
			$this->redirect('Home/Login/index', array() , 2, 'Dear user, Please visit the web site.');
		}       
    }
    public function index(){
		$userid=session('userid');
		$G=M('logininformation');
				$user=$G->where("id='$userid'")->field('logintime,country')
											->limit(1)
											->order("logintime desc")
											->select();
			 
			 
			 $this->assign('user',$user);
		
   



   $this->display();
}
 public function user(){
	$userid=session('userid');
		$G=M('logininformation');
				$user=$G->where("id='$userid'")->field('id,logintime,loginip,area,country')
											->limit(10)
											->order("logintime desc")
											->select();
			 
			 
			 $this->assign('user',$user);	
		
    $this->display();
}
  public function cpsw(){
	  
	  
	 $this->display(); 
	  
  }
 
 
 public function cpsw2(){
	
 if($_POST){
	
	$psw=I('post.oldpassword');
	$rpsw=md5($psw);
	$userid=session('userid');
	
	$G=M('userinformation');
			//print_r($userid);
			// 查询用户记录
			$w['id']=array('eq',$userid);
			$user=$G->field('password')->where($w)->find();
            $psw2=$user['password'];
      

	if($rpsw!=$psw2){
		echo 1;
		
	}else{
		
		echo 0;
	} 
	
 }

 }
public function cpsw1(){
	
   if($_POST){
	
	$repsw=I('post.repassword');//获取重复密码
	$psw=md5($repsw);//md5加密
	$userid=session('userid');//从session当中获取id
	$data['password']=$psw;
	$G=M('userinformation');//连接数据库
	$User=$G->where("id='$userid'")->save($data);//执行save更新数据操作
	
	if($User){
		return $this->success(L('修改成功,请重新登陆') , U('Login/index') , 0);//如果修改成功则重新登录
		
	}else{
		
		return $this->success(L('修改失败') , U('User/index') , 0);
	} 
}
}
//酒店订单查询
    public function order(){
		$userid=session('userid');//获取用户id
		$G=M('orders');//连接order数据库
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		
				
				$order=$G->where("id='$userid'")->field('hotelid,ordertime,orderid')
											->limit($Page->firstRow.','.$Page->listRows)
											->order("ordertime desc")
											->select();//查找数据
			 
			  
			  $this->assign('list',$show);//用模板输出
			  $this->assign('order',$order);
	 $this->display();
}
//登出控制器
public function logout(){
    
    // 销毁session
    session('[destroy]');
    $this->success(L('退出成功') , U('Index/index') , 0);
  }

}