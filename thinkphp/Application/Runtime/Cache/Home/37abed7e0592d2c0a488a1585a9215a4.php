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
<h3>西安钟楼</h3> 
<ul> 
<li><span>地址：</span>西安市曲江新区</li> 
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
<p>西安钟楼，建于明太祖朱元璋洪武十七年（公元1384年），位于中国陕西省西安市的市中心，城内东西南北四条大街的交汇处（属碑林区管辖）。</p>
<p>钟楼建在方型基座之上，为砖木结构，重楼三层檐，四角攒顶的形式，总高36米，每边长35.5米，占地面积1377平方米，内有楼梯可盘旋而上。在檐上覆盖有深绿色琉璃瓦，楼内贴金彩绘，画栋雕梁，顶部有鎏金宝顶，金碧辉煌，体现了古代汉族劳动人民的聪明智慧和高超的建筑技艺。</p>
<p>西安钟楼是中国古代遗留下来众多钟楼中形制最大、保存最完整的一座。西安是明代西北军政重镇，所以无论从建筑规模、历史价值或艺术价值各方面来说，它都居全国同类建筑之首。</p>
</div> 
</ul> 
<ul class="hidden"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>一.形制</p> 
<p>西安钟楼下部为砖石结构的正方形基座，表面用青砖砌成，基座之上为两层木结构楼体。自地面至楼顶高36米，其中基座高8.6米。每边长35.5米，建筑面积约1,377.4平方米，内有楼梯可盘旋而上。整体呈典型明代建筑艺术风格，顶部为三重四面攒尖顶结构，由斗栱支撑，顶尖部为真金铂包裹木质内心的“金顶”。在微翘的屋檐上覆盖有深绿色琉璃瓦，楼内贴金彩绘，画栋雕梁。基座四面正中各有高约6米的十字相交的券洞，过去是东南西北四条大街交会的通道，人流车辆从券洞通过。随着城市建设的发展，券洞无法适应交通流量需要，而券洞早已封闭。钟楼周围建有公路转盘，地下有专供人行的环行通道。
</p>
<p>二.门窗浮雕</p>
<p>西安钟楼的门扇槁窗雕楼精美繁复，表现出明清盛行的装饰艺术。每一层的门扇上均有8幅浮雕，每一幅浮雕均蕴含了一个古代典故。</p>
<p>三.浮雕艺术</p>
<p>第一层北门，自西向东依次为“虬髯客”“木兰从军”“文姬归汉”“吹箫引凤”“红叶题诗”“班昭读书”“博浪沙椎秦”“唱筹量沙”。</p>
<p>第一层东门，自北向南依次为“长生殿盟誓”“连环计”“黠鼠夜扰”“挂角读书”“卞庄刺虎”“嫦娥奔月”“东坡题壁”“李白邀月”。</p>
<p>第一层南门，自东向西依次为“文王访贤”“伯牙鼓琴”“画龙点睛”“斩蛇起兵”“伯乐相马”“柳毅传书”“舜耕历山”“把桥授书”。</p>
<p>第一层西门，自南向北依次为“枕戈待旦”“李陵兵困”“由基射猿”“龙友颂鸡”“黄耳传书”“孙期放豚”“陶侃运砖”。</p>
<p>“市井平常事，最是热闹处”。民俗文化区内——唐市位于园区的南面，由唐集市和戏楼广场组成，面积一万两千零二十二平方米。唐市二期项目，是以古长安城进行贸易、商业活动市集为缩影，以反映唐代“商贾云集、内外通融”的商业文化氛围为核心，集观赏、游乐、消遣、体验、交流、消费为一体的唐朝风俗文化街。</p>
<p>名楼文化</p>
<p>中国自古就有“盛世修史、丰年盖楼”之说。历届政府在对钟楼的利用和保护方面做了大量的科学管理和奉献工作：清代的康熙三十八年、乾隆五年和道光二十年分别对钟楼进行了大范围以及大规模的整修，而新中国成立50年中又大修过五次。从1956年8月钟楼被陕西省人民政府公布为陕西省第一批重点文物保护单位，到1996年11月再被国务院布公为中国重点文物保护单位，这座古老的明代建筑在战火的洗礼和沧桑风雨中已巍然矗立了600多个春秋冬夏。1984年正式对外开放20年至今，钟楼先后接待过如朱德、陈毅、周恩来、邓小平等一大批党和国家领导人；1999年“千禧”年来临之际，中国推出三大城市作为重大庆典活动中心，西安即是其中之一，而活动中心的主会场就设在钟楼。 为遵循“保护为主、抢救第一、合理利用、加强管理”的文物保护方针，自强不息的“钟楼人”，在保护和合理利用古建筑的同时，抓住其人文景观独特魅力以及已成为西安市重点旅游热点的良好挈机，使其在新时代中发挥着更好的作用。钟楼上成功举办的齐白石画展、明清名人字画展、仿秦乐府编钟表演、于佑任字画、钟楼馆藏文物精品展等大型展览及“晨钟暮鼓”仿古仪仗表演，均受到中外游客的普遍好评和广泛赞誉，在2006年4月份，西安钟楼在“中国最值得外国人去的50个景区”评选活动中获银奖殊荣。</p>
<div> 
</ul> 
<ul class="hidden"> 
<div style="PADDING-RIGHT:10px;OVERFLOW-Y:auto;PADDING-LEFT:10px;SCROLLBAR-FACE-COLOR:#ffffff;FONT-SIZE:11pt;PADDING-BOTTOM:0px;SCROLLBAR-HIGHLIGHT-COLOR:#ffffff;OVERFLOW:auto;WIDTH:97%;SCROLLBAR-SHADOW-COLOR:#919192;COLOR:blue;SCROLLBAR-3DLIGHT-COLOR:#ffffff;LINE-HEIGHT:100%;SCROLLBAR-ARROW-COLOR:#919192;PADDING-TOP:0px;SCROLLBAR-TRACK-COLOR:#ffffff;FONT-FAMILY:宋体;SCROLLBAR-DARKSHADOW-COLOR:#ffffff;LETTER-SPACING:1pt;HEIGHT:500px;TEXT-ALIGN:left">
<p>门票</p>
<p>门票价格：35元 ，钟鼓楼联票50</p>
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
<a><img src="/thinkphp/Public/img/zhonglou/zhonglou1.jpg" /></a>
<a><img src="/thinkphp/Public/img/zhonglou/zhonglou2.jpg" /></a>
<a><img src="/thinkphp/Public/img/zhonglou/zhonglou3.jpg" /></a>
<a><img src="/thinkphp/Public/img/zhonglou/zhonglou4.jpg" /></a>
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
var point = new BMap.Point(108.954353,34.265703); 
 
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