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
	//�ж��û����Ƿ��ظ�
	public function oper1(){
		if($_POST){
		    $username = I("post.username");//��ȡ�û�id
			$G=M('userinformation');//�������ݿ�
			$r=$G->where("username='$username'")->find();//�������ݿ�
			
			if(empty($r)){
			   echo 1; //���û���ҵ����ʾû�и������ǿ����õģ�����1  
		   }else{
			   echo 0; //����ҵ����ʾ�������Ѿ���ע��������ã�����0  
		} 
		}
	}
 public function register(){
		 if($_POST){
			
			 $nowtime=date('Y-m-d H-i-s',time());//ע��ʱ�伴��ǰʱ��
			 $username=I("post.username");//��ȡ�û���
			 $userid = I("post.email");//��ȡ��½�˺ż�����
			 $pw=I("post.password");//��ȡ����
			 $password=md5($pw);//�������
			 $token=md5($username.$pw.$nowtime);//����ʶ����
			 $token_time=date('Y-m-d H-i-s',time()+60*60*24);//����ʱ��24��Сʱ
			
			 $data['id']=$userid;
			 $data['username']=$username;
			 $data['password']=$password;
			 $data['regtime']=$nowtime;
			 $data['token']=$token;
			 $data['token_time']=$token_time;
			 $G=M('userinformation');//�������ݿ�
			 $r=$G->add($data);//�����ݿ��������
			 if($r){
				 
				$this->success('ע��ɹ����������¼', U('Home/Login/index'));
				 /* sendMail('694325293@qq.com','lvyou�˺ż�����ʾ','�װ���".$username."��<br/>��л������վע�������ʺš�<br/>�������Ӽ��������ʺ�:<br/> 
    <a href='http://localhost/thinkphp/index.php/Home/Login/index.html?verify=".$token."' target= '_blank'>http://localhost/thinkphp/index.php/Home/Login/index.html?verify=".$token."</a><br/> 
    ������������޷�������뽫�����Ƶ�����������ַ���н�����ʣ�������24Сʱ����Ч��"); */

		    // } else {
//����ҳ���Ĭ����תҳ���Ƿ���ǰһҳ��ͨ������Ҫ����
              // $this->error('ע��ʧ��');
           } 
			
		 }
	 }
	
}