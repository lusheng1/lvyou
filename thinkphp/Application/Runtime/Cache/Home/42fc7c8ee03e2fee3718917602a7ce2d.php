<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta name="keywords"  />
<title>
	绿友门户网站
</title>
<meta http-equiv="X-UA-Compatible" content="IE=8;IE9" />
<link href="/thinkphp/Public/css/List/index.css" rel="stylesheet" type="text/css" />
<link href="/thinkphp/Public/css/List/style.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="css/jquery.tmailsilder.v2.css" />
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

<div id="contenter" style="">
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
<h3>秦岭主峰太白山</h3> 
<ul> 
<li><span>地址：</span>陕西省宝鸡市眉县</li> 
<li><span>门票：</span>100</li> 
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
<p>太白山（Mountain Taibai）主体位于陕西宝鸡眉县、太白县，广义上的太白山连带西安周至县部分。它是秦岭山脉主峰，也是中国大陆青藏高原以东第一高峰。国家森林公园，国家AAAA级旅游景区。太白山是长江和黄河两大水系分水岭。具低山、中山、高山等地貌类型，界限清楚、特点各异，特别是第四纪冰川活动所雕琢的各种地貌形态保留完整、清晰可辨。</p>
<p>太白山气侯迥然不同，随着海拔高度递增，气候类型按一定规律呈连续的带状分布。气候立体差异，使植物、动物分布也形成相应的垂直带谱。太白山动植物资源非常丰富，山上林木茂盛，中草药遍地皆是，尤其世界上仅存的孑遗植物——独叶草在太白山独有。丰富的植物资源为野生动物提供了充足食物，雉类之血雉、红腹角雉及兽类之大熊猫、金丝猴、羚牛等珍禽异兽于太白山繁衍生息。自19世纪始，世界各地学者慕名纷纷前来太白山考察，而太白山已成为科考研究避暑旅游体育运动和教学实习的重要基地。太白山是世界级生态旅游目的地和著名道教文化圣地，位列道教第十一洞天，玄德洞天。唐、宋以来，许多文人墨客登临挥毫，留下脍炙人口的诗文；因此，每逢夏秋之时，登山览胜者与朝山香客络绎不绝。</p>
</div> 
</ul> 
<ul class="hidden"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>一.太白积雪六月天</p> 
<p>“太白积雪六月天”是关中八景之一。在过去那寒冷多雪的年代里巍巍高峰，终年积雪、银光四射，百里可见，故“太白积雪六月天”之奇观胜景则由此而来。由于气候逐渐变暖，兼之冬季降雪减少，盛夏又多出现伏旱高温炎热天气。因而“太白积雪六月天”的胜景现已很难看到了。</p>
<p>二.斗母奇峰</p>
<p>从大殿向南，奇峰怪石林立，从大殿向东眺望，在一道道莽莽苍苍的松梁上巍然屹立着一座白色巨石，俗称“麦垛石”。麦垛石是一巨大花岗片麻岩断块，高约60米，周圆30米许，呈圆柱体。若在晴朗的傍晚，夕阳余辉将石体照耀通红。此时晚山含黛，唯麦垛石光彩夺目，分外妖娆。</p>
<p>云海奇观</p>
<p>太白山千峰竞秀，万壑藏云。在海拔2000米以上的地方，可看到极其壮观的云海，以平安寺为最。</p>
<p>高山奇湖</p>
<p>拔仙台之南北分布着两个冰斗湖、四个冰蚀湖。玉皇池
太白山大爷海太白山大爷海[14]
最大，位于拔仙台南坡海拔3380米处。湖面约30亩许，呈圆形似满月。若遇晴朗天气临此，波光鳞鳞，蓝天、白云、山峰俱映湖中，湖光山色十分迷人。</p>
<p>拔仙绝顶</p>
<p>拔仙台是太白山最高巅，从下向上望去，峰顶庙
拜仙台拜仙台[15]
宇凌空，锷刺蓝天，李白有“举手可近月”之形象比喻。然而攀上去，却另是一番景象，台面开阔平坦，向西直通跑马梁，站上拔仙台极目远眺，果真是“会当临绝顶，一览群山小”。</p>
</div> 
</ul> 
<ul class="hidden"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>推荐一：2日轻装穿越</p>
<p>下板寺 -上板寺 -小文公庙 -大文公庙 -大爷海</p>
<p>拔仙台 -二爷海 -三爷海 -玉皇池 -药王殿 -南天门 -三合宫 -铁甲树</p>
<p>&#160;</p>
<p>推荐二：4日经典穿越</p>
<p>太白庙 -大坪 -灵官台 -老庙子</p>
  <p>老庙子 -石海 -将军庙 -莲花石 -万仙阵 -大爷海</p>
  <p>文公庙 -放羊寺 -明星寺 -平安寺</p>
 <p> 平安寺 -羊皮沟 -南塬村 -鹦哥镇 </p>
<p>&#160;</p> 
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
<a ><img src="/thinkphp/Public/img/taibai/taibai1.jpg" /></a>
<a ><img src="/thinkphp/Public/img/taibai/taibai11.jpg" /></a>
<a ><img src="/thinkphp/Public/img/taibai/taibai19.jpg" /></a>
<a ><img src="/thinkphp/Public/img/taibai/taibai5.jpg" /></a>
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


	
		
	
   <script type="text/javascript"> 
var map = new BMap.Map("container"); 
 var point = new BMap.Point(107.90284,34.127695); // 创建点坐标
 var marker = ""; 
var marker = new BMap.Marker(point); // 创建标注
map.centerAndZoom(point, 15); 
 map.addControl(new BMap.NavigationControl()); 
map.addControl(new BMap.ScaleControl()); 
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