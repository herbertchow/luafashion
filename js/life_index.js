//初始化数据
window.onload = function(){
	$('.block3 .title').hide();
	$('.block3 .title[type="1"]').show();
	imgHeight = $('.right-all-img img').height();
	imgWidth = $('.right-all-img img').width();
	$('.right-all-img').css('max-height',imgHeight+30);
}


//上部侧栏img
$('.right-all-img img').mouseover(function(){
	$(this).css('max-width',imgWidth+20);
	$(this).height(imgHeight+10);
});  
$('.right-all-img img').mouseout(function(){
	$(this).css('max-width',imgWidth);
	$(this).height(imgHeight);
});  


//中部切换
$('.block1').delegate('.main-nav span','click',function(){
	_this = $(this);
	if ((_this).hasClass('active')){
		return;
	}
	else {
		$('.main-nav span').removeClass('active');
		_this.addClass('active');
		$('.main-change').css('display','none');
		$('.main-change[type="'+_this.attr('type')+'"]').css('display','block');
	}

});

//旅行hover
$('.block2').delegate('.imgall','mouseover',function(){
	_this = $(this).find('.text-wrap');
	_this.animate({bottom:"0"},300);

});
$('.block2').delegate('.imgall','mouseout',function(){
	_this = $(this).find('.text-wrap');
	_this.animate({bottom:"-50px"},300);
	
});

//健康hover
$('.block3').delegate('img','mouseover',function(){
	_this = $(this);
	$('.block3 img').removeClass('active');
	_this = $(this).addClass('active');
	$('.block3 .title').hide();
	$('.block3 .title[type="'+_this.attr('type')+'"]').fadeIn();
});

//情感响应
$('.right-wrap').delegate('a','mouseover',function(){
	$(this).animate({left:"20px"},300);
});
$('.right-wrap').delegate('a','mouseout',function(){
	$(this).animate({left:"0px"},300);
});

//banner hover
$('.block1 .banner-all').mouseenter(function(){
	$('.block1 .banner-mask').show();
	$('.block1 .banner-title').css('background','transparent');
	$('.block1 .banner-title').animate({bottom:"120px"},300);
});  

$('.block1 .banner-all').mouseleave(function(){
	$('.block1 .banner-mask').hide();
	$('.block1 .banner-title').animate({bottom:"0"},300);
	$('.block1 .banner-title').css('background','url(../../images/x.png) repeat-x left bottom');
	$('.block1 .banner-title').css('background-size','contain');
});  
