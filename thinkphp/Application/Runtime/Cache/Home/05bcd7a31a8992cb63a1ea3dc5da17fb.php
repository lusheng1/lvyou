<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>旅游旅游门户网站</title>

<meta charset="utf-8">
<link href="/thinkphp/Public/css/register/home.css?v=2" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/thinkphp/Public/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/register/jquery.metadata.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/register/jquery.validate.min.js"></script>
</head>
<style>
.bns-01{background-image:url(/thinkphp/Public/img/taibai/taibai16.jpg);}
.bns-01 .con{background-image:url(/thinkphp/Public/img/taibai/taibai16.jpg);}
.bns-02{background-image:url(/thinkphp/Public/img/taibai/taibai16.jpg);}
.bns-02 .con{background-image:url(/thinkphp/Public/img/taibai/taibai16.jpg);}
.bns-03{background-image:url(/thinkphp/Public/img/taibai/taibai16.jpg);}
.bns-03 .con{background-image:url(/thinkphp/Public/img/taibai/taibai16.jpg);}
.banner-control a{position:absolute;top:258px;width:30px;height:30px;line-height:10;overflow:hidden;background-image:url(/thinkphp/Public/img/register/icon_control.png?v=201406241538);background-repeat:no-repeat;background-repeat:no-repeat;}
.reg-tab span{float:left;width:198px;height:57px;margin-left:-1px;line-height:57px;text-align:center;font-size:24px;color:#444;border-left:1px solid #d2d3d4;background:url(/thinkphp/Public/img/register/bg_tab_x.png?v=201406241538) repeat-x 0 0;cursor:pointer;}
.storage-info i{position:absolute;top:0;left:0;width:36px;height:30px;overflow:hidden;background-image:url(/thinkphp/Public/img/register/icon_storage.gif?v=201406241538);background-repeat:no-repeat;}
.reg-form label.error {color: red;font-size: 16px;font-weight: normal;line-height: 1.4;position:absolute;padding-top:50px;left:100px;width:100%;float: none;
		}
</style>
<body>
<div class="wrap">
<!--网页导航-->
        <div class="head-nav">  
   
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
        <!--网页导航 结束-->
  <div class="banner-show" id="js_ban_content">
    <div class="cell bns-01">
      <div class="con"> </div>
    </div>
    <div class="cell bns-02" style="display:none;">
      <div class="con"> <a href= target="_blank" class="banner-link"> <i>绿友</i></a> </div>
    </div>
    <div class="cell bns-03" style="display:none;">
      <div class="con"> <a href= target="_blank" class="banner-link"> <i>旅游门户网站</i></a> </div>
    </div>
  </div>
  <div class="banner-control" id="js_ban_button_box"> <a href="javascript:;" class="left">左</a> <a href="javascript:;" class="right">右</a> </div>
  <script type="text/javascript">
                ;(function(){
                    
                    var defaultInd = 0;
                    var list = $('#js_ban_content').children();
                    var count = 0;
                    var change = function(newInd, callback){
                        if(count) return;
                        count = 2;
                        $(list[defaultInd]).fadeOut(400, function(){
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                        $(list[newInd]).fadeIn(400, function(){
                            defaultInd = newInd;
                            count--;
                            if(count <= 0){
                                if(start.timer) window.clearTimeout(start.timer);
                                callback && callback();
                            }
                        });
                    }
                    
                    var next = function(callback){
                        var newInd = defaultInd + 1;
                        if(newInd >= list.length){
                            newInd = 0;
                        }
                        change(newInd, callback);
                    }
                    
                    var start = function(){
                        if(start.timer) window.clearTimeout(start.timer);
                        start.timer = window.setTimeout(function(){
                            next(function(){
                                start();
                            });
                        }, 8000);
                    }
                    
                    start();
                    
                    $('#js_ban_button_box').on('click', 'a', function(){
                        var btn = $(this);
                        if(btn.hasClass('right')){
                            //next
                            next(function(){
                                start();
                            });
                        }
                        else{
                            //prev
                            var newInd = defaultInd - 1;
                            if(newInd < 0){
                                newInd = list.length - 1;
                            }
                            change(newInd, function(){
                                start();
                            });
                        }
                        return false;
                    });
                    
                })();
            </script>
			
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
       username:{
         required: true,
	     minlength: 3,
         maxlength: 15,
	     remote:{                         //自带远程验证存在的方法  
                 url:"<?php echo U('Home/Register1/oper1');?>",  
                 type:"post",  
                 dataType:"text",  
                 data:{  
                      username:function(){return $("#username").val();}  
                 },  
                 dataFilter: function(data,type) {  
				 
					if(data==1){
					return true
					} else if(data==0){
					return false
					} 
                }  
              } 
            },
    email:{
    required: true,
    email: true,
	remote:{                         //自带远程验证存在的方法  
                 url:"<?php echo U('Home/Register1/oper');?>",  
                 type:"post",  
                 dataType:"text",  
                 data:{  
                      email:function(){return $("#email").val();}  
                 },  
                 dataFilter: function(data,type) { 
				 
					if(data==1){
					return true
					} else if(data==0){
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
    username:{
    required: "请输入用户名",
    minlength: jQuery.format("用户名不能小于{0}个字 符"),
	remote:"该用户名已存在"
   },
   email:{
   remote:"该邮箱已经被注册过"
   },
   password:{
    required: "请输入密码",
    minlength: jQuery.format("密码不能小于{0}个字 符")
   },
   repassword:{
    required: "请输入确认密码",
    minlength: "确认密码不能小于5个字符",
    equalTo: "两次输入密码不一致"
   }
   }
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
    <div class="container">
      <div class="register-box" style="margin-top:40px;">
      <div class="reg-slogan"> 新用户注册</div>
      <form id="signupForm" method="POST" action="<?php echo U('Home/Register1/register');?>"  >
      <div class="reg-form" id="js-form-mail">
	  
        <div class="cell">
          <label for="email">邮箱：</label>
          <input type="text" name="email" id="email" class="text" class="required email"/>
        </div>
		<div class="cell">
          <label for="username">用户名：</label>
          <input type="text" name="username" id="username" class="text" class="required username"/>
        </div>
        <div class="cell">
          <label for="pwdt">密码：</label>
          <input type="password" name="password" id="password" class="text" class="required password"/>
         
        </div>
		  <div class="cell">
          <label for="repwd">确认密码：</label>
          <input type="password" name="repassword" id="repassword" class="text" class="required repassword"/>
     
        </div>
       

        <div class="user-agreement"style="margin-left:100px;margin-top:30px;">
          <input type="checkbox" id="js-mail_chk" checked="true" />
          <label for="js-mail_chk">同意<a href="" target="_blank">《lvyou网用户服务协议》</a></label>
        </div>
        <div class="bottom"> <a id="submit"  class="button btn-green" >立即注册</a> </div>
      </div>
	  </form>
    </div>
  </div>
</div>
</body>
</html>