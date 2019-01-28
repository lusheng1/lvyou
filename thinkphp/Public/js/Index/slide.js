/**
 * 左右滑动插件
 * @author anysoft-wuhua
 */
(function($){

    function _Silder(ele,options){
        var _ = this;
        _.ele = $(ele);
        _.options = $.extend({}, _Silder.options,options );
        //查找对象
        _.ul = _.ele.find(_.options.items );
        _.li = _.ul.find(_.options.item);

        _.i = 0;//当前选中下标
        _.s = _._item_size();//在内容复制之前将item个数保存
        _.timer = 0;

        //自动调整大小
        if(_.options.fluid ){
            $(window).resize(function(){
                _._set_slider_size();
            }).resize();
        }
        //创建上下一页按钮
        if(_.options.arrows ){
            //alert("ASDF");
            _._create_arrows();
        }else if(_.options._prev || _.options._next  ){
            //alert(_.options._prev);
            if(typeof _.options._prev == 'string'){
                _.options._prev = $(_.options._prev);
            }
            if(typeof _.options._next == 'string'){
                _.options._next = $(_.options._next);
            }


            _.options._prev .click(function(){
                _.prev();
            });
            _.options._next .click(function(){
                _.next();
            });
        }
        //创建小点
        if(_.options.dots ){
            _._create_dots();
        }


        //程序初始化
        _._init();

    }
    _Silder.prototype = {
        _init:function(){
            this._set_slider_size();
            this.move( this.i );
            //动画完成回调函数
            if($.isFunction( this.options.oninit ) ){
                this.options.oninit.call(this);
            }
            return this;
        }
        //上一页
        ,prev:function(){
            this.move( this._prev_i() );
        }
        //下一个
        ,next:function(){
            this.move( this._next_i() );
        }
        //移动到第几个
        ,move:function(i){
            this.options.complete = false;
            this.options.starting = true;
            //设置尺寸
            this._set_slider_size();
            this.i = i;
            //设置选中点
            this._set_active_dot();

            var _this = this;
            clearTimeout( this.timer );

            var attr = 'marginLeft';
            var val = '-'+(this.i*this._ele_size().w)+'px';
            if(this.options.type=='td'){
                attr = 'marginTop';
                val = '-'+(this.i*this._ele_size().h)+'px';
            }
            var css = {};
            css[attr] =val;
            this.ul.stop();
            //开始移动
            this.ul.animate( css ,this.options.speed,this.options.easing , function(){
                //alert("ASDF");
                _this.options.starting = false;
                _this.options.complete = true;
                if(_this.options.autoplay){
                    _this.timer = setTimeout(function(){
                        //alert("ASDF");
                        _this.next();
                    },_this.options.delay);
                }

                //动画完成回调函数
                if($.isFunction( _this.options.oncomplete ) ){
                    _this.options.oncomplete.call(_this);
                }
            });


        }
        //设置活动点
        ,_set_active_dot:function(){
            if(this.options.dots){
                this.options._dots.removeClass('active');
                this.options._dots.eq(this.i).addClass('active');
            }
        }
        //下一个index
        ,_next_i:function(){
            var i = this.i + 1;
            if(i>=this.s){
                i = 0;
            }
            return i;
        }//下一个index
        ,_prev_i:function(){
            var i = this.i - 1;
            if(i<0){
                i = this.s - 1;
            }
            return i;
        }
        //获取到尺寸
        ,_ele_size:function(){
            return {
                w: this.ele.width()
                ,h: this.ele.height()
            };
        }
        //获取item 个数
        ,_item_size:function(){
            return this.li.size();
        }
        //设置项目大小
        ,_set_slider_size:function(){
            var size = this._ele_size();

            //设置item大小
            this.li.width( size.w );
            this.li.height( size.h );

            //设置items 大小
            if(this.options.type == 'td'){
                this.ul.width( size.w   );
                this.ul.height(  this._item_size() * size.h );
            }else{
                this.ul.width( this._item_size() * size.w   );
                this.ul.height( size.h );
            }
        }
        //创建上下页按钮
        ,_create_arrows:function(){
            var _this = this;

            if( ! this.options._prev || ! this.options._next ){
                this.ele.append('<div class="arrow prev">'+ this.options.prev +'</div>');//上
                this.ele.append('<div class="arrow next">'+ this.options.next +'</div>');//下
                this.options._prev = $('.prev',this.ele);
                this.options._next = $('.next',this.ele);
            }else{
                //alert(this.options._prev);
                if(typeof this.options._prev == 'string'){
                    this.options._prev = $(this.options._prev);
                }
                if(typeof this.options._next == 'string'){
                    this.options._next = $(this.options._next);
                }
            }


            //为按钮添加事件监听
            this.options._prev.click(function(){
                _this.prev();
            });
            this.options._next.click(function(){
                _this.next();
            });
        }
        //创建切换点
        ,_create_dots:function(){
            var _this = this;
            if( ! this.options._dots ){
                var dots = $('<div class="dots"></div>');
                for(var i=0;i<this.s ;i++){
                    dots.append( '<span i="'+i+'">'+(i+1)+'</span>' );
                }
                this.ele.append(dots);
                this.options._dots = dots.find('>span');
            }else if(typeof this.options._dots =='string'){
                ///alert("ADF");
                this.options._dots = $(this.options._dots);
            }
           /// alert(typeof this.options._dots);
            this.options._dots[this.options.dots_event](function(){
                _this.move( $(this).attr('i') );
            });
        }


    };



    // 成为jquery插件
    $.fn.slider = function(options){

        this.each(function(){

            //alert(  );
            var _options = $.extend({},$(this).data(),options);
            //alert(options._dots);
            if(! $(this).data('slider') ){
                $(this).data('slider',new _Silder( this,_options ) );
            }
        });
    }
    _Silder.ef  = function(){};

    //基础配置
    _Silder.options = {
        speed: 500,     //动画持续时间
        delay: 3000,    //动画间隔时间
        init: 0,        // 初始化等待时间
        pause: true,      //悬浮时暂停执行
        loop: true,       // 循环执行
        keys: false,        // 快捷键切换
        dots: false,        //显示选择点
        dots_event: 'click', //点切换事件
        arrows: false,      //显示上一页下一页按钮
        prev: '&larr;', // 上一页文本
        next: '&rarr;', // 下一页文本
        fluid: true,       // 是否自动调整大小
        starting: false,    //是否在运行状态
        complete: false,    //动画是否完成
        items: '>ul',   // 滑动内容元素
        item: '>li',    // 滑动item
        easing: 'swing',// 动画方式  使用的擦除效果的名称(需要插件支持).默认jQuery提供"linear" 和 "swing".
        autoplay: true , // 自动运行
        direction: 'left'// 滑动方向 right
        ,type: 'lr'     //滑动框类型 lr 左右结构  td 上下结构
        ,oncomplete: _Silder.ef //动画完成回调
        ,oninit: _Silder.ef //初始化完成回调
        ,onchange: _Silder.ef //切换后调用
        //选择器
        ,_dots : null
        ,_prev : null
        ,_next : null

    };

})(jQuery);