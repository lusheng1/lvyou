/*! passport_17173_com-2.3.6 2014-04-22 17:40:08 */
artDialog.defaults={content:'<div class="d-loading"><span>loading..</span></div>',title:"\u63d0\u793a",button:null,ok:null,cancel:null,initialize:null,beforeunload:null,okValue:"\u786e\u5b9a",cancelValue:"\u53d6\u6d88",width:"auto",height:"auto",padding:"20px 25px",skin:null,time:null,visible:!0,follow:null,lock:!0,fixed:!0,zIndex:1987},function(a){a.alert=a.dialog.alert=function(b,c){return a.dialog({id:"Alert",title:"\u63d0\u793a",fixed:!0,lock:!0,content:b,ok:!0,beforeunload:c})},a.confirm=a.dialog.confirm=function(b,c,d){return a.dialog({id:"Confirm",fixed:!0,lock:!0,content:b,ok:c,cancel:d})},a.prompt=a.dialog.prompt=function(b,c,d){d=d||"";var e;return a.dialog({id:"Prompt",fixed:!0,lock:!0,content:['<div style="margin-bottom:5px;font-size:12px">',b,"</div>","<div>",'<input type="text" class="d-input-text" value="',d,'" style="width:18em;padding:6px 4px" />',"</div>"].join(""),initialize:function(){e=this.dom.content.find(".d-input-text")[0],e.select(),e.focus()},ok:function(){return c&&c.call(this,e.value)},cancel:function(){}})},a.tip=a.dialog.tip=function(a,b,c){var d=art.dialog({id:"Tip",fixed:!0,lock:!0,content:a,button:[{id:"button",value:"\u786e\u5b9a ("+c+")",callback:b}],cancel:function(){clearInterval(d.timer)}}),e=c;return d.timer=setInterval(function(){e--,d.button({id:"button",value:"\u786e\u5b9a ("+e+")"}),0===e&&(clearInterval(d.timer),d.button({id:"button",value:"\u786e\u5b9a"}),d.close(),b&&b())},1e3),d},a.dialog.prototype.shake=function(){var a=function(a,b,c){var d=+new Date,e=setInterval(function(){var f=+new Date-d,g=f/c;g>=1?(clearInterval(e),b(g)):a(g)},13)},b=function(c,d,e){var f=arguments[3];void 0===f&&(f=6,e/=f);var g=c.style,h=parseInt(g.marginLeft)||0;a(function(a){c.style.marginLeft=h+(d-h)*a+"px"},function(){0!==f&&b(c,1===f?0:1.3*(d/f-d),e,--f)},e)};return function(){return b(this.dom.wrap[0],40,600),this}}();var b=function(){var a=this,b=function(b){var c=a[b];a[b]=function(){return c.apply(a,arguments)}};b("start"),b("over"),b("end")};b.prototype={start:function(b){return a(document).bind("mousemove",this.over).bind("mouseup",this.end),this.x=b.clientX,this.y=b.clientY,this.onstart(b.clientX,b.clientY),!1},over:function(a){return this.onover(a.clientX-this.x,a.clientY-this.y),!1},end:function(b){return a(document).unbind("mousemove",this.over).unbind("mouseup",this.end),this.onend(b.clientX,b.clientY),!1}};var c=a(window),d=a(document),e=document.documentElement,f=!("minWidth"in e.style),g=!f&&"onlosecapture"in e,h="setCapture"in e,i=function(){return!1},j=function(a){var e,f,j,k,l=new b,m=artDialog.focus,n=m.dom,o=n.wrap,p=n.title,q=n.main,r=o[0],s=p[0],t=q[0],u=r.style,v=t.style,w=a.target===n.se[0]?!0:!1,x="fixed"===r.style.position,y=x?0:d.scrollLeft(),z=x?0:d.scrollTop(),A=c.width()-r.offsetWidth+y,B=c.height()-r.offsetHeight+z;l.onstart=function(){w?(e=t.offsetWidth,f=t.offsetHeight):(j=r.offsetLeft,k=r.offsetTop),d.bind("dblclick",l.end).bind("dragstart",i),g?p.bind("losecapture",l.end):c.bind("blur",l.end),h&&s.setCapture(),o.addClass("d-state-drag"),m.focus()},l.onover=function(a,b){if(w){var c=a+e,d=b+f;u.width="auto",v.width=Math.max(0,c)+"px",u.width=r.offsetWidth+"px",v.height=Math.max(0,d)+"px"}else{var g=Math.max(y,Math.min(A,a+j)),h=Math.max(z,Math.min(B,b+k));u.left=g+"px",u.top=h+"px"}},l.onend=function(){d.unbind("dblclick",l.end).unbind("dragstart",i),g?p.unbind("losecapture",l.end):c.unbind("blur",l.end),h&&s.releaseCapture(),o.removeClass("d-state-drag")},l.start(a)};a(document).bind("mousedown",function(a){var b=artDialog.focus;if(b){var c=a.target,d=b.config,e=b.dom;return d.drag!==!1&&c===e.title[0]||d.resize!==!1&&c===e.se[0]?(j(a),!1):void 0}})}(this.art||this.jQuery);