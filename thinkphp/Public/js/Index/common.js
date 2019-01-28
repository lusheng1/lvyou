$(function(){
    try{
        $('.slider').each(function () {
            var _this = this;
            if( $(".loading-mask", $(_this)).size() ){
                $("img:eq(0)", $(this)).load(function () {
                    $("img", $(_this)).css({'width': '100%', 'height': '100%'});
                    $(_this).slider({
                        arrows: true,
                        dots: true
                    });
                    $(".loading-mask", $(_this)).fadeOut();
                });
                $("img", $(this)).each(function () {
                    var _src = $(this).attr('_src');
                    if (_src) {
                        $(this).attr('src', _src);
                    }
                });
            }else{
                //var delay = 3000;

                var options = {};
                 /*if($(_this).data('arrows')){
                    options.arrows = true;
                }

                if($(_this).data('dots')){
                    options.dots = true;
                }

                if($(_this).data('delay')){
                    options.delay = $(_this).data('delay');
                }
                */

                $(_this).slider(options);
            }

        });
    }catch (e){
        console.log( e.message );
    }



    try{
        //流加载分享
        $(window).scroll(function(){
            if($("#share_box").size() && AnyCms.AjaxLoadShare ){
                var sbt =  $("#share_box").offset().top  ;
                var wst = $("body").scrollTop()+$(window).height();
                if(sbt<wst){
                    load_share();
                }
            }
        });
    }catch (e){
        console.log( e.message );
    }

    try{
        //ajax btn
        $(".ajax-btn").click(function(){
            //alert("ASDF");
            try{
                var href = $(this).data('href');
                $.ajax({
                    url: href,
                    type: 'get',
                    success:function(msg){
                        try{
                            if(typeof msg=='object'){
                                var obj = msg;
                            }else{
                                var obj = eval("("+msg+")");
                            }
                            layer.msg(msg.info, 2,msg.status=='1'?9:8 );
                        }catch (e){
                            document.write(msg);
                        }
                    }
                });
            }catch(e){
                console.log( e.message );
            }
            return false;
        });
    }catch(e){
        console.log( e.message );
    }





    try{
        $(".ajax-loader").each(function(){
            //alert("ASDF");
            try{
                var href = $(this).data('href');
                $.get(href);
            }catch(e){
                console.log( e.message );
            }
        });
    }catch (e){
        console.log( e.message );
    }


    //相册层
    try{
        //创建相册层对象
        var album = $('<div></div>');
        album.hide();
        album.addClass('album-body');
        //评论框
        var commend_box = $('<div class="album-commend-box"><iframe id="share_comment" src="" frameborder="0" width="100%" height="100%" style="width: 100%;height: 100%;"></iframe></div>');
        //相册框
        var photos_box =  $('<div class="album-photos-box"><div class="album-photo-box"></div><div class="arrow prev" onclick="photo_slider(-1)">←</div><div class="arrow next"  onclick="photo_slider(1)">←</div></div>');

        album.append(commend_box);
        album.append(photos_box);


        $("body").append( album );
        var album_layer_index = false;
        $('.album').live('click',function(){
                load_share_comment();
                var album = $('.album-body');
                album.height( $(window).height()-100 );
                album.width( 1000 );
                $(".album-photo-box").height( album.height()- $(".album-photo-thumbnail").height() );
                $(".album-photo-box").data('share',$(this).data('share') );
                _show_photo();
                if(!album_layer_index){
                    album_layer_index = $.layer({
                        type: 1,
                        shade: [0.8,'#000'],
                        area: ['auto', 'auto'],
                        title: false,
                        border: [0],
                        closeBtn: [0, false],
                        shadeClose: true,
                        fadeIn: 300,
                        bgcolor: 'none',
                        page: {dom : '.album-body'},
                        end:function(){
                            album_layer_index = false;
                        }
                    });
                }
        });
    }catch (e){
        console.log( e.message );
    }



    try{
        $("img[_src]").each(function(){
            var _this = $(this);
            var src = _this.attr('src');
            var _src = _this.attr('_src');
            if(_src != src && _src){
                _this.load(function(){
                    _this.removeAttr('_src');
                    $(this).fadeOut(0);
                    $(this).fadeIn(1000);
                });
                _this.attr('src',_src);
            }else{
                _this.removeAttr('_src');
            }
        });

    }catch (e){
        console.log( e.message );
    }
});



//--------------------相册 开始-----------------------------------------
var _photo_prev = false,_photo_next = false;
function _show_photo(){
    var share =  $(".album-photo-box").data('share');
    _photo_prev = false;
    _photo_next = false;
    var _photo_this = false;

    $(".thumb").each(function(){
        if(_photo_this && !_photo_next){
            _photo_next = $(this);
        }
        if(share == $(this).data('share')){
            $(".album-photo-box").html('<img style="visibility: hidden;" src="'+$(this).data('thumbnail')+'" />');
            _set_photo_pos_to_center();
            $(".album-photo-box").find('>img').load(function(){
                $(this).fadeOut(0);
                var bw = $(".album-photo-box").width();
                var bh = $(".album-photo-box").height();
                var w = $(this).width();
                var h = $(this).height();
                var wp = w/bw;
                var hp = h/bh;
                if( wp>1 || hp>1 ){
                    if( wp>hp ){
                        $(this).width( w/wp );
                        $(this).height( h/wp );
                    }else{
                        $(this).width( w/hp );
                        $(this).height( h/hp );
                    }
                }
                _set_photo_pos_to_center();
                $(this).css({'visibility':'visible'})
                $(this).fadeIn(1000);
            }).attr('src', $(this).data('src') );

            $(".album-photo-thumbnail-warp .on").removeClass('on');
            $(this).parent().addClass('on');
            _photo_this = true;
           // return;
        }
        if(!_photo_this)
            _photo_prev = $(this);

    });
}
var _load_share_comment_time = 0;
function load_share_comment(){
    if(!_load_share_comment_time)
        clearTimeout(_load_share_comment_time);
    _load_share_comment_time=setTimeout('_load_share_comment()',250);
}

function _load_share_comment(){
    $("#share_comment").attr('src',AnyCms.IframeTravelComment+'?&id='+$(".album-photo-box").data('share') );
}
/**
 * 设置图片居中
 * @private
 */
function _set_photo_pos_to_center(){
    var bw = $(".album-photo-box").width();
    var bh = $(".album-photo-box").height();
    var img = $(".album-photo-box").find('>img');
    var w = img.width();
    var h = img.height();
    if(bw>=w && bh>=h){
        img.css({'marginLeft': ((bw-w)/2)+'px','marginTop': ((bh-h)/2)+'px' })
    }
}

function photo_slider( dir ){
    if(dir<0 && (_photo_prev || !layer.msg('没有了',1) )  ){
        _photo_prev.click();
    }else if(dir>0 &&  (_photo_next || !layer.msg('没有了',1) )  ){
        _photo_next.click();
    }
}



//--------------------相册 结束-----------------------------------------


//--------------------瀑布流 开始-----------------------------------------
var page_load_share = 1;
var run_load_share = false;
function load_share(){
    if(!run_load_share && page_load_share!='end'){
        layer.load();
        run_load_share = true;
        $.getJSON(AnyCms.AjaxLoadShare,"p="+page_load_share,function(list){
            layer.closeLoad();
            if(!list){
                page_load_share = 'end';
                layer.msg("加载完成",1,-1);
                return false;
            }
            var load_count = 0;
            var _load_count = 0;
            function Load(){
                if(load_count == _load_count){
                    //整理瀑布
                    set_share_box();
                    page_load_share++;
                    run_load_share = false;

                }
            }
            for(var i in list){
                load_count ++;
                var travel = list[i];
                var item = '<div class="travel-item"   >';
                item += '<a class="thumb-a">' +
                    '<img class="thumb album" data-share="' + travel.tid +'" data-thumbnail="'+travel.thumbnail+'" data-src="'+travel.src_thumb+'" src="'+travel._thumb+'">'+
                    '</a>';
                item += '<div class="travel-title">' + travel.title +'</div>';
                item += '<div class="travel-title"><i class="icon-heart">&nbsp;</i> ' + travel.zan +'</div>';
                item += '<div class="travel-author"><div class="avatar"><img src="'+(travel.avatar>0?travel._avatar:AnyCms.PUBLIC+'/Home/img/head.jpg')+'" alt=""/></div>' +
                    '<div class="author-name">' +(travel.nickname!=''?travel.nickname:(travel.treuanme!=''?travel.truename:'匿名'))+  '</div>'+
                    '</div>';

                item += '</div>';
                item = $(item);
                $("#share_box").append( item );
                item.hide(0);
                $('.thumb',item).load(function(){
                    _rand_share_box($(this).parents('.travel-item'));
                    //set_share_box();
                    _load_count++;
                    Load();
                }).error(function(){
                    _rand_share_box($(this).parents('.travel-item'));
                    //set_share_box();
                    _load_count++
                    Load();
                });
            }

        });
    }

}
var set_share_box_time = false;
function set_share_box(){
    if(!set_share_box_time)
        clearTimeout(set_share_box_time);
    set_share_box_time=setTimeout('_set_share_box()',250);
}
function _set_share_box(){
    var tops =[0,0,0,0];
    var i = 0;
    $("#share_box .travel-item").each(function(){
        var item = $(this);
        var k = i%4;
        item.animate({ 'top':tops[k]+'px','left':(k*255)+'px','opacity':'show'},500);
        tops[k] = tops[k] +item.height() + 15;
        i++;

    });
    var max = 0;
    for(var j in tops){
        if(tops[j]>max){
            max = tops[j];
        }
    }
    $("#share_box").height(max);
}
function _rand_share_box(box){
    var top =Math.ceil(  Math.random()*$("#share_box").height()  );
    var left =Math.ceil(  Math.random()*$("#share_box").width() );
    //alert(top);
    box.css('top',top+'px');
    box.css('left',left+'px');
}
//--------------------瀑布流 结束-----------------------------------------