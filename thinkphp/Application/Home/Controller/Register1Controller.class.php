<?php
namespace Home\Controller;
use Think\Controller;
class Register1Controller extends Controller {
    public function index(){
		
		
    $this->display();
    }
	public function oper(){
		if($_POST){
			
			$userid = I("post.email");
			
			$G=M('userinformation');
			$r=$G->where("id='$userid'")->find();
			
			if(empty($r)){
			   echo 1;   
		   }else{
			   echo 0;    
			} 
		} 
		
    }
	//判断用户名是否重复
	public function oper1(){
		if($_POST){
		    $username = I("post.username");//获取用户id
			$G=M('userinformation');//连接数据库
			$r=$G->where("username='$username'")->find();//查找数据库
			
			if(empty($r)){
			   echo 1; //如果没有找到则表示没有该邮箱是可以用的，返回1  
		   }else{
			   echo 0; //如果找到则表示该邮箱已经被注册过不可用，返回0  
		} 
		}
	}
 public function register(){
		 if($_POST){
			
			 $nowtime=date('Y-m-d H-i-s',time());//注册时间即当前时间
			 $username=I("post.username");//获取用户名
			 $userid = I("post.email");//获取登陆账号即邮箱
			 $pw=I("post.password");//获取密码
			 $password=md5($pw);//密码加密
			 $token=md5($username.$pw.$nowtime);//激活识别码
			 $token_time=date('Y-m-d H-i-s',time()+60*60*24);//过期时间24个小时
			
			 $data['id']=$userid;
			 $data['username']=$username;
			 $data['password']=$password;
			 $data['regtime']=$nowtime;
			 $data['token']=$token;
			 $data['token_time']=$token_time;
			 $G=M('userinformation');//连接数据库
			 $r=$G->add($data);//像数据库添加数据
			 if($r){
				 
				$this->success('注册成功，请您请登录', U('Home/Login/index'));
				 /* sendMail('694325293@qq.com','lvyou账号激活提示','亲爱的".$username."：<br/>感谢您在我站注册了新帐号。<br/>请点击链接激活您的帐号:<br/> 
    <a href='http://localhost/thinkphp/index.php/Home/Login/index.html?verify=".$token."' target= '_blank'>http://localhost/thinkphp/index.php/Home/Login/index.html?verify=".$token."</a><br/> 
    如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。"); */

		    // } else {
//错误页面的默认跳转页面是返回前一页，通常不需要设置
              // $this->error('注册失败');
           } 
			
		 }
	 }
	
}