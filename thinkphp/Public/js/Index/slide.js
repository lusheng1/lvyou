/**
 * ���һ������
 * @author anysoft-wuhua
 */
(function($){

    function _Silder(ele,options){
        var _ = this;
        _.ele = $(ele);
        _.options = $.extend({}, _Silder.options,options );
        //���Ҷ���
        _.ul = _.ele.find(_.options.items );
        _.li = _.ul.find(_.options.item);

        _.i = 0;//��ǰѡ���±�
        _.s = _._item_size();//�����ݸ���֮ǰ��item��������
        _.timer = 0;

        //�Զ�������С
        if(_.options.fluid ){
            $(window).resize(function(){
                _._set_slider_size();
            }).resize();
        }
        //��������һҳ��ť
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
        //����С��
        if(_.options.dots ){
            _._create_dots();
        }


        //�����ʼ��
        _._init();

    }
    _Silder.prototype = {
        _init:function(){
            this._set_slider_size();
            this.move( this.i );
            //������ɻص�����
            if($.isFunction( this.options.oninit ) ){
                this.options.oninit.call(this);
            }
            return this;
        }
        //��һҳ
        ,prev:function(){
            this.move( this._prev_i() );
        }
        //��һ��
        ,next:function(){
            this.move( this._next_i() );
        }
        //�ƶ����ڼ���
        ,move:function(i){
            this.options.complete = false;
            this.options.starting = true;
            //���óߴ�
            this._set_slider_size();
            this.i = i;
            //����ѡ�е�
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
            //��ʼ�ƶ�
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

                //������ɻص�����
                if($.isFunction( _this.options.oncomplete ) ){
                    _this.options.oncomplete.call(_this);
                }
            });


        }
        //���û��
        ,_set_active_dot:function(){
            if(this.options.dots){
                this.options._dots.removeClass('active');
                this.options._dots.eq(this.i).addClass('active');
            }
        }
        //��һ��index
        ,_next_i:function(){
            var i = this.i + 1;
            if(i>=this.s){
                i = 0;
            }
            return i;
        }//��һ��index
        ,_prev_i:function(){
            var i = this.i - 1;
            if(i<0){
                i = this.s - 1;
            }
            return i;
        }
        //��ȡ���ߴ�
        ,_ele_size:function(){
            return {
                w: this.ele.width()
                ,h: this.ele.height()
            };
        }
        //��ȡitem ����
        ,_item_size:function(){
            return this.li.size();
        }
        //������Ŀ��С
        ,_set_slider_size:function(){
            var size = this._ele_size();

            //����item��С
            this.li.width( size.w );
            this.li.height( size.h );

            //����items ��С
            if(this.options.type == 'td'){
                this.ul.width( size.w   );
                this.ul.height(  this._item_size() * size.h );
            }else{
                this.ul.width( this._item_size() * size.w   );
                this.ul.height( size.h );
            }
        }
        //��������ҳ��ť
        ,_create_arrows:function(){
            var _this = this;

            if( ! this.options._prev || ! this.options._next ){
                this.ele.append('<div class="arrow prev">'+ this.options.prev +'</div>');//��
                this.ele.append('<div class="arrow next">'+ this.options.next +'</div>');//��
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


            //Ϊ��ť����¼�����
            this.options._prev.click(function(){
                _this.prev();
            });
            this.options._next.click(function(){
                _this.next();
            });
        }
        //�����л���
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



    // ��Ϊjquery���
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

    //��������
    _Silder.options = {
        speed: 500,     //��������ʱ��
        delay: 3000,    //�������ʱ��
        init: 0,        // ��ʼ���ȴ�ʱ��
        pause: true,      //����ʱ��ִͣ��
        loop: true,       // ѭ��ִ��
        keys: false,        // ��ݼ��л�
        dots: false,        //��ʾѡ���
        dots_event: 'click', //���л��¼�
        arrows: false,      //��ʾ��һҳ��һҳ��ť
        prev: '&larr;', // ��һҳ�ı�
        next: '&rarr;', // ��һҳ�ı�
        fluid: true,       // �Ƿ��Զ�������С
        starting: false,    //�Ƿ�������״̬
        complete: false,    //�����Ƿ����
        items: '>ul',   // ��������Ԫ��
        item: '>li',    // ����item
        easing: 'swing',// ������ʽ  ʹ�õĲ���Ч��������(��Ҫ���֧��).Ĭ��jQuery�ṩ"linear" �� "swing".
        autoplay: true , // �Զ�����
        direction: 'left'// �������� right
        ,type: 'lr'     //���������� lr ���ҽṹ  td ���½ṹ
        ,oncomplete: _Silder.ef //������ɻص�
        ,oninit: _Silder.ef //��ʼ����ɻص�
        ,onchange: _Silder.ef //�л������
        //ѡ����
        ,_dots : null
        ,_prev : null
        ,_next : null

    };

})(jQuery);