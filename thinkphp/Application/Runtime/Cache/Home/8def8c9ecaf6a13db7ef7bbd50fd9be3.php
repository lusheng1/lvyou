<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>绿友旅游门户网站</title>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"><!--fix：多核浏览器兼容模式下jQuery误判导致表单检测插件bug-->

  <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/user/style.css">
  <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/user/reset.css">
  <script type="text/javascript" src="/thinkphp/Public/js/jquery-1.11.0.min.js"></script>
   
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
<div id="wrap" style="margin-top:100px;">
  <div id="wrapTop">
    <div id="wrapBtm"> 
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
			


<!--div#content-->
<div class="clearfix" id="content">
	<div id="center-home" class="con-in">
		<!--cha-side-->
		<div class="side-cha b-side-cha">
			<!--box-info-->
			<div id="side-login">
			<div class="box-info info-box">
			<div>
			<div style="background: none repeat scroll 0 0 #3882ff;color: #ffffff;font-size: 16px;height: 50zzpx;line-height: 30px;text-align: center;width: 150px;margin-top:20px;margin-left:50px;float:left;">我的订单</div> 
			<div style="line-height:60px;">1-西安艾斯汀酒店;2-西安佰连商务酒店(钟楼店）;3-西安凯迪斯曼酒店</div>
				
				</div>
				<table width="900px" border="0" cellspacing="0" cellpadding="0" style="margin:6px auto;" class="tdTab">
				 <tr style="border-bottom:solid 1px #00afff;border-top:solid 1px #00afff">
                              <td width="200px" height="50px" bgcolor=""style="border-left:solid 1px #00afff;border-right:solid 1px #00afff;text-align:center;"><a> <font class="black; ">订单号</font></a></td>
                              
                              <td width="200px" height="50px" bgcolor=""style="border-left:solid 1px #00afff;border-right:solid 1px #00afff;text-align:center;"><a> <font class="black">下单时间</font></a></td>
                              
                              <td width="200px" height="50px" bgcolor=""style="border-left:solid 1px #00afff;border-right:solid 1px #00afff;text-align:center;"><a> <font class="black">下单的酒店</font></a></td>
							 
                              </tr>
							  <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="border-bottom:solid 1px #00afff;border-top:solid 1px #00afff">
                              <td width="200px" height="50px" bgcolor=""style="border-left:solid 1px #00afff;border-right:solid 1px #00afff;text-align:center;"><a> <font class="black"><?php echo ($vo["orderid"]); ?></font></a></td>
                              
                              <td width="200px" height="50px" bgcolor=""style="border-left:solid 1px #00afff;border-right:solid 1px #00afff;text-align:center;"><a> <font class="black"><?php echo ($vo["ordertime"]); ?></font></a></td>
                              
                              <td width="200px" height="50px" bgcolor=""style="border-left:solid 1px #00afff;border-right:solid 1px #00afff;text-align:center;"><a> <font class="black"><?php echo ($vo["hotelid"]); ?></font></a></td>
							
							  
                              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	   <?php if(!empty($rooms)): ?><!---分页列表--!--->

	 <?php echo ($list); endif; ?>

                        </table>
						
				</div>
							</div>
			</div>
			<!--/box-info-->
			<!--faq-->
			
			<!--/faq-->
		</div>
		<!--/cha-side-->
		<!--main-->
		
		<!--/main-->
	</div>
	
</div>
<!--/div#content--> 

<div style="display:none">	
<!--弹窗表单-->
<!--dialog-req-form-->
			
		








    </div>
  </div>
</div>


</body>
 <script type="text/javascript" src="/thinkphp/Public/js/user/navi.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/user/navi1.js"></script>

</html>