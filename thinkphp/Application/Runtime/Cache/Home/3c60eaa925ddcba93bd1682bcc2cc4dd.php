<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta name="keywords"  />
<title>
	绿友门户网站
</title>
<meta http-equiv="X-UA-Compatible" content="IE=8;IE9" />
<link href="/thinkphp/Public/css/List/index.css" rel="stylesheet" type="text/css" />
<link href="/thinkphp/Public/css/List/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.tmailsilder.v2.css" />
<script type="text/javascript" src="/thinkphp/Public/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.1&services=true"></script>
<script language="JavaScript">
    function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6. 
    {
        var arVersion = navigator.appVersion.split("MSIE")
        var version = parseFloat(arVersion[1])
        if ((version >= 5.5) && (document.body.filters)) {
            for (var j = 0; j < document.images.length; j++) {
                var img = document.images[j]
                var imgName = img.src.toUpperCase()
                if (imgName.substring(imgName.length - 3, imgName.length) == "PNG") {
                    var imgID = (img.id) ? "id='" + img.id + "' " : ""
                    var imgClass = (img.className) ? "class='" + img.className + "' " : ""
                    var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
                    var imgStyle = "display:inline-block;" + img.style.cssText
                    if (img.align == "left") imgStyle = "float:left;" + imgStyle
                    if (img.align == "right") imgStyle = "float:right;" + imgStyle
                    if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
                    var strNewHTML = "<span " + imgID + imgClass + imgTitle
             + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
             + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
             + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
                    img.outerHTML = strNewHTML
                    j = j - 1
                }
            }
        }
    }
    window.attachEvent("onload", correctPNG); 
</script>
<script language="javascript">
    function tabChange(obj, id) {
        var arrayli = obj.parentNode.getElementsByTagName("li"); //获取li数组
        var arrayul = document.getElementById(id).getElementsByTagName("ul"); //获取ul数组
        for (i = 0; i < arrayul.length; i++) {
            if (obj == arrayli[i]) {
                arrayli[i].className = "cli";
                arrayul[i].className = "";
            }
            else {
                arrayli[i].className = "";
                arrayul[i].className = "hidden";
            }
        }
    }
</script>

<script src="/thinkphp/Public/js/List/jquery.easing.1.3.js" type="text/javascript"></script>
<link href="/thinkphp/Public/css/List/sexylightbox.css" type="text/css" rel="stylesheet" />
<script src="/thinkphp/Public/js/List/sexylightbox.v2.3.jquery.js" type="text/javascript"></script>
<script language="javascript">
    $(document).ready(function () {
        SexyLightbox.initialize({ color: 'white', dir: 'images' });
    });
</script>
<script type='text/javascript' src='/thinkphp/Public/js/List/jquery.dcmegamenu.1.3.2.js'></script>

<link rel="stylesheet" href="/thinkphp/Public/css/List/globle_cn.css" type="text/css" /><link rel="stylesheet" href="css/globle_cn_ie6.css" type="text/css" />


  <script>
      $(document).ready(function () {

          $('.nav li').hover(
		function () {
		    //show its submenu
		    $(".menuitempanel", this).slideDown(100);
		    $("#menuhover", this).addClass("head_hover_bg");
		    $("#menuhover span", this).addClass("head_hover_bg");
		},
		function () {
		    //hide its submenu
		    $(".menuitempanel", this).slideUp(100);
		    $("#menuhover", this).removeClass("head_hover_bg");
		    $("#menuhover span", this).removeClass("head_hover_bg");
		}
	);
      });
</script>


</head>
<body>
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
    <form method="post" action="jqjd_xx.aspx?moduleid=92&amp;id=142" id="form1">

<div id="contenter">
	<div id="main2-2">
	<div style="margin-top:0px;color:white;font-size:5px">111</div>
	<div style="border:1px solid rgb(173, 207, 242);padding-left:10px;width:960px;margin:0px auto 10px">
		
		<tr>
          <td width="109" align="left" style="padding-left:8px;"><font class="cu12px">陕西关中</font></td>
          <td width="849" align="center" style="padding-left:8px;"><font class="cu12px"style="padding-left:250px;"><a href='/thinkphp/index.php/Home/List/bingma' target="_blank">兵马俑</a></font> | <font class="cu12px"><a href='/thinkphp/index.php/Home/List/' target="_blank">太白山</a></font> | <font class="cu12px"><a href='/thinkphp/index.php/Home/List/huashan' target="_blank">华山</a></font> | <font class="cu12px"><a href='/thinkphp/index.php/Home/List/famensi' target="_blank">法门寺</a></font> | <font class="cu12px"><a href='/thinkphp/index.php/Home/List/datang' target="_blank">大唐芙蓉园</a></font> | <font class="cu12px"><a href='/thinkphp/index.php/Home/List/zhonglou' target="_blank">西安钟楼</a></font> | <font class="cu12px"><a href='/thinkphp/index.php/Home/List/yandiling' target="_blank">炎帝陵</a></font>|<font class="cu12px"><a href='/thinkphp/index.php/Home/List/beiling' target="_blank">西安碑林</a></font>|<font class="cu12px"><a href='/thinkphp/index.php/Home/List/jiangzi' target="_blank">姜子牙钓鱼台</a></font></td>
        </tr>	
		</div>
		<div style="margin-left:30px;">
		<tr>
    <td width="625" align="left" style="padding-left: 20px;">当前位置：绿友旅游 &gt; 关中之旅 </td>
    <td width="378" align="right" style="color: rgb(0, 0, 0); padding-right: 25px;">&nbsp;</td>
  </tr>
		</div>
<div class="con18right"> 
<h3>兵马俑</h3> 
<ul> 
<li><span>地址：</span>西安市临潼区骊山北麓</li> 
<li><span>门票：</span>180元</li> 
<li><span>电话：</span>028-83770770</li> 
</ul> 
</div> 
<div class="clear"></div> 
<div class="con19"> 
<div class="tabbox"> 
<div class="tabmenu"> 
<ul> 
<li onclick="tabChange(this,'tabcontent')" class="cli" style="cursor:hand">简介</li> 
<li onclick="tabChange(this,'tabcontent')" style="cursor:hand">景点</li> 
<li onclick="tabChange(this,'tabcontent')" style="cursor:hand">推荐</li> 
</ul> 
</div> 
<div id="tabcontent"> 
<ul name="tabul"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>兵马俑（英语：The Terracotta Warriors and Horses）即秦始皇兵马俑，亦简称秦兵马俑或秦俑。俑作为古代墓葬的一种陪葬品而出现，秦始皇兵马俑是制成兵马（士兵、战马等）形状的陶俑。</p>
<p>秦兵马俑坑发现于1974年，秦始皇兵马俑坑位于今西安市临潼区秦始皇陵以东1.5公里处，是秦始皇帝陵的一部分陪葬坑，在已发现的三座俑坑里出土了大量的兵马俑。</p>
<p>1987年，秦始皇帝陵被列入世界文化遗产保护名录，先后已有200多位国家领导人参观访问，成为中国古代辉煌文明的一张金字名片。秦始皇兵马俑是世界考古史上最伟大的发现之一。</p>
<p>秦始皇陵兵马俑是世界最大的地下军事博物馆。俑坑布局合理，结构奇特，在深5米左右的坑底，每隔3米架起一道东向西的承重墙，兵马俑排列在墙间空档的过洞中。秦陵内共有3个兵马俑坑，呈品字形排列。秦始皇陵一号俑坑，呈长方形，东西长230米，南北宽62米，深约5米，总面积14260平方米，四面有斜坡门道。俑坑中最多的是武士俑，平均身高1.80米左右，最高的1.90米以上，陶马高1.72米，长2.03米，战车与实用车的大小 一样。但兵马俑并非按原比例还原，据记载秦国人的身高在165cm左右。秦俑大部分手执青铜兵器，有弓、弩、箭镞、铍、矛、戈、殳、剑、弯刀和钺。青铜兵器因经过防锈处理，埋在地下两千多年，至今仍然光亮锋利如新，它们是当时的实战武器，身穿甲片细密的铠甲，胸前有彩线挽成的结穗。军吏头戴长冠，数量比武将多。秦俑的脸型、身材、表情、眉毛、眼睛和年龄都有不同之处。</p>
</div> 
</ul> 
<ul class="hidden"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>一.一号坑</p> 
<p>一号坑的发现，缘于1974年3月，兵马俑面世，当时下和村农民在村南打井，井口刚好开在一号坑的东南角。1974年7月中旬，由陕西省博物馆、文管会、临潼县文化馆联合组成的考古发掘队进驻秦俑坑工地。随着工作范围的不断扩大，1976年－1978年，考古队又增添了考古、保护、照相、修复等方面的人员，新生力量的加强，各项工作的开展，使考古队一时显得异常热闹。一号坑发掘工作全面开展，10多个修复组展开对兵马俑的大规模修复。一号坑是最为雄伟。它的东端排列着全身穿着战袍的战士俑210人，其余每排68人，前后、左右成行，共计204人，组成方阵的后卫。坑的中间，排列着有38路战车和步兵的纵队，组成军队的主体。这个大型军阵，有精锐的前锋，强大的主力，灵活的侧翼，具有排山倒海的气势。
</p>
<p>二.二号坑</p>
<p>秦始皇二号俑坑呈曲尺形，位于一号坑的东北侧和三号坑的东侧，东西长96米，南北宽为84米，总面积约为6000平方米。坑内建筑与一号坑相同，但布阵更为复杂，兵种更为齐全，是3个坑中最为壮观的军阵。它是由骑兵、战车和步兵（包括弩兵）组成的多兵种特殊部队。二号坑建有1.7万平方米的陈列大厅，是我国规模最大、功能最齐全的现代化遗址陈列厅。二号坑有陶俑陶马1300多件，战车80余辆，青铜兵器数万件，其中将军俑、鞍马俑、跪姿射俑为首次发现。二号坑东、西两端各有4个斜坡门道，北边有2个斜坡门道，俑坑坐西面东，正门在东边。</p>
<p>三.三号坑</p>
<p>秦始皇兵马俑三号坑位于一号坑西端北侧，与二号坑东西相对，南距一号坑25米，东距二号坑120米，面积约为520平方米，整体呈凹字形，由南北厢房和车马房组成，车马房中有一辆驷马战车及四件兵马俑，三号坑共可出土兵马俑68个。从3号坑的内部布局看，应为一二号坑的指挥部。三号坑是三个坑中唯一一个没有被大火焚烧过的，所以出土时陶俑身上的彩绘残存较多，颜色比较鲜艳。春秋战国之前的战争，指挥将领往往要身先士卒，冲锋陷阵，所以他们常常要位于卒伍之前。春秋战国时期随着战争规模的增大，作战方式的变化，指挥者的位置开始移至中军。秦代战争将指挥部从中军中独立出来，这是军事战术发展的一大进步。指挥部独立出来研究制订严密的作战方案，更重要的是指挥将领的人身安全有了进一步的保证。这是古代军事战术发展成熟的重要标志。三号秦坑是世界考古史上发现时代最早的军事指挥部的形象资料。建筑结构，陶俑排列，兵器配备，出土文物都有一定的特色。它提供了研究古代指挥部形制、卜占及出战仪式，命将制度及依仗服的服饰、装备等问题的珍贵资料。</p>
<p>四.兵马俑</p>
<p>兵马俑的塑造，基本上以现实生活为基础，手法细腻、明 快。每个陶俑的装束、神态都不一样。光是人物的发式就有许多种，手势也各不相同，面部的表情更是各有差异。从他们的装束、神情和手势就可以判断出是官还是兵，是步兵还是骑兵。总体而言，所有的秦俑面容中都流露出秦人独有的威严与从容，具有鲜明的个性和强烈的时代特征。</p>
<p>五.军士俑</p>
<p>车士，即战车上除驭手，驾车者之外的士兵。一般战车上有两名军士，分别为车左俑和车右俑。车左俑身穿长襦，外披铠甲，胫着护腿，头戴中帻，左手持矛、戈、戟等长兵器，右手作按车状。</p>
<p>六.立射俑</p>
<p>立射俑在秦俑中是一个较为特殊的兵种，出土于二号坑东部，所持武器为弓弩，与跪射俑一起组成弩兵军阵。立射俑位于阵表，身着轻装战袍，束发挽髻，腰系革带，脚蹬方口翘尖履，装束轻便灵活。</p>
<p>七.跪射俑</p>
<p>跪射俑与立射俑一样，出土于二号坑东部，所持武器为弓弩，与立射俑一起组成弩兵军阵。立射俑位于阵表，而跪射俑位于阵心。跪射俑身穿战袍，外披铠甲，头顶左侧挽一发髻，脚登方口齐头翘尖履，左腿蹲曲，右膝着地，上体微向左侧转，双手在身体右侧一上一下作握弓状，表现出一个持弓的单兵操练动作。</p>
<p>八.骑兵俑</p>
<p>骑兵俑出土于一、二号坑，有116件，多用于战时奇袭。由于兵种的特殊，骑兵的装束显然与步兵、车兵不同。他们头戴圆形小帽，身穿紧袖、交领右衽双襟掩于胸前的上衣，下穿紧口连档长裤，脚登短靴，身披短而小的铠甲，肩上无披膊，手上无护甲。</p>
<p></p>
<div> 
</ul> 
<ul class="hidden"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>门票</p>
<p>兵马俑和秦始皇陵已经合并成一个景点，通票150。</p>
<p>交通</p>
<p>由西安火车站东广场乘游5（306）路公交至终点站“兵马俑”，全程票价7元。此外，东广场还有914、915路公交开往兵马俑，单程7元。车程1－1.5小时。     由临潼区前往，可乘坐101专线、914、915路公车，车程15分钟左右。 </p>
</div> 
</ul> 
</div> 
</div> 
</div> 
<div class="con21"> 
<h3><span>电子地图</span></h3> 
<h4> 
<div style="width: 99%; height: 235px; border: 1px solid gray" id="container"></div> 

</h4> 
</div> 
<div class="con20"> 
<h3><span>图集</span></h3> 
<h4> 
<a><img src="/thinkphp/Public/img/bingma/bingma1.jpg" /></a>
<a><img src="/thinkphp/Public/img/bingma/bingma2.jpg" /></a>
<a><img src="/thinkphp/Public/img/bingma/bingma3.jpg" /></a>
<a><img src="/thinkphp/Public/img/bingma/bingma5.jpg" /></a>
</h4> 

</div> 

			</div>
			
		</div>
		
		
		
		
		<!-- 多说评论框 start -->
	<style>
#ds-thread  {padding:5px;background-color:white;}
#ds-thread {margin-left:166px;width:1006px;margin-top:10px;}

</style>
	<div class="ds-thread" data-thread-key="lvyou1" data-title="111111" data-url="请替换成文章的网址"></div>

	<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"lvyoulvyou2015"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->	
	</div>




	
		
	
   <script type="text/javascript"> 
var map = new BMap.Map("container"); 
var point = new BMap.Point(109.290793,34.394105); 
 
var marker = new BMap.Marker(point); // 创建标注
map.centerAndZoom(point, 25); 
map.addControl(new BMap.NavigationControl()); 
map.addControl(new BMap.ScaleControl()); 
map.addControl(new BMap.OverviewMapControl()); 
//map.addControl(new BMap.MapTypeControl()); 
map.enableScrollWheelZoom(); 
map.addOverlay(marker); 
</script> 
 <script type="text/javascript">
    $(function () {
        $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
        $animating = false;
        $('.fixedBtn .top').click(function () {
            if ($animating == false) {
                $body.animate({ scrollTop: 0 }, 500);
                $animating = true;
            }
            return false;
        });
        $(window).scroll(function () {
            if ($('.fixedBtn').offset().top > 500) {
                $('.fixedBtn .top').css('display', 'inline-block');
            } else {
                $('.fixedBtn .top').css('display', 'none');
                $animating = false;
            }
        });
        var fixedBtn = $('.fixedBtn'),
		feedback = $('.feedback', fixedBtn),
		feedbackCnt = $('.feedbackCnt'),
		feedbackTips = $('.feedbackTips', fixedBtn),
		FBCLASS = 'fb-open',
		close = function () {
		    fixedBtn.animate({
		        right: '-=80'
		    })
		    feedbackCnt.removeClass(FBCLASS);
		},
		open = function () {
		    feedbackTips.hide();
		    feedbackCnt.show();
		    fixedBtn.animate({
		        right: '+=80'
		    });
		    feedbackCnt.addClass(FBCLASS);
		};
        feedback.length && feedback.on('click', function (e) {
            e.preventDefault();
            feedbackCnt.hasClass(FBCLASS) ? close() : open();
        });
    });
</script>   
    </form>
</body>
</html>