function _jc_f_decode64(e){var t,n,r,i,s,o,u;o=e.length,s=0,u="";while(s<o){do t=_jcDeChars[e.charCodeAt(s++)&255];while(s<o&&t==-1);if(t==-1)break;do n=_jcDeChars[e.charCodeAt(s++)&255];while(s<o&&n==-1);if(n==-1)break;u+=String.fromCharCode(t<<2|(n&48)>>4);do{r=e.charCodeAt(s++)&255;if(r==61)return u;r=_jcDeChars[r]}while(s<o&&r==-1);if(r==-1)break;u+=String.fromCharCode((n&15)<<4|(r&60)>>2);do{i=e.charCodeAt(s++)&255;if(i==61)return u;i=_jcDeChars[i]}while(s<o&&i==-1);if(i==-1)break;u+=String.fromCharCode((r&3)<<6|i)}return u}function _jc_urlsafe_base64_decode(e){var t=e.replace(/-/g,"+").replace(/_/g,"/"),n=0;n=t.length%4,n&&(t+="====".substr(0,n)),t=_jc_f_decode64(t);var r=t.match(/uid:(\d+)|(.*?)/i);return r&&r[1]?r[1]:0}function _jc_f_account(){var e=_jc_cookie.getData("ppinf17173");if(e=="")return 0;try{return e=e.split("|"),e.length<4?0:_jc_urlsafe_base64_decode(e[3])}catch(t){return 0}}function _jc_f_isDPR(e){var t=!1,n=["ch"];/iPhone|iPad|iPod|CPU OS/i.test(navigator.userAgent)&&(t=!0);if(_jcbw[11]==2)if(typeof document.width!="undefined")document.width===screen.width&&e!=1&&(t=!0);else for(var r=0;r<n.length;r++)_jcbw[10]===n[r]&&(t=!0);return t}function _jc_f_client(){var e=navigator.userAgent.match(/iphone|android|phone|mobile|wap|netfront|x11|java|operamobi|operamini|ucweb|windowsce|symbian|symbianos|series|webos|sony|blackberry|dopod|nokia|samsung|palmsource|xda|pieplus|meizu|midp|cldc|motorola|foma|docomo|up.browser|up.link|blazer|helio|hosin|huawei|novarra|coolpad|webos|techfaith|palmsource|alcatel|amoi|ktouch|nexian|ericsson|philips|sagem|wellcom|bunjalloo|maui|smartphone|iemobile|spice|bird|zte-|longcos|pantech|gionee|portalmmm|jig browser|hiptop|benq|haier|^lct|320x320|240x320|176x220|bolt|eudoraweb|touchpad|windows ce|windows mobile/i)!=null,t=navigator.platform.match(/Win32|Windows|Mac|Linux|X11/i)!=null;return e?2:t?1:0}function _jc_f_ie_t(e){var t=navigator.userAgent.toString();try{for(var n in e){var r=t.match(e[n][0]);if(r&&e[n][1])return e[n][1]}return"0"}catch(i){return"0"}}function _jc_f_os_t(e){var t=navigator.userAgent.toString();try{for(var n in e){var r=t.match(e[n][0]);if(r&&r.length>0){if(e[n].length==1){var i="";for(var s=1;s<r.length;s++)s>1&&(i+=s==2?" ":"."),i+=r[s];return i}if(e[n].length==2)return e[n][1]}}return"0"}catch(o){return"0"}}function _jc_f_q(e){var t;return(t=(e=e.match(/^(https?:\/\/)?([^\/\?#]*)/))?e[2].replace(/.*@/,""):_jcrf_val,e=t)?e.replace(/:\d+$/,""):e}function _jc_f_o(e,t){var n=e.match(RegExp("(^|&|\\?|#)("+t+")=([^&#]*)(&|$|#)",""));return n?n[3]:_jcrf_val}function _jc_g_kw2(){if(_jcrf=="")return;var e=0,t,n="";if((e=_jcrf.indexOf("://"))<0)return;t=_jcrf.substring(e+3,_jcrf.length),t.indexOf("/")>-1&&(t=t.substring(0,t.indexOf("/")));for(var r=0,i=_jc_engine.length;r<i;r++)if(RegExp("(^|\\.)"+_jc_engine[r][1].replace(/\./g,"\\.")).test(_jc_f_q(_jcrf))){var s=_jc_f_o(_jcrf,_jc_engine[r][2])||"";if(s||_jc_engine[r][0]==2||_jc_engine[r][0]==14||_jc_engine[r][0]==17)_jc_engine[r][0]==1&&_jcrf.indexOf("cpro.baidu.com")>-1&&(s=""),_jc_se=_jc_engine[r][0],_jc_kw=s}_jc_f_Refertype()}function _jc_f_Refertype(){_jcrf!=""&&(_jc_se!=""?_jc_refertype=2:_jc_refertype=~_jcrf.indexOf(".17173.")?3:4)}function _jc_f_cr(e){var t="";if(!e||e=="")return"";for(var n=0;n<e.length;n++)e.charAt(n)==" "?t+="+":t+=e.charAt(n);return t}function _jc_f_ie(){var e={},t=navigator.userAgent.toLowerCase(),n;return(n=t.match(/msie ([\d.]+)/))?e.ie=n[1]:(n=t.match(/firefox\/([\d.]+)/))?e.firefox=n[1]:(n=t.match(/chrome\/([\d.]+)/))?e.chrome=n[1]:(n=t.match(/opera\/([\d.]+)/))?e.opera=n[1]:(n=t.match(/version\/([\d.]+).*safari/))?e.safari=n[1]:0,e.ie?"IE: "+e.ie:e.firefox?"Firefox: "+e.firefox:e.chrome?"Chrome: "+e.chrome:e.opera?"Opera: "+e.opera:e.safari?"Safari: "+e.safari:"0"}function _jc_f_bw(){_jcbw[0]=navigator.appName,_jcbw[7]=navigator.language,_jcbw[0]=="Netscape"?_jcbw[7]=navigator.language:_jcbw[0]=="Microsoft Internet Explorer"&&(_jcbw[7]=navigator.userLanguage),_jcbw[7]=_jcbw[7].toLowerCase(),_jcbw[1]=_jc_f_ie(),_jcbw[2]=navigator.javaEnabled()?1:0,_jcbw[3]=_jc_g_fl(),_jcbw[4]=_jc_f_os_t(_jc_pcsystem),_jcbw[8]=navigator.cookieEnabled?1:0,_jcbw[8]===1&&(_jcbw[8]=_jc_cookie.getCookieEnabled()?1:0),_jcbw[10]=_jc_f_ie_t(_jc_browser),_jcbw[11]=_jc_f_client();if(self.screen){var e=typeof window.devicePixelRatio!="undefined"?window.devicePixelRatio:1;sr=_jc_f_isDPR(e)?screen.width*e+"x"+screen.height*e:screen.width+"x"+screen.height,sc=screen.colorDepth?screen.colorDepth+"-bit":"0"}else if(self.java){var t=java.awt.Toolkit.getDefaultToolkit(),n=t.getScreenSize();sr=n.width+"x"+n.height}_jcbw[5]=sr,_jcbw[6]=sc}function _jc_g_fl(){var f="-1",n=navigator;if(n.plugins&&n.plugins.length){for(var ii=0;ii<n.plugins.length;ii++)if(n.plugins[ii].name.indexOf("Shockwave Flash")!=-1){f=n.plugins[ii].description.split("Shockwave Flash ")[1];break}}else if(window.ActiveXObject)for(var ii=20;ii>=2;ii--)try{var fl=eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash."+ii+"');");if(fl){f=ii+".0";break}}catch(e){}return f=="-1"?f:f.substring(0,f.indexOf(".")+2)}function _jc_f_rp(e,t,n){var r="",i="",s,o=t.length;s=e.indexOf(t);while(s!=-1)r=e.substr(0,s),e=e.substr(s+o),i=i+r+n,s=e.indexOf(".");return i+=e,i}function _jc_g_dm(e){var t=/^([^\:]+)\:\/\/([^\:\/\?]+)(\:\d+)?(\/[^\?]*)?(\?.*)?$/;return e=e.match(t)[2],e}function _jc_g_h(){var e=_jcda,t="",n="",r=!1;for(var i=0;i<_jcexl.length;i++){n=new RegExp(""+_jc_f_rp(_jcexl[i],".","\\.")+"$");if(n.test(e)){r=!0,t=_jcexl[i],e=e.substr(0,e.lastIndexOf(t)),e.lastIndexOf(".")>0&&(e=e.substr(e.lastIndexOf(".")+1));break}}return r?e+t:"auto"}function _jc_f_trim(e){return e.replace(/\s+/g,"")}function _jc_f_void(){return}function _jc_f_getads(){var e=_jcl.indexOf("ads="),t="",n="0";return e!=-1&&(t=_jc_f_trim(_jcl.substr(e+4,32)),t.length==32&&/^[a-f0-9]+$/gi.test(t)==1&&(n=t)),n}function _jc_f_pageclk(e){function u(e,t,n){e.attachEvent?e.attachEvent("on"+t,function(t){n.call(e,t)}):e.addEventListener&&e.addEventListener(t,n,i)}function a(n){return function(i){var o,u;s?(u=Math.max(document.documentElement.scrollTop,document.body.scrollTop),o=Math.max(document.documentElement.scrollLeft,document.body.scrollLeft),o=i.clientX+o,u=i.clientY+u):(o=i.pageX,u=i.pageY);var a=window.innerWidth||document.documentElement.clientWidth||document.body.offsetWidth;switch(t.align){case 1:o-=a/2;break;case 2:o-=a}o='{"x":'+o+',"y":'+u+",",i=i.target||i.srcElement;if(i&&typeof i.tagName!="undefined"&&i.tagName.toLowerCase()!="a")e:{for(u="A";(i=i.parentNode)&&i.nodeType==1;)if(i.tagName==u)break e;i=r}o+=i?'"t":"a","u":"'+encodeURIComponent(i.href)+'"}':'"t":"b"}',i=o,""!=i&&(o=(_jc_F+"//"+e+"/pv?appkey="+_jc_appkey).length,o+10>1024||(o+encodeURIComponent(n.b.join(",")+(n.b.length?",":"")).length+10>1024&&f(n),n.b.push(i),(n.b.length>=10||/"t":"a"/.test(i))&&f(n)))}}function f(t){var n=new Image;t.b.length!=0&&(t.a.et=2,t.a.ep="["+t.b.join(",")+"]",n.src=_jc_F+"//"+e+"/pv?appkey="+_jc_appkey+"&suv="+_jc_uv+"&ssid="+_ssid+"&bp="+encodeURIComponent(t.a.ep)+"&se="+_jc_se+"&kw="+_jc_kw+"&rf="+_jcrf+"&bwt="+_jcbw[1]+"&bw="+_jcbw[10]+"&Jav="+_jcbw[2]+"&Flu="+_jcbw[3]+"&scr="+_jcbw[5]+"&Clr="+_jcbw[6]+"&Os="+_jcbw[4]+"&ck="+_jcbw[8]+"&Ln="+_jcbw[7]+"&rft="+_jc_refertype),t.b=[]}function l(){if(typeof window["_bdhm_loaded_"+t.id]=="undefined"){window["_bdhm_loaded_"+t.id]=n;var e=this;e.a={},e.b=[],e.J()}}var t={ctrk:!0,align:1},n=!0,r=null;i=!1;var s=/msie (\d+\.\d+)/i.test(navigator.userAgent),o=window.screen.width+"x"+window.screen.height;l.prototype={m:function(){var e=this;t.ctrk&&(u(document,"mouseup",a(this)),u(window,"beforeunload",function(){f(e)}),setInterval(function(){f(e)},6e5))},J:function(){try{this.m&&this.m()}catch(e){}}},new l}function _jc_set_diff(){var e=new Date;_jc_cookie.setData("DIFF",e.getTime(),_jcage)}function _jc_f_init(){var e=_jcin.getTime()*1e3+Math.round(Math.random()*2147483647),t,n=new Image(0,0);_jc_i11=new Image(0,0),_jc_g_kw2(),_jcrf==""?(_jcrf="0",_jcrfd="0"):_jcrfd=_jc_g_dm(_jcrf);var r=_jc_cookie.getData("ONLINE_TIME");if(r=="")r=_jcin.getTime(),_jc_cookie.setData("ONLINE_TIME",r);else{var i=_jcin.getTime();_jc_ol_s=Math.round((parseInt(i)-parseInt(r))/1e3);if(isNaN(_jc_ol_s)||_jc_ol_s<0)_jc_ol_s=0;_jc_cookie.setData("ONLINE_TIME",i)}_jc_uv=_jc_cookie.getData("SUV"),_diff=_jc_cookie.getData("DIFF"),_diff=!isNaN(_diff)&&_diff!=""?parseInt(_diff):0,s=new Date,_jc_uv==""?(_diff=0,_jc_set_diff()):_diff&&s.getTime()-_diff<36e5?_diff=-1:_diff&&s.getTime()-_diff>36e5?(_diff>0&&(_diff=s.getTime()-_diff),_diff=Math.round(Math.ceil(_diff/36e5)),_jc_set_diff()):_diff==""?(_diff=-4,_jc_set_diff()):(_diff=-3,_jc_set_diff()),_jc_uv==""&&(_jc_uv=e,_jc_cookie.setData("SUV",_jc_uv,_jcage)),_ssid=_jc_cookie.getData("sessionid"),_ssid2=_jc_cookie.getData("sessionid2");var s=new Date;s.setTime(s.getTime()+18e5),_ssid==""||_ssid!=_ssid2||_ssid.indexOf("|")==-1?(_ssid=_jc_uv+""+(_jcin.getTime()*1e3+Math.round(Math.random()*2147483647))+_jcin.getTime(),_svn=1,_jc_cookie.setData("sessionid",_ssid+"|"+_svn,s.valueOf()),_jc_cookie.setData("sessionid2",_ssid+"|"+_svn)):(_svn=_ssid.split("|")[1],_svn=!isNaN(_svn)&&_svn!=""?parseInt(_svn)+1:1,_ssid=_ssid.split("|")[0],_jc_cookie.setData("sessionid",_ssid+"|"+_svn,s.valueOf()),_jc_cookie.setData("sessionid2",_ssid+"|"+_svn),_svn=_svn==1?-1:_svn),_nuv=_jc_cookie.getData("NUV");var o=new Date;_nuv==""?(o.setDate(o.getDate()+1),o=new Date(o.getFullYear(),o.getMonth(),o.getDate()),_jc_cookie.setData("NUV",o.getTime(),_jcage)):_nuv&&o.getTime()>parseInt(_nuv)&&(_jc_nuv=0),_jc_f_bw(),_jcbw[9]=0;try{top.location!=self.location&&_jcrfd.indexOf(".17173.")==-1&&(_jcrfd=3,_jcbw[9]=3)}catch(u){_jcrfd=3}_jcrf.indexOf("#")>-1&&(_jcrf=_jcrf.substring(0,_jcrf.indexOf("#")));var a="";typeof seourl!="undefined"&&(a=seourl);var f=_jc_f_getads();_jc_account=_jc_f_account(),_jc_i11.src=_jc_F+"//log1.17173.com/ping.gif?"+e+"?t?="+_jc_uv+"?t?="+_jc_nuv+"?t?="+_jcrfd+"?t?="+_jcrf+"?t?="+_jcda+"?t?="+_jc_se+"?t?="+_jc_kw+"?t?="+_jc_f_trim(_jcbw[1])+"?t?="+_jcbw[2]+"?t?="+_jcbw[3]+"?t?="+_jcbw[4]+"?t?="+_jcbw[5]+"?t?="+_jcbw[6]+"?t?="+_jcbw[7]+"?t?="+_jcbw[8]+"?t?="+_jcbw[9]+"?t?="+_jcbw[10]+"?t?="+_jc_ol_s+"?t?="+f+"?t?="+_ssid+"?t?="+_svn+"?t?="+_diff+"?t?="+_jcbw[11]+"?t?="+_jc_account+"?t?="+_jc_refertype+"?t?="+a+"?t?=",_jc_i11.onload=function(){_jc_f_void()},_jc_f_pageclk("log1.17173.com")}function _jc_pingjs(e,t){var n={},r;r=function(e){var t=new Image,n=[];for(var r in e)r==="appkey"?n.unshift(r+"="+e[r]):n.push(r+"="+e[r]);n.push("randint="+Math.random()),t.src="http://log1.17173.com/pv?"+n.join("&")};if(e&&t){n={uv:_jc_uv,ref:encodeURIComponent(_jcrf),ssid:_ssid,nuv:_jc_nuv,rtype:_jc_refertype,kw:_jc_kw,rfd:_jcrfd,se:_jc_se,uid:_jc_account};for(var i in t)n[i]=t[i];n.u||(n.u="");switch(e){case"block":n.appkey=113,r(n);break;case"click":r(n)}}}var _jcexl=new Array(".com.cn",".net.cn",".org.cn",".gov.cn",".com",".cn",".net",".org",".mobi",".biz",".cc",".us",".info",".name",".tv",".asia",".hk"),_jcDeChars=new Array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,62,-1,-1,-1,63,52,53,54,55,56,57,58,59,60,61,-1,-1,-1,-1,-1,-1,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,-1,-1,-1,-1,-1,-1,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,-1,-1,-1,-1,-1),_jc_pcsystem=[[/(Windows NT 5\.0|Windows 2000)/,"Win 2000"],[/(Windows NT 5\.1|Windows xp)/i,"Win XP"],[/(Windows NT 5\.2|Windows 2003)/,"Win 2003"],[/(Windows NT 6\.0|Windows Vista)/,"Win Vista"],[/(Windows NT 6\.1|Windows 7)/,"Win 7"],[/(Windows NT 6\.2; ARM;)/,"Windows RT"],[/(Windows NT 6\.2)/,"Win 8"],[/(XBLWP7|WP7)/,"Windows Phone"],[/(Windows ?Mobile| WM([0-9]) )/,"Windows Mobile"],[/(Windows Phone).* (\d+)\.(\d+)/],[/(Win98|Windows 98)/,"Win 98"],[/(WinME|Windows ME)/,"Windows ME"],[/(WinCE|WindowsCE|Windows CE)/,"Windows CE"],[/(Touch[Pp]ad)\/(\d+)\.(\d+)/],[/(Android)[\- ]?([\d]+)\.([\d]+)/],[/(Linux)[\/ ]?(\d+)\.(\d+)/],[/Linux/,"Linux"],[/(Unix|UNIX|X11)/,"Unix"],[/(FreeBSD)/],[/(OpenBSD)/],[/(iPhone|iPad|iPod);.*CPU.*OS (\d+)(?:_\d+)?_(\d+).*Mobile/],[/(iPhone|iPad|iPod).*OS (\d+)_(\d+)/],[/(iPhone|iPad|iPod|CPU OS)/,"IOS"],[/(BlackBerry)[ ]?[0-9]*[i]?[\/]?([0-9]+)\.([0-9]*)/],[/(BB10|(Black[Bb]erry)|(RIM Tablet OS)|(Play[Bb]ook))/,"BlackBerry OS"],[/(CrOS) [a-z0-9_]+ (\d+)\.(\d+)/],[/(Samsung)/i,"Samsung"],[/\(Mobile;.+Firefox\/\d+\.\d+/,"Firefox OS"],[/(Brew|BREW|BMP)/,"Brew MP"],[/(Windows NT|SUSE|Fedora|Red Hat|PCLinuxOS|Puppy|PCLinuxOS|CentOS|hpwOS|webOS|AppleTV|Ubuntu|Kindle|Bada|Lubuntu|BackTrack|Slackware|Pre|Pixi|WebTV|GoogleTV|Symbian[Oo][Ss])[\/ ]?(\d+)\.(\d*)/],[/(HTC|Sprint APA(9292)|(ADR[A-Za-z0-9]+))/,"HTC"],[/(Mac)/,"Mac OS"],[/(J2ME)/,"J2ME"],[/(Symbian|SymbOS|S60|MeeGo|Series[ ]?60|SymbianOS\/9.1|NOKIA|Series40|Maemo)/i,"Symbian"],[/(WinNT4.0)/,"Windows NT 4.0"]],_jc_browser=[[/(17173)/,"17173"],[/(PaleMoon)/,"pm"],[/(Fennec)/,"fn"],[/(Flock)/,"fk"],[/(RockMelt)/,"rm"],[/(Navigator)/,"ng"],[/(MyIBrow)/,"mb"],[/(CrMo|CriOS)/,"cm"],[/(QQBrowser|TencentTraveler)/i,"qq"],[/(Maxthon)/,"ma"],[/(360SE|360EE|360browser)/i,"36"],[/(Theworld)/,"th"],[/( SE )/,"se"],[/(LBBROWSER)/,"lb"],[/(Lynx)/,"ln"],[/(CoolNovo)/,"cl"],[/(TaoBrowser)/,"tb"],[/(Arora)/,"aa"],[/(Epiphany)/,"ep"],[/(Links)/,"ls"],[/(Camino)/,"cmn"],[/(Konqueror)/,"kq"],[/(Avant Browser)/,"ab"],[/(ELinks)/,"el"],[/(Minimo)/,"mnm"],[/baiduie8|baidubrowser|FlyFlow|BIDUBrowser/i,"bd"],[/(UCBrowser|UC Browser|UCWEB|UC AppleWebKit)/,"uc"],[/(OneBrowser)/,"ob"],[/(iBrowser\/Mini)/,"im"],[/(Nokia|BrowserNG|NokiaBrowser|Series60|S40OviBrowser)/,"nk"],[/(BB10|PlayBook|Black[bB]erry)/,"bb"],[/(OmniWeb)/,"ow"],[/(Blazer)/,"bz"],[/Qt/,"qt"],[/(NetFront)/,"nf"],[/(Silk)/,"sk"],[/(Teleca)/,"tc"],[/(Froyo)/,"fy"],[/(MSIE 9)/,"ie9"],[/(MSIE 8)/,"ie8"],[/(MSIE 7)/,"ie7"],[/(MSIE 6)/,"ie6"],[/(MSIE 10)/,"ie10"],[/(Opera Mini)/,"opm"],[/(Opera|Oupeng)/,"op"],[/(iPhone|iPad|iPod)/,"ms"],[/(Firefox)/,"ff"],[/(Chrome)/,"ch"],[/(Safari)/,"sa"],[/(MSIE)/,"ie"],[/(Android)/,"ad"]],_jc_engine=[[1,"baidu.com","word|wd|w"],[2,"google.com","q"],[4,"sogou.com","query|keyword"],[6,"search.yahoo.com","p"],[7,"yahoo.cn","q"],[8,"soso.com","w|key|query"],[11,"youdao.com","q"],[12,"gougou.com","search"],[13,"bing.com","q"],[14,"so.com","q"],[14,"so.360.cn","q"],[14,"v.360.cn","q"],[14,"so.360kan.com","kw"],[14,"haosou.com","q"],[15,"jike.com","q"],[16,"qihoo.com","kw"],[17,"etao.com","q"],[18,"soku.youku.com","keyword"],[18,"soku.com","keyword"],[19,"easou.com","q"],[20,"glb.uc.cn","keyword|word|q"],[21,"yunfan.com","q|kw|key"],[22,"zhongsou.com","w"],[23,"chinaso.com","q|wd"]],_jcd=document,_jcage=(new Date).getTime()+1009152e6,_jcl=_jcd.location.toString(),_jcrf=_jcd.referrer,_jcda=_jc_g_dm(_jcl),_jcur=_jcd.url,_jcin=new Date,_jcrqurl="http://logs.17173.com/",_jc_uv="",_jc_nuv=1,_jcbw=new Array,_ssid="",_ssid2="",_svn="",_diff="",_jc_appkey=118,_jc_se="",_jc_kw="",_jc_refertype=1,_jcrf_val=null,_jc_i11,_nuv="",_jcrfd="0",_jc_ol_s=0,_jc_account="",_jc_F=window.location.protocol=="https:"?"https:":"http:";_jcrf.indexOf("http")>0&&(_jcrf=_jcrf.substring(_jcrf.indexOf("http"))),_jc_cookie={opts:{userdata:null,empty:"",ckEnabled:""},getCookieEnabled:function(){var e="";return this.opts.ckEnabled!=""?this.opts.ckEnabled:(this._setCookie("ck17173","17173"),e=this._getCookie("ck17173"),this._delCookie("ck17173"),e==="17173"?(this.opts.ckEnabled=!0,!0):(this.opts.ckEnabled=!1,!1))},_delCookie:function(e){var t=new Date;t.setTime(t.getTime()-1e3),this._setCookie(e,"",t.getTime())},_setCookie:function(e,t,n){var r;n&&(r=new Date,r.setTime(n)),document.cookie=e+"="+t+"; domain="+_jc_g_h()+(r?"; expires="+r.toGMTString():"")+"; path=/;"},_getCookie:function(e){var t=RegExp("(^| )"+e+"=([^;]*)(;|$)").exec(document.cookie);return t?t[2]:this.opts.empty},_userData:function(){if(!this.opts.userdata)try{this.opts.userdata=document.createElement("input"),this.opts.userdata.type="hidden",this.opts.userdata.style.display="none",this.opts.userdata.addBehavior("#default#userData"),document.getElementsByTagName("head")[0].appendChild(this.opts.userdata)}catch(e){return!1}return!0},_getSessionStorage:function(e){return window.sessionStorage?window.sessionStorage.getItem(e):this.opts.empty},_getLocalStorage:function(e){if(window.localStorage)if(e=window.localStorage.getItem(e)){var t=e.indexOf("|"),n=e.substring(0,t)-0;return n&&n>(new Date).getTime()?e.substring(t+1):this.opts.empty}},_getUserData:function(e){if(this._userData()){try{return this.opts.userdata.load(document.location.hostname),this.opts.userdata.getAttribute(e)}catch(t){}return this.opts.empty}},_setLocalStorage:function(e,t,n){var r=new Date;r.setTime(n);try{window.localStorage?(t=r.getTime()+"|"+t,window.localStorage.setItem(e,t)):this._userData()&&(this.opts.userdata.expires=r.toUTCString(),this.opts.userdata.load(document.location.hostname),this.opts.userdata.setAttribute(e,t),this.opts.userdata.save(document.location.hostname))}catch(i){}},_setSessionStorage:function(t,n){if(window.sessionStorage)try{window.sessionStorage.setItem(t,n)}catch(r){}},getData:function(e){try{var t;this.getCookieEnabled()?t=this._getCookie(e):t=this._getSessionStorage(e)||this._getLocalStorage(e)||this._getUserData(e);if(!t&&t!=0||typeof t=="undefined")t="";return t}catch(n){return""}},setData:function(e,t,n){try{this.getCookieEnabled()?this._setCookie(e,t,n):n?this._setLocalStorage(e,t,n):this._setSessionStorage(e,t)}catch(r){}}};var _jc_spv_stat;_jc_spv_stat||_jc_f_init(),_jc_spv_stat=1,window._adref||(function(){function o(){return e.parse(window.location.href).query[t]||""}function u(){var t="";if(!document.referrer)return t;var n=e.parse(document.referrer);for(var r=0;r<s.length;r++){var i=s[r];if(i.hostname.test(n.hostname)){t=n.query[i.keyword];break}}return t}function a(e,t,n){n.raw||(t=encodeURIComponent(String(t)));var r=e+"="+t;n.expires&&(r+="; expires="+n.expires.toGMTString()),n.domain&&(r+="; domain="+n.domain),n.path&&(r+="; path="+n.path),document.cookie=r}function f(e,t){t=t||{},t.expires=new Date(0),a(e,"",t)}function l(){var e=o();if(!e)return;var t=u();if(/\.17173\.com$/.test(window.location.hostname))a(n,e,i),t?a(r,t,i):f(r,i);else{var s="http://passport.17173.com/adref_cross.php";s+="?"+n+"="+e,s+="&"+r+"="+t;var l=document.createElement("div");l.style.display="none",l.innerHTML='<iframe src="'+s+'" width="0" height="0" frameborder="0" border="0" scrolling="no"></iframe>',document.body.appendChild(l)}}var e=function(){function t(e){return Object.prototype.toString.apply(e)==="[object Array]"}var e=/^([^\:]+)\:\/\/([^\:\/\?]+)(\:\d+)?(\/[^\?]*)?(\?.*)?$/;return{parse:function(n){var r=n.match(e);if(!r)return null;var i=r[2],s={};if(r[5]){var o=r[5].substr(1).split("&");for(var u=0;u<o.length;u++){var a=o[u].split("="),f=a[0],l=a[1];s.hasOwnProperty(f)?t(s[f])?s[f].push(l):s[f]=[s[f],l]:s[f]=l}}return{hostname:i,query:s}}}}(),t="adref",n="ad_analysis_source",r="ad_analysis_keyword",i={domain:".17173.com",path:"/",expires:new Date((new Date).getTime()+216e5),raw:!0},s=[{hostname:/\.baidu\.com/,keyword:"wd"},{hostname:/\.sogou\.com/,keyword:"query"},{hostname:/\.360\.cn/,keyword:"q"},{hostname:/\.google\.com/,keyword:"q"},{hostname:/\.soso\.com/,keyword:"w"}];l()}(),window._adref=1)