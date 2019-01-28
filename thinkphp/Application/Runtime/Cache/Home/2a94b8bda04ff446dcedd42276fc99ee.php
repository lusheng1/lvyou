<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head manifest="anycms.appcache">
    <meta charset="utf-8">


    
        <title>绿友旅游门户</title>
    

    
        
    



    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Index/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Index/any.css">
   <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Index/common.css">
    <link rel="stylesheet" type="text/css" href="/thinkphp/Public/css/Index/v4home.css">


    <style>
        a[url='/HOME/INDEX/INDEX.HTML']{
            /*border-bottom: 2px solid #3881FF ;*/
            background: #3882FF;
        }
    </style>

    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
    <![endif]-->
    <script>
        (function(){
            var AnyCms = window.AnyCms = {
                "ROOT"   : "", //当前网站地址
                "APP"    : "", //当前项目地址
                "PUBLIC" : "/Public", //项目公共目录地址
                "DEEP"   : "/", //PATHINFO分割符
                "MODEL"  : ["2", "", "html"],
                "VAR"    : ["m", "c", "a"],
                "AjaxLoadShare":"http://www.cdlymh.com/Home/Index/ajaxLoadShare.html",
                "IframeTravelComment": "http://www.cdlymh.com/Home/List/TravelComment.html"
            }
        })();
    </script>

    
    



<body>


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
    



    

    <!--网页顶部焦点图 -->
    <div style="width: 1349px; height: 600px;" class="top-focus slider" data-dots="true" data-arrows="true" data-delay="5000" id="top_focus">
        <!--/Public/Home/img/clear.gif-->
        <ul style="width: 6745px; height: 600px; margin-left: -4047px;">
            <li style="width: 1349px; height: 600px;">
                    <a href="/thinkphp/index.php/Home/List/huashan"><img style="display: inline;" src="/thinkphp/Public/img/huashan/huashan10.jpg" alt=""></a>
                </li><li style="width: 1349px; height: 600px;">
                    <a href="/thinkphp/index.php/Home/List/index"><img style="display: inline;" src="/thinkphp/Public/img/taibai/taibai13.jpg" alt=""></a>
                </li><li style="width: 1349px; height: 600px;">
                    <a href="/thinkphp/index.php/Home/List/famensi"><img style="display: inline;" src="/thinkphp/Public/img/famen/famen1.jpg" alt=""></a>
                </li><li style="width: 1349px; height: 600px;">
                    <a href="/thinkphp/index.php/Home/List/yandiling"><img style="display: inline;" src="/thinkphp/Public/img/yandi/yandi1.jpg" alt=""></a>
                </li><li style="width: 1349px; height: 600px;">
                    <a href="/thinkphp/index.php/Home/List/bingma"><img style="display: inline;" src="/thinkphp/Public/img/bingma/bingma1.jpg" alt=""></a>
                </li>        </ul>
    <div class="arrow prev">←</div><div class="arrow next">→</div><div class="dots"><span class="" i="0">1</span><span class="" i="1">2</span><span class="" i="2">3</span><span class="active" i="3">4</span><span class="" i="4">5</span></div></div>
    <!--网页顶部焦点图 结束-->


    <!--玩在成都标题 -->
    <div class="in-chengdu-title">
    <div class="title-body"></div>
    </div>
    <!--玩在成都标题 结束-->

    <div class="m_b_20"></div>
    <!-- 今日关注 -->
    <div class="v2-day-top">

        <div class="v2-day-top-tools">

            <div class="day-top-dot_arrow">
                <span class="day-top-prev"></span>
                <span class="day-top-dots active" i="0">0</span><span class="day-top-dots" i="1">1</span><span class="day-top-dots" i="2">2</span><span class="day-top-dots" i="3">3</span><span class="day-top-dots" i="4">4</span><span class="day-top-next"></span>
            </div>

             <div class="day-top-title">今日推荐</div> 
        </div>

        <div class="slider day-top-slider" data-autoplay="true" data-dots="true" data-arrows="true" data-_prev=".day-top-prev" data-_next=".day-top-next" data-_dots=".day-top-dots" data-delay="5000">
            <ul style="width: 6050px; height: 340px; margin-left: 0px;" class="m_b">
                                    <li style="width: 1210px; height: 340px;">
                        <div class="day-top-warp">
                            <a class="hot-thumb" href="/thinkphp/index.php/Home/List/index"><img style="display: block;" src="/thinkphp/Public/img/taibai/taibai18.jpg" alt="全省旅游工作电视电话会议在蓉召开" title="全省旅游工作电视电话会议在蓉召开"></a>

                            <div class="hot-body">
                                <div class="title"><a href="">国家森林公园，国家AAAA级旅游景区，太白山</a></div>
                                <div class="intro">
                                   太白山（Mountain Taibai）主体位于陕西宝鸡眉县、太白县，广义上的太白山连带西安周至县部分。它是秦岭山脉主峰，也是中国大陆青藏高原以东第一高峰。国家森林公园，国家AAAA级旅游景区。太白山是长江和黄河两大水系分水岭。具低山、中山、高山等地貌类型，界限清楚、特点各异，特别是第四纪冰川活动所雕琢的各种地貌形态保留完整、清晰可辨。</div>
                                <div class="share-bar ">
                                    <a href="/thinkphp/index.php/Home/List/index" class="v-detail">查看详情</a>


                     



                                </div>
                            </div>
                        </div>
                    </li>                    <li style="width: 1210px; height: 340px;">
                        <div class="day-top-warp">
                            <a class="hot-thumb" href="/thinkphp/index.php/Home/List/bingma"><img style="display: block;" src="/thinkphp/Public/img/bingma/bingma4.jpg" alt="高山奇湖，拔仙台之南北分布着两个冰斗湖、四个冰蚀湖" title="高山奇湖，拔仙台之南北分布着两个冰斗湖、四个冰蚀湖"></a>

                            <div class="hot-body">
                                <div class="title"><a href="">秦始皇陵兵马俑是世界奇迹之一。</a></div>
                                <div class="intro">
                                   兵马俑即秦始皇兵马俑，亦简称秦兵马俑或秦俑。俑作为古代墓葬的一种陪葬品而出现，秦始皇兵马俑是制成兵马（士兵、战马等）形状的陶俑。 秦始皇陵兵马俑是世界最大的地下军事博物馆。俑坑布局合理，结构奇特，在深5米左右的坑底，每隔3米架起一道东向西的承重墙，兵马俑排列在墙间空档的过洞中。</div>
                                <div class="share-bar ">
                                    <a href="/thinkphp/index.php/Home/List/bingma" class="v-detail">查看详情</a>




                                </div>
                            </div>
                        </div>
                    </li>                    <li style="width: 1210px; height: 340px;">
                        <div class="day-top-warp">
                            <a class="hot-thumb" href="/thinkphp/index.php/Home/List/yandiling"><img style="display: block;" src="/thinkphp/Public/img/yandi/yandi4.jpg" alt="“走起，美国！”——2015美国旅游年在蓉启动" title="“走起，美国！”——2015美国旅游年在蓉启动"></a>

                            <div class="hot-body">
                                <div class="title"><a href="/thinkphp/index.php/Home/List/yandiling">炎帝陵</a></div>
                                <div class="intro">
                                    炎帝部落以宝鸡为中心，沿渭河向四周扩展，向西发展到中原大地，此处土地平坦肥沃，气候湿润，原始农业得到长远的发展。部落开始定居，开始建都陈，再迁往鲁。建都曲阜，后来炎帝部落与南方的蚩尤发生战争，求助于黄帝部落在涿鹿大败蚩尤。                    </div>
                                <div class="share-bar ">
                                    <a href="/thinkphp/index.php/Home/List/yandiling" class="v-detail">查看详情</a>


                                   



                                </div>
                            </div>
                        </div>
                    </li>                    <li style="width: 1210px; height: 340px;">
                        <div class="day-top-warp">
                            <a class="hot-thumb" href="/thinkphp/index.php/Home/List/famensi"><img style="display: block;" src="/thinkphp/Public/img/famen/famen4.jpg" alt="春节期间 遂宁将推出51项假日节庆文化活动" title="春节期间 遂宁将推出51项假日节庆文化活动"></a>

                            <div class="hot-body">
                                <div class="title"><a href="/thinkphp/index.php/Home/List/famensi">法门寺</a></div>
                                <div class="intro">
                                    　法门寺（Famen Temple）位于炎帝故里、青铜器之乡——宝鸡市，2004年被联合国教科文组织评为“世界第九大奇迹”，全国重点文物保护单位。                                </div>
                                <div class="share-bar ">
                                    <a href="/thinkphp/index.php/Home/List/famensi" class="v-detail">查看详情</a>


                                    



                                </div>
                            </div>
                        </div>
                    </li>                    <li style="width: 1210px; height: 340px;">
                        <div class="day-top-warp">
                            <a class="hot-thumb" href="/thinkphp/index.php/Home/List/famensi"><img style="display: block;" src="/thinkphp/Public/img/famen/famen12.jpg" alt="成都市区30分钟可到新机场 三种交通方式供选择" title="成都市区30分钟可到新机场 三种交通方式供选择"></a>

                            <div class="hot-body">
                                <div class="title"><a href="">大唐芙蓉园</a></div>
                                <div class="intro">
                                    西安大唐芙蓉园是国家AAAAA级旅游景区，全国首个全方位展示盛唐风貌的大型皇家园林式文化主题公园，是首个“五感”（即视觉、听觉、嗅觉、触觉、味觉）主题公园，拥有全球最大户外香化工程以及全球最大的水景表演展示。                                </div>
                                <div class="share-bar ">
                                    <a href="/thinkphp/index.php/Home/List/famensi" class="v-detail">查看详情</a>





                                </div>
                            </div>
                        </div>
                    </li>            </ul>
        </div>

    </div>



    <!--导航-->
    <div class="in-chengdu-head">
      
        <div class="in-chengdu-logo"></div>

        <div class="in-chengdu-type in-cd-chi" i="0"></div>
        <div class="in-chengdu-type in-cd-zhu" i="1"></div>
        <div class="in-chengdu-type in-cd-xing" i="2"></div>
        <div class="in-chengdu-type in-cd-you" i="3"></div>
        <div class="in-chengdu-type in-cd-gou" i="4"></div>
        <div class="in-chengdu-type in-cd-yu active" i="5"></div>


        <div class="in-chengdu-thumb"></div>

    </div>
    <!--导航结束-->

        




    <div class="cen_focus" id="cen_focus">
            <!--单张图片 开始-->
<a  style="display: block;width: 100%;height: 100px;font-size:50px;text-decoration:none;margin-top:50px;margin-left:-10px"><img  src="/thinkphp/Public/img/taibai/taibaishan20.jpg" style="width: 500px;height: 100px;"/><img  src="/thinkphp/Public/img/huashan/huashan11.jpg" style="width: 500px;height: 100px;margin-left:200px"/></a>
    <!--单张图片 结束-->    </div>
    <div class="in-chengdu-title lvyou">
        <div class="day-top-title" style="margin-top:20px;margin-left:80px;">好吃好玩</div>
    </div>





    <div class="ly-chengdu-body">
	
        <!--发现新美景-->
        <div class="v2-cat-box v2-beauty">
            <div class="sanjiao"></div>
            <div class="v2-cat_thumb-box" data-_dots=".v2-beauty .dots .box-dots" data-dots="true" data-autoplay="false" data-dots_event="mouseover">
                <ul style="width: 1925px; height: 235px; margin-left: 0px;">
                                        <li style="width: 385px; height: 235px;">
                        <a href="/thinkphp/index.php/Home/List/bingma"><img style="display: inline;" src="/thinkphp/Public/img/bingma/bingma3.jpg" alt=""></a>
                    </li>                    <li style="width: 385px; height: 235px;">
                        <a href="/thinkphp/index.php/Home/List/datang"><img style="display: inline;" src="/thinkphp/Public/img/datang/datang2.jpg" alt=""></a>
                    </li>                    <li style="width: 385px; height: 235px;">
                        <a href="/thinkphp/index.php/Home/List/zhonglou"><img style="display: inline;" src="/thinkphp/Public/img/zhonglou/zhonglou3.jpg" alt=""></a>
                    </li>                    <li style="width: 385px; height: 235px;">
                        <a href="/thinkphp/index.php/Home/List/famensi"><img style="display: inline;" src="/thinkphp/Public/img/famen/famen13.jpg" alt=""></a>
                    </li>                    <li style="width: 385px; height: 235px;">
                        <a href="/thinkphp/index.php/Home/List/beiling"><img style="display: inline;" src="/thinkphp/Public/img/beiling/beiling2.jpg" alt=""></a>
                    </li>                </ul>

                <div class="beauty-icon"></div>
                <div class="dots"><span class="box-dots active" i="0">0</span><span class="box-dots" i="1">1</span><span class="box-dots" i="2">2</span><span class="box-dots" i="3">3</span><span class="box-dots" i="4">4</span></div>
            </div>

            <div class="v2-cat_content-box">
                <ul>
                                            <li style="display: list-item;">
                            <a href="/thinkphp/index.php/Home/List/"> 秦始皇陵兵马俑是世界奇迹之一。</a>
                            <p>秦始皇陵兵马俑是"世界奇迹之一。
秦兵马俑坑发现于1974年，秦始皇兵马俑坑位于今西安市临潼区秦始皇陵以东1.5公里处，是秦始皇帝陵的一部分陪葬坑，在已发现的三座俑坑里出土了大量的兵马俑。

1987年，秦始皇帝陵被列入世界文化遗产保护名录，先后已有200多位国家领导人参观访问，成为中国古代辉煌文明的一张金字名片。秦始皇兵马俑是世界考古史上最伟大的发现之一。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/">感受大唐文化</a>
                            <p>西安大唐芙蓉园是国家AAAAA级旅游景区，全国首个全方位展示盛唐风貌的大型皇家园林式文化主题公园，是首个“五感”（即视觉、听觉、嗅觉、触觉、味觉）主题公园，拥有全球最大户外香化工程以及全球最大的水景表演展示。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/">西安标志性建筑-钟楼</a>
                            <p>西安钟楼，建于明太祖朱元璋洪武十七年（公元1384年），位于中国陕西省西安市的市中心，城内东西南北四条大街的交汇处（属碑林区管辖）。钟楼建在方型基座之上，为砖木结构，重楼三层檐，四角攒顶的形式，总高36米，每边长35.5米，占地面积1377平方米，内有楼梯可盘旋而上。在檐上覆盖有深绿色琉璃瓦，楼内贴金彩绘，画栋雕梁，顶部有鎏金宝顶，金碧辉煌，体现了古代汉族劳动人民的聪明智慧和高超的建筑技艺。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/">佛教文化-法门寺</a>
                            <p>法门寺位于炎帝故里、青铜器之乡——宝鸡市，2004年被联合国教科文组织评为“世界第九大奇迹”，全国重点文物保护单位。地处陕西省宝鸡市扶风县法门镇。始建于东汉末年恒灵年间，约有1700多年历史，有“关中塔庙始祖”之称，周魏以前称作“阿育王寺”，隋文帝时改称“成实道场”，唐高祖时改名“法门寺”。法门寺被誉为皇家寺庙，因安置释迦牟尼佛指骨舍利而成为举国仰望的佛教圣地。法门寺佛塔被誉为“护国真身宝塔”。寺庙所在的法门寺文化景区为国家AAAAA级旅游景区。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/">品味名家艺术-西安碑林</a>
                            <p>陕西省西安市南城墙魁星楼下的碑林，因碑石丛立如林而得名。这是收藏中国古代碑石时间最早名碑最多的汉族文化艺术宝库。它始建于北宋哲宗元祐二年（1087年），原为保存唐开元年间镌刻的《十三经》、《石台孝经》而建，后经历代收集，规模逐渐扩大，清始称“碑林”。几经易名，1992年正式定名为西安碑林博物馆。</p>
                        </li>                </ul>
            </div>

        </div>
        <!--发现新美景 结束 -->





        <!--famensi-->
        <div class="v2-cat-box v2-culturals">
            <div class="sanjiao"></div>
            <div class="v2-cat_content-box">
                
                <ul>
                                            <li style="display: list-item;">
                            <a href="/thinkphp/index.php/Home/List/liangpi">陕西凉皮</a>
                            <p> 汉中面皮起源于秦汉时期，相传刘邦在汉中称王，命萧何修筑山河堰，粮食连年丰收。农民为改善生活，把面粉加水稀释，蒸成薄饼，切条凉拌而食，味道很美。一日，刘邦微服出访，进入百姓之家，好客的农民便以凉拌蒸饼丝条招待。刘邦边吃边称赞，问及名称，农民说不出来，刘邦听了制作方法哈哈一笑，信口说道：“此乃蒸饼也。”后来，人们改用重叠式竹笼，一次可蒸数张，而且又大又簿。切成细条，筋丝柔韧，软而不断，恰像皮条，改名“面皮”。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/yousu">油酥饼</a>
                            <p>  油酥饼是陕西汉族传统小吃中的代表，其味道鲜美，是其他地域小吃所不具备的。油酥饼始创于唐代，被誉为“西秦第一点”，千余年来，几经战乱，历久不衰，一直流传至今。其制作技艺十分精细，要经过制酥、和面、制饼、煎烤四道工序。它色泽金黄、层次鲜明、脆而不碎、油而不腻、香酥适口。深受中外宾客的称赞。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/yangrou">羊肉泡馍</a>
                            <p>  羊肉泡馍简称羊肉泡、泡馍。古称"羊羹"，西北美馔，尤以陕西西安最享牛羊肉泡馍盛名，北宋著名诗人苏轼留有"陇馔有熊腊，秦烹唯羊羹"的诗句。它烹制精细，料重味醇，肉烂汤浓，肥而不腻，营养丰富，香气四溢，诱人食欲，食后回味无穷。因它暖胃耐饥，素为西安和西北地区各族人民所喜爱，外宾来陕也争先品尝，以饱口福。牛羊肉泡馍已成为陕西名食的“总代表”。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/saozi">臊子面</a>
                            <p>臊（sào）子面是西北地区汉族传统面食、著名西府小吃，以宝鸡的岐山臊子面最为正宗。在陕西关中平原及甘肃陇东等地流行。臊子面历史悠久。其中也含有配菜比如豆腐，鸡蛋等，做法简单。在《水浒传》第三回：“奉着经略相公钧旨，要十斤精肉，切做臊子。”这里的臊子就是肉丁的意思。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/chamian">陕西扯面</a>
                            <p> 扯面已有3000年历史。以宝鸡的西府扯面最为正宗，为中华名吃。主要原料有上白面粉、鸡蛋、菠菜、红萝卜、调味品、臊（sào）子等。制作时先将面粉用盐水和好，用湿布盖好放置1小时以上，再调到较软程度后擀成较厚较宽面片，然后手拿两端，扯成薄而未断的面片，入沸水锅煮熟捞出，加调料和辣子粉，用烧热的油泼后搅拌食之。</p>
                        </li>                </ul>

                <div class="dots"><span class="box-dots active" i="0">0</span><span class="box-dots" i="1">1</span><span class="box-dots" i="2">2</span><span class="box-dots" i="3">3</span><span class="box-dots" i="4">4</span></div>
            </div>


            <div class="v2-cat_thumb-box" data-_dots=".v2-culturals .v2-cat_content-box .dots .box-dots" data-dots="true" data-autoplay="false" data-dots_event="mouseover">
                <ul style="width: 1925px; height: 235px; margin-left: 0px;">
                                            <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/liangpi"><img style="display: inline;" src="/thinkphp/Public/img/meishi/meishi1.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/yousu"><img style="display: inline;" src="/thinkphp/Public/img/meishi/meishi3.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/yangrou"><img style="display: inline;" src="/thinkphp/Public/img/meishi/meishi6.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/saozi"><img style="display: inline;" src="/thinkphp/Public/img/meishi/meishi4.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/chemian"><img style="display: inline;" src="/thinkphp/Public/img/meishi/meishi8.jpg" alt=""></a>
                        </li>                </ul>



            </div>



        </div>
        <!--famensi 结束 -->







        <!--生态旅游-->
        <div class="v2-cat-box v2-ecotourism">
            <div class="sanjiao"></div>
            <div class="v2-cat_thumb-box" data-_dots=".v2-ecotourism .dots .box-dots" data-dots="true" data-autoplay="false" data-dots_event="mouseover">
                <ul style="width: 1925px; height: 235px; margin-left: 0px;">
                                            <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/wenhua2"><img src="/thinkphp/Public/img/minsu/minsu4.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/wenhua3"><img src="/thinkphp/Public/img/minsu/minsu3.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/qinqiang"><img src="/thinkphp/Public/img/minsu/qinqiang.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/wulong"><img src="/thinkphp/Public/img/minsu/wulong2.jpg" alt=""></a>
                        </li>                        <li style="width: 385px; height: 235px;">
                            <a href="/thinkphp/index.php/Home/List/wushi"><img src="/thinkphp/Public/img/minsu/wushi1.jpg" alt=""></a>
                        </li>                </ul>

                <div class="ecotourisms-icon"></div>
                <div class="dots"><span class="box-dots active" i="0">0</span><span class="box-dots" i="1">1</span><span class="box-dots" i="2">2</span><span class="box-dots" i="3">3</span><span class="box-dots" i="4">4</span></div>
            </div>

            <div class="v2-cat_content-box">
                <ul>
                                            <li style="display: list-item;">
                            <a href="/thinkphp/index.php/Home/List/wenhua2">剪纸</a>
                            <p>剪纸俗称窗花，为聪慧的劳动妇女所创作，她浓缩着古老的黄河文化。每逢春节，家家窗上，门上贴满各式各样剪纸，把人们喜庆，快乐的感情表达得淋漓尽致。近年来，这株黄土高原出生的民族艺术之花飘洋过海，深受国外宾朋的欢迎。。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/wenhua3">刺绣</a>
                            <p>  陕西民间刺绣广泛流行于农村。内容有翎毛花卉、动物和人物等。风格淳朴，色彩鲜丽，用线较粗，针法奔放，具有鲜明的地方特色。陕西民间刺绣和农村婚嫁和节日等乡俗紧密相联，所以这些绣品随着传统的习俗世代流传，迄今不衰。常见的品种有枕顶、耳枕、袜底、鞋垫、鞋头、信插、钱包、针包，裹肚、荷包和香包等。。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/qinqiang">秦腔</a>
                            <p> 秦腔又称乱弹，源于西秦腔，是一种非常古老的汉族戏曲剧种。主要流行于中国西北地区的陕西、甘肃、青海、宁夏、新疆等地，又因其以枣木梆子为击节乐器，所以又叫“梆子腔”，俗称“桄桄子”（因以梆击节时发出“恍恍”声）。明末无名氏《钵中莲》传奇中使用了[西秦腔二犯]的曲牌，故知其。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/wulong">舞龙</a>
                            <p>舞龙俗称玩龙灯，是一种起源于中国的汉族传统民俗文化活动之一。每逢喜庆节日,舞龙时，龙跟着绣球做各种动，穿插，不断地展示扭、挥、仰、跪、跳、摇等多种姿势。所以以舞龙的方式来祈求平安和丰收就成为全国各地汉族的一种民俗文化。舞龙和舞狮，古时是在一年中的大型节日里面节目之一。随着华人移民到世界各地，现在的舞龙文化，已经遍及中国大陆、台湾、香港、东南亚，以至欧美、澳大利亚、新西兰各个华人集中的地区，都成为中华文化的一个标志。</p>
                        </li>                        <li style="display: none;">
                            <a href="/thinkphp/index.php/Home/List/wushi">舞狮</a>
                            <p>北狮的造型酷似真狮，狮头较为简单，全身披金黄色毛。舞狮者(一般二人舞一头)的裤子，鞋都会披上毛，未舞看起来已经是维妙维肖的狮子。狮头上有红结者为雄狮，有绿结者为雌性。北狮表现灵活的动作，与南狮着重威猛不同。舞动则是以扑、跌、翻、滚、跳跃、擦痒等动作为主。</p>
                        </li>                </ul>
            </div>

        </div>
        <!--生态旅游 结束 -->


        <div class="c_b"></div>






        <div class="lines-box">
            <div class="lines-focus">
                <a href=""><img style="display: inline;" src="/thinkphp/Public/img/taibai/taibai19.jpg" alt=""></a>
            </div>
            <div class="top-lines">
                <div class="line-icon"></div>
                <div class="item">
                            [推荐景点]
                            <a href="/thinkphp/index.php/Home/List/bingma">世界遗迹秦始皇陵兵马俑兵马俑</a>
                        </div><div class="item">
                            [推荐景点]
                            <a href="/thinkphp/index.php/Home/List/datang">大唐芙蓉园</a>
                        </div><div class="item">
                            [推荐景点]
                            <a href="/thinkphp/index.php/Home/List/">太白山</a>
                        </div><div class="item">
                            [推荐景点]
                            <a href="/thinkphp/index.php/Home/List/famen">法门寺主要景区</a>
                        </div>            </div>
        </div>






        <div class="video">
            <div class="video-icon"></div>
            <div>
                    <a href="">
                        <img style="display: inline;" src="/thinkphp/Public/img/famen/famen13.jpg" alt="">
                    </a>
                </div>
                       </div>



        <div class="c_b"></div>

    </div>







 <div class="cen_focus" id="cen_focus">
            <!--单张图片 开始-->
        <a  style="display: block;width: 100%;height: 100px;font-size:50px;text-decoration:none;margin-top:50px;margin-left:-10px"><img  src="/thinkphp/Public/img/datang/datang8.jpg" style="width: 500px;height: 100px;"/><img  src="/thinkphp/Public/img/bingma/bingma7.jpg" style="width: 500px;height: 100px;margin-left:200px"/></a>
    <!--单张图片 结束-->    </div>
    <div class="in-chengdu-title lvyou">
        <div class="day-top-title" style="margin-top:20px;margin-left:80px;">重点推荐</div>
    </div>









<!--好玩 -->

    <div class="v2-sichuan">
	
        <div class="v2-doc-item  m_b" style="">
                                <a href="" class="v2-doc-thumb">
                    <img style="display: inline;" src="/thinkphp/Public/img/meishi/meishi1.jpg" alt="">
                </a>

                <a href="/thinkphp/index.php/Home/List/liangpi" class="v2-dov-title">陕西美食-凉皮</a>
                <p class="v2-doc-intro">冬天吃面皮你能保暖，夏天吃你能消暑，春天吃你能解乏，秋天吃你能去湿，真可谓是四季皆宜、不可多得的天然绿色无公害食品。《本草纲目》上说：米能养脾，麦能补心。</p>

                <div>
                    <a href="" class="doc-detail-icon"></a>                                 发布日期: 2015-01-21                </div>
            </div><div class="v2-doc-item  m_b" style="">
                                <a href="" class="v2-doc-thumb">
                    <img style="display: inline;" src="/thinkphp/Public/img/bingma/bingma5.jpg" alt="">
                </a>

                <a href="/thinkphp/index.php/Home/List/bingma" class="v2-dov-title">陕西必观止地-秦始皇陵兵马俑</a>
                <p class="v2-doc-intro">秦始皇帝陵被列入世界文化遗产保护名录，先后已有200多位国家领导人参观访问，成为中国古代辉煌文明的一张金字名片。秦始皇兵马俑是世界考古史上最伟大的发现之一。
				</p>

                <div>
                    <a href="" class="doc-detail-icon"></a>                                 发布日期: 2015-01-20                </div>
            </div><div class="v2-doc-item  m_b" style="">
                                <a href="" class="v2-doc-thumb">
                    <img style="display: inline;" src="/thinkphp/Public/img/huashan/huashan2.jpg" alt="">
                </a>

                <a href="/thinkphp/index.php/Home/List/huashan" class="v2-dov-title">陕西览之地-华山</a>
                <p class="v2-doc-intro">
				华山古称“西岳”，为中国著名的五岳之一。华山还是神州九大观日处之一。华山观日处位于华山东峰（亦称朝阳峰），朝阳台为最佳地点。华山还是道教胜地，为“第四洞天”，有陈抟、郝大通、贺元希诸位著名的道教高人。
				</p>

                <div>
                    <a href="" class="doc-detail-icon"></a>                                 发布日期: 2014-12-22                </div>
            </div><div class="v2-doc-item  m_b" style="margin-right:0">
                                <a href="" class="v2-doc-thumb">
                    <img style="display: inline;" src="/thinkphp/Public/img/techan/techan2.jpg" alt="">
                </a>

                <a href="/thinkphp/index.php/Home/List/fbingma" class="v2-dov-title">陕西特产-仿兵马俑</a>
                <p class="v2-doc-intro"> 秦兵马俑被称为“世界第八大奇迹”。陕西文物和工艺美术部门设计和复仿制出了各种造型和规格不同的陶兵俑和马俑。其品种有博物馆、美术馆和涉外旅游饭店、商店陈列的与原兵马俑规格相同的大型俑；有可供会客场所和办公室、家庭摆设装饰的1：2、1：4规格的陶俑；有便于携带、适宜于馈赠亲友的袖珍礼品俑等，可供游客选购。 </p>

                <div>
                    <a href="" class="doc-detail-icon"></a>                                 发布日期: 2014-12-22                </div>
            </div>    </div>
    <!--好玩 结束 -->

    <div class=""></div>


<br>







    
    <div class="footer">
       
        <div class="m copyright">
             2015  绿友旅游门户  <a href="/thinkphp/index.php/Home/register1/" class="reg">注册</a> / <a href="/thinkphp/index.php/Home/Login/" data-toggle="modal" class="login">登录</a><div id="LoginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			</div></div>
			
	
    </div>
    
<script type="text/javascript" src="/thinkphp/Public/js/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="/thinkphp/Public/js/Index/bootstrap.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/Index/common.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/Index/slide.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/Index/layer.min.js"></script>

    
    <script>
        $(function(){
            $("#top_focus").slider({arrows:true,fluid:true});
            $(window).resize(_resize);
            _resize();


            //发现新美景

            $(".v2-cat_thumb-box").slider({oncomplete:function(){
                //alert(this.i);
                $(".v2-cat_content-box>ul>li",this.ele.parent() ).fadeOut(0);
                $(".v2-cat_content-box>ul>li",this.ele.parent() ).eq(this.i).fadeIn(500);
            }});
 }) ;
        function _resize(){
            $("#top_focus").width( $(window).width()>1200?$(window).width():1200 );
            $("#top_focus").height( 600);
        }
    </script>


    <script src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=395127" type="text/javascript" id="bdshare_js" data="type=tools&amp;mini=3"></script>
    
    <script type="text/javascript">
        /**
         * 在这里定义bds_config
         */
        var bds_config = {"bdStyle":"2"};

        document.getElementById('bdshell_js').src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
    </script>
    <!-- Baidu Button END -->






<div class="album-body" style="display: none;"><div class="album-commend-box"><iframe id="share_comment" src="" style="width: 100%;height: 100%;" frameborder="0" height="100%" width="100%"></iframe></div><div class="album-photos-box"><div class="album-photo-box"></div><div class="arrow prev" onclick="photo_slider(-1)">←</div><div class="arrow next" onclick="photo_slider(1)">←</div></div></div>
</body>
</html>