$(function() {
	var sWidth = $("#focus").width(); //��ȡ����ͼ�Ŀ�ȣ���ʾ�����
	var len = $("#focus ul li").length; //��ȡ����ͼ����
	var index = 0;
	var eq = 0;
	var picTimer;
	
	//���´���������ְ�ť�Ͱ�ť��İ�͸������������һҳ����һҳ������ť
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span></span>";
	}
	$("#focus").append(btn);
alert(11112);
	//ΪС��ť�����껬���¼�������ʾ��Ӧ������
	$("#focus .btn span").mouseenter(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseenter");


	//����Ϊ���ҹ�����������liԪ�ض�����ͬһ�����󸡶�������������Ҫ�������ΧulԪ�صĿ��
	$("#focus ul").css("width",sWidth * (len));
	
	//��껬�Ͻ���ͼʱֹͣ�Զ����ţ�����ʱ��ʼ�Զ�����
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {

			showPics(eq);
			eq++;
			if(eq == len) {eq = 0;}
		},4000); //��4000�����Զ����ŵļ������λ������
	}).trigger("mouseleave");
	
	//��ʾͼƬ���������ݽ��յ�indexֵ��ʾ��Ӧ������
	function showPics(index) { //��ͨ�л�
		var nowLeft = -index*sWidth; //����indexֵ����ulԪ�ص�leftֵ
		$("#focus ul").stop(true,false).animate({"left":nowLeft},300); //ͨ��animate()����ulԪ�ع������������position
		$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //Ϊ��ǰ�İ�ť�л���ѡ�е�Ч��
	}
	
	$('.show_block').each(function(){
		index = $(this).index();
		if((index+1)%4==0){
			$(this).css('margin-right','0px');
			}
		
		})
	
});