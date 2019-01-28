<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
 <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/user/style.css">
  <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/user/reset.css">
  <script type="text/javascript" src="/thinkphp/Public/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/register/jquery.metadata.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/register/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery.extend(jQuery.validator.messages, {
  required: "必须填写字段",
  remote: "请修正该字段",
  email: "请输入正确格式的电子邮件",
  url: "请输入合法的网址",
  date: "请输入合法的日期",
  dateISO: "请输入合法的日期 (ISO).",
  number: "请输入合法的数字",
  digits: "只能输入整数",
  creditcard: "请输入合法的信用卡号",
  equalTo: "请再次输入相同的值",
  accept: "请输入拥有合法后缀名的字符串",
  maxlength: jQuery.validator.format("请输入一个 长度最多是 {0} 的字符串"),
  minlength: jQuery.validator.format("请输入一个 长度最少是 {0} 的字符串"),
  rangelength: jQuery.validator.format("请输入 一个长度介于 {0} 和 {1} 之间的字符串"),
  range: jQuery.validator.format("请输入一个介于 {0} 和 {1} 之间的值"),
  max: jQuery.validator.format("请输入一个最大为{0} 的值"),
  min: jQuery.validator.format("请输入一个最小为{0} 的值")
});
$(document).ready(function(){


jQuery.validator.addMethod("userName", function(value, element) { 
return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value); 
}, "用户名只能包括中文字、英文字母、数字和下划线");
function setContent(str) {
str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
str.value = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
return str;
}
 $("#signupForm").validate({
    rules: {
     oldpassword:{
    required: true,
    minlength: 5,
	maxlength: 15,
	 remote:{                         //自带远程验证存在的方法  
                 url:"<?php echo U('Home/User/cpsw2');?>",  
                 type:"post",  
                 dataType:"text",  
                 data:{  
                      oldpassword:function(){return $("#oldpassword").val();}  
                 },  
                 dataFilter: function(data,type) {  
				
					if(data==0){
					return true
					} else if(data==1){
					return false
					} 
                }  
              } 
   },
   
   password:{
    required: true,
    minlength: 5,
	maxlength: 15,
   },
   repassword:{
    required: true,
    minlength: 5,
	maxlength: 15,
    equalTo: "#password"
   }
  },
  messages:{
  oldpassword:{
     required: "请输入密码",
    minlength: jQuery.format("密码不能小于{0}个字 符"),
	remote:"密码错误",
   },
   password:{
    required: "请输入密码",
    minlength: jQuery.format("密码不能小于{0}个字 符")
   },
   repassword:{
    required: "请输入确认密码",
    minlength: jQuery.format("密码不能小于{0}个字 符"),
    equalTo: "两次输入密码不一致"
   }}
   });
  

	var validator = $("#signupForm").validate({meta: "validate"}); 	  // 点击“保存”按钮时先验证，验证通过后方能保存	  
	$("#submit").click(function() { 	     
	if(validator.form()){
	 //document.signupForm.submit()  
    $('#signupForm').submit();        
	}	    
	});
	 });
</script>
<script>
var validator = $("#signupForm").validate({meta: "validate"}); 	  // 点击“保存”按钮时先验证，验证通过后方能保存	  
	$("#submit").click(function() { 	     
	if(validator.form()){
	 //document.signupForm.submit()  
    $('#signupForm').submit();        
	}	    
	});
</script>
<style>
#signupForm label.error 
{ 
width:300px;
color:Red; 
font-size:15px; 
margin-left:130px; 
padding-left:16px; 
text-align:left;
} 


</style>
</head>

<body style="background-color:white">
<!--网页导航-->
        <div class="head-nav">  
    <div style="padding-top:5px">
  <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Index/common.css">
  <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Index/navi.css">
 <!--网页导航-->
        <div class="head-nav">
            <div class="head-warp">
                <div style="width:200px;height:85px;position:absolute;margin-left:950px;margin-top:30px;color:white;font-size:16px"><?php echo session('username');?></div>
				<div style="width:200px;height:85px;position:absolute;margin-left:1050px;margin-top:30px;font-size:16px;cursor:pointer;" ><a href='/thinkphp/index.php/Home/User/logout'style="color:white;">退出</a></div>
                <div class="nav-body"style="margin-top:0px;">
                     <a href="/thinkphp/index.php/Home/Index/" url="" target="">首页</a>
					<a href="/thinkphp/index.php/Home/Navi/" url="" target="">印象关中</a>
					<a href="/thinkphp/index.php/Home/Navi/fengqing" url="" target="">关中风情</a>
					<a href="/thinkphp/index.php/Home/Navi/play" target="">玩在关中</a>
					<a href="/thinkphp/index.php/Home/Navi/road" url="" target="">精品路线</a>
					<a href="/thinkphp/index.php/Home/Login/">登陆</a>
					<a href="/thinkphp/index.php/Home/register1/">注册</a>
					<a href="/thinkphp/index.php/Home/User/"  target="_self">用户中心</a>
				</div>
            </div>
        </div>
        <!--网页导航 结束-->
		<script type="text/javascript" src="/thinkphp/Public/js/Index/common.js"></script>
    


    </div>
      </div>
        <!--网页导航 结束-->  
<div id="wrap" style="margin-top:100px">
  <div id="wrapTop">
  
    <div id="wrapBtm"> 
       
					<!--box-nav-->


		<!-- <style>

.header_menu .menu_line {width:80px; height:1px; background:#fff; position:absolute;bottom:-1px;_left:-10px;}
.regift_box1.regift_show {display:block;}
.m2yw_tab {height: 35px; background-color:#dee3e7}
.m2yw_tab ul li {cursor:pointer;color:#78797a;border:1px solid #b1b6ba;border-bottom:none;float: left; height: 30px; line-height: 24px; margin-right: 5px; text-align: center; width: 80px;margin-top:2px; font-size:18px;padding-top:2px}
.m2yw_tab ul .m2yw_cutli {background:white;border-top:2px solid #686a7a;font-weight: bold;}
.m2yw_tab ul .m2yw_cutli.menu_hover {border-bottom:1px solid #959595;background-color:#e9ecf3;}
.pageItem{cursor:pointer;padding-top:5px;}
.regift_box2 td{border-left:1px solid #b1b6ba;border-top:1px solid #b1b6ba}
.pageItem1{padding-top:5px;}
#page{padding-left:25px;}.
.items{}
</style>
<script type="text/javascript" src="/thinkphp/Public/js/jquery-1.11.0.min.js"></script>
<script>
function changeTab(m,n){
   var menu=document.getElementById("tab"+m).getElementsByTagName("li");  
   for(i=0;i<menu.length;i++)
    {
        menu[i].className=i==(n-1)?"m2yw_cutli":"";
    }
} 

</script>

<div class="m2yw_tab">
		    <ul id="tab2">
				<li style="margin-left:200px;" class="navItem m2yw_cutli" onclick="changeTab(2,1)" id="navItem1" ><a href="/thinkphp/index.php/Home/User/index">用户信息</a></li>
				<li class="navItem" name="receive" onclick="changeTab(2,2)" ><a href="/thinkphp/index.php/Home/User/cpsw" class="items">密码管理</a></li> 
				<li class="navItem" name="send" onclick="changeTab(2,3)"><a href="" class="items">消息中心</a></li>  
		    </ul>
		</div>	 -->


<style type="text/css">
body,ul,li{margin:0;padding:0;}
li{ list-style:none; }
.menu_20124162{padding-left:300px;width:100%;height:30px; background-color:#00AFFF;margin-top:-12px}
.menu_20124162 ul{ width:780px;float:left; display:inline;}
.menu_20124162 ul li{ width:76px;float:left;display:inline; margin:0 1px;}
.menu_20124162 ul li a{width:76px;height:26px;float:left; font-size:12px; text-align:center;margin:2px 0;line-height:26px; color:#fff; text-decoration:none;}
.menu_20124162 ul li a:hover{background:#89c1ff; }
</style>

	<div class="menu_20124162">
	<ul>
    	<li class="focus"><a href="/thinkphp/index.php/Home/User/index">用户信息</a></li>
        <li><a href="/thinkphp/index.php/Home/User/cpsw">密码管理</a></li>
        <li><a href="/thinkphp/index.php/Home/User/user">消息中心</a></li>
		<li><a href="/thinkphp/index.php/Home/User/order">订单查询</a></li>
        
      
    </ul>
</div>	  
        <!--/box-nav-->
    	<!--div#content-->
    	<div class="clearfix content-comm content-mmgl" id="content">
        	<div id="reg-page" class="con-in pw-management">            	
                <div class="box-pw-intro" style="padding-left:200px;">
                    	<p>重设密码说明：</p>
                        <p>1、一旦您修改了通行证密码，请您以新密码登录绿友门户网站。</p>
                        <p>2、温馨提示：为了您的帐号安全，密码最好不要设置成生日、电话号码、车牌和门牌号码。</p>
                    </div>
                <!--main-->
                <div class="main">
                	<!--form-->
                       <form  id="signupForm" method="POST" action="<?php echo U('Home/User/cpsw1');?>" class="form-pw-change js-validateMe" >	
                        <p class="account">
                        	<label for="account">帐号：</label>
                            <?php echo session('userid');?>                      </p>
													
                        <p class="pw js-field-oldpw">
                        	<label for="old_pw">旧密码：</label>
                            <input type="password" maxlength="15"  name="oldpassword" id="oldpassword" class="input-txt input-pw js-md5" >
                        
                        </p>
                        <p class="pw">
                        	<label for="pw">新密码：</label>
                            <input type="password"  maxlength="15" name="password" id="password" class="input-txt input-pw" >
                    
                        </p>
                        <p class="pw-re">
                        	<label for="pw-re">重复密码：</label>
                            <input type="password" maxlength="15" name="repassword" id="repassword" class="input-txt input-pw-re" >
                         
                        </p>
                        <p class="box-btn"><button type="submit"  class="btn btn-submit" id="submit"><span>确认修改</span></button></p>
						
                    </form>
                    <!--/form-->
                </div>
                <!--/main-->
            </div>
            
        </div>


  
    </div>
  </div>
</div>


</body>
</html>