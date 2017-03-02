﻿//banner hovber
$('.block1').delegate('.mask-text','mouseenter',function(){
	_this = $(this);
	$(this).find('span').css('color','#f60');
	$('.block1 .mask-hid').show();
	if(_this.attr('type')==1) {
		$('.block1 .mask-hid.one').hide();
	}
	else if(_this.attr('type')==2) {
		$('.block1 .mask-hid.two').hide();
	}
	else if(_this.attr('type')==3) {
		$('.block1 .mask-hid.three').hide();
	}
	else if(_this.attr('type')==4) {
		$('.block1 .mask-hid.four').hide();
	}
});
$('.block1').delegate('.mask-text','mouseleave',function(){
	_this = $(this);
	$(this).find('span').css('color','#fff');
	$('.block1 .mask-hid').hide();
});

//明星风尚侧栏
$('.right-all a').mouseover(function(){
	$(this).animate({fontSize:'18px'},200);
});
$('.right-all a').mouseout(function(){
	$(this).animate({fontSize:'14px'},200);
});

$('.right-img img').mouseover(function(){
	$(this).css('opacity','0.5');
	$('.block2 .right-text').show();
});
$('.right-img img').mouseout(function(){
	$(this).css('opacity','1');
	$('.block2 .right-text').hide();
});


//明星风尚主体
$('.main-card').mouseover(function(){
	$(this).find('.img-text').css('color','#f60');
});
$('.main-card').mouseout(function(){
	$(this).find('.img-text').css('color','#000');
});

//娱乐新闻hover
$('.block3 .mask-text').mouseover(function(){
	$(this).find('span').css('color','#f60');
	$(this).css('margin','15px');
	$(this).css('box-shadow','3px 3px 16px #000');
});
$('.block3 .mask-text').mouseout(function(){
	$(this).find('span').css('color','#fff');
	$(this).css('margin','');
	$(this).css('box-shadow','');
});


//bottom hovber
$('.block4 .mask-text').mouseover(function(){
	$(this).find('span').css('color','#f60');
});
$('.block4 .mask-text').mouseout(function(){
	$(this).find('span').css('color','#fff');
});


//瀑布流
window.onload = function(){
	window.onscroll = null ;
	var navTop;
	var winHeight = $(window).height();
	navTop = $("#nav-fixed").offset().top;
	navInfoLeft =  document.getElementById('nav-fixed').getBoundingClientRect().left;

	window.onscroll = function() {
		
		
		var anchorTop, navInfoTop,navInfoTop2, navInfoTop3,navInfoTop4 ;
		navInfoTop = $('#nav-fixed').offset().top;
		anchorTop = document.documentElement.scrollTop || document.body.scrollTop;
		navInfoTop2 = $('.block2 .subject-top-title').offset().top-anchorTop;
		navInfoTop3 = $('.block3 .subject-top-title').offset().top-anchorTop;
		// console.log('1 '+ navInfoTop2);
		// console.log('2 '+ navInfoTop3);
		// console.log('3 '+ navInfoTop4);
		if (navInfoTop2 < winHeight*0.7){
			$('.js-pb').fadeIn(1000,function(){});
			$('.js-pb').css('display','block');
			setTimeout(function(){
				$('.js-pb2').fadeIn(1000,function(){});
				$('.js-pb2').css('display','block');	
			},500);
		}

		// if (navInfoTop3 < winHeight*0.62){//400
		// }

		if (anchorTop >= navInfoTop && anchorTop > navTop) {
			$('#nav-fixed').css("left", navInfoLeft + "px");
			$('.back-top').fadeIn();//显示回到顶部
			return $('#nav-fixed').addClass("affix").css("top", 0);
		} else {
			$('.back-top').fadeOut();//隐藏回到顶部
			return $('#nav-fixed').removeClass("affix");
		}

		
	};

	window.onscroll();
}
