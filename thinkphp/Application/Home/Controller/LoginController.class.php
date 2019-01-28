<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
		
		
    $this->display();
}
//登陆控制器
  public function oper(){
	if ($_POST) {
	  $psw1=I('post.password');//获取用户密码
	  $psw=md5($psw1);//密码加密
	  $userid = I("post.email");//获取用户id即邮箱
			$G=M('userinformation');//连接数据库
			
			// 查询用户记录
			$w['id']=array('eq',$userid);
			$user=$G->field('id,password,username')->where($w)->find();//查询数据库
            
             
	  
	        $psw2=$user['password'];//取出查询到的用户密码并且赋值
	  
     if (empty($user)) {
       $this->error(L('用户不存在'));//如果没有查询到则显示用户不存在
      }
	if ($psw!=$psw2) {
	
		
      $this->error(L('密码错误'));//如果密码不正确则显示密码错误
	  }else{
		  $nowtime=date('Y-m-d H-i-s',time());//登陆时间
		  import('ORG.Net.IpLocation');// 导入IpLocation类
		  
          
		  $Ip = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 
		  $location  = $Ip->getlocation(''); // 获取域名服务器所在的位置
		 
		  $info =  $location['country'].$location['area'];
		  
		  $data['id']=$userid;
		  $data['loginip']=$location['ip'];
		  $data['country']=$location['country'];
		  $data['area']=$location['area'];
		  $data['logintime']=$nowtime;
	      $F=M('logininformation');//连接登陆表
			 $r=$F->add($data);//向登录表添加数据
	  
	  }
      $username = $user['username'];
	 
	  session('userid',$userid);//将id存入到session当中
	  session('username',$username);//将用户名存入到session当中
	 if($r){
    return $this->success(L('登陆成功') , U('Index/index') , 0);//如果向登录表添加数据成功则登陆成功返回到首页
	 }
	}
}

}
?>