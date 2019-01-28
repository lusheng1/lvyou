//<![CDATA[
function flvPlayer(flv_path, ctxPath, flv_title, flvWidth, flvHeight, autoPlay) {
	flv_title = flv_title || "\u70b9\u51fb\u64ad\u653e\u89c6\u9891";	
	flvWidth  = flvWidth  || 430;
	flvHeight = flvHeight || 380;
	autoPlay  = autoPlay  || 0;
	
	var swfPath = ctxPath.concat("/scripts/player_flv_maxi.swf");
	
	document.write('<object type="application/x-shockwave-flash" data="' + swfPath + '" width="' + flvWidth + '" height="' + flvHeight + '">');
	document.write('<param name="movie" value="' + swfPath + '" />');
	document.write('<param name="allowFullScreen" value="true"  />');
	document.write('<param name="FlashVars" value="flv=' + flv_path + '&amp;title=' + flv_title + '&amp;width=' + flvWidth + '&amp;height=' + flvHeight + '&amp;playercolor=808094&amp;bgcolor1=9293a9&amp;bgcolor2=808094&amp;buttoncolor=dddddd&amp;buttonovercolor=f9bf37&amp;slidercolor1=dddddd&amp;slidercolor2=cccccc&amp;sliderovercolor=f9bf37&amp;loadingcolor=ffff00&amp;showstop=1&amp;showvolume=1&amp;showtime=1&amp;showfullscreen=1&amp;srt=1&amp;autoplay=' + autoPlay + '" />');	
	document.write('</object>');	
}
//]]>
