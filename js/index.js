//首页logo动画
$(window).load(function(){
	$('.logo-big,.logo-small').animate({top:"0px"},500);
	$('.logo-big,.logo-small').animate({top:"-30px"},600);
	$('.logo-big,.logo-small').animate({top:"0px"},400);
	$('.logo-big,.logo-small').animate({top:"-10px"},700);
	$('.logo-big,.logo-small').animate({top:"0px"},600);
});

//菜单响应菜单
var navHeight, navTop;
navTop = $("#nav-fixed").offset().top;
navHeight = $("#nav-fixed").height() + parseInt($("#nav-fixed").css("padding-top"), 10) + parseInt($("#nav-fixed").css("padding-bottom"), 10) ;
navInfoLeft =  document.getElementById('nav-fixed').getBoundingClientRect().left;
window.onscroll = function() {
	var anchorTop, navInfoTop, tmp;
	navInfoTop = $('#nav-fixed').offset().top;
	anchorTop = document.documentElement.scrollTop || document.body.scrollTop;
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


//显示二级菜单
$('.collapse-my').delegate('li','mouseover',function(){
	_this = $(this);
	$('.collapse-my .sec-menu').hide();
	
	$('.collapse-my li').children('a[type=2]').text('时装');
	$('.collapse-my li').children('a[type=3]').text('美容');
	$('.collapse-my li').children('a[type=4]').text('男士');
	$('.collapse-my li').children('a[type=5]').text('星姿态');
	$('.collapse-my li').children('a[type=6]').text('生活');
	
	_this.children('.sec-menu').show();
	if(2==_this.children('a:first-child').attr('type')){
		_this.children('a[type=2]').text('FASHION');
	}
	if(3==_this.children('a:first-child').attr('type')){
		_this.children('a[type=3]').text('BEAUTY');
	}
	if(4==_this.children('a:first-child').attr('type')){
		_this.children('a[type=4]').text('MEN');
	}
	if(5==_this.children('a:first-child').attr('type')){
		_this.children('a[type=5]').text('STAR');
	}
	if(6==_this.children('a:first-child').attr('type')){
		_this.children('a[type=6]').text('LIFE');
	}
});

//隐藏二级菜单
$('.collapse-my').delegate('.sec-menu','mouseout',function(){
	_this = $(this);
	_this.hide();
	$('.collapse-my li').children('a[type=2]').text('时装');
	$('.collapse-my li').children('a[type=3]').text('美容');
	$('.collapse-my li').children('a[type=4]').text('男士');
	$('.collapse-my li').children('a[type=5]').text('星姿态');
	$('.collapse-my li').children('a[type=6]').text('生活');
});
$('.navbar.navbar-my ').mouseout(function(){
	$('.collapse-my .sec-menu').hide();
	$('.collapse-my li').children('a[type=2]').text('时装');
	$('.collapse-my li').children('a[type=3]').text('美容');
	$('.collapse-my li').children('a[type=4]').text('男士');
	$('.collapse-my li').children('a[type=5]').text('星姿态');
	$('.collapse-my li').children('a[type=6]').text('生活');
});

//轮播设置
$('#myCarousel,#myCarousel2').carousel({
	interval: 3000, wrap: true,pause: ''
});

//侧栏响应
$('.hot-body').delegate('a','mouseover',function(){
	$(this).animate({left:"20px"},300);
});
$('.hot-body').delegate('a','mouseout',function(){
	$(this).animate({left:"0px"},300);
});

//中部图片hover
$('.block2 .js-main').delegate('a','mouseover',function(){
	$(this).find('p').css('color','#FF4500');
});
$('.block2 .js-main').delegate('a','mouseout',function(){
	$(this).find('p').css('color','#fff');
});

//中部侧栏hover
$('.block2 .card-l').delegate('a','mouseover',function(){
	$(this).find('p').css('color','#bb9a6c');
});
$('.block2 .card-l').delegate('a','mouseout',function(){
	$(this).find('p').css('color','#fff');
});
$('.block2 .card-r').delegate('a','mouseover',function(){
	$(this).find('p').css('color','#bb9a6c');
});
$('.block2 .card-r').delegate('a','mouseout',function(){
	$(this).find('p').css('color','#fff');
});



//中部侧栏
$('.card-title-l').click(function(){
	if($(this).hasClass('.active')){
		return;
	}
	else {
		$('.card-title span').removeClass('active');
		$('.card-title-l').addClass('active');
		$('.card-r').hide();
		$('.card-l').show();	
	}
});
$('.card-title-r').click(function(){
	if($(this).hasClass('.active')){
		return;
	}
	else {
		$('.card-title span').removeClass('active');
		$('.card-title-r').addClass('active');
		$('.card-l').hide();
		$('.card-r').show();	
	}
});

//fashion栏图片交互效果
$('.card-img').delegate('img','mouseover',function(){
	x = $(this).width();
	y = $(this).height();
	$(this).width(x+10);
	$(this).height(y+10);
	$(this).next('.card-img-title').css('color','#FF4500');
});
$('.card-img').delegate('img','mouseout',function(){
	x = $(this).width();
	y = $(this).height();
	$(this).width(x-10);
	$(this).height(y-10);
	$(this).next('.card-img-title').css('color','');
});

// // 美容栏图片切换效果
$('.beauty-img').mouseover(function(){
	$(this).parent().find('.beauty-img-bg img').attr('src',$(this).find('img').attr('src'));
});
$('.beauty-img.yes').mouseout(function(){
	var _this = $(this);
	var getZ = _this.css('z-index');
	_this.animate({top:'100%',opacity:'0'},400,function(){
		_this.css('top','0%');
		_this.css('display','none');
		_this.parent().find('.beauty-img.no').css('display','block');
		_this.parent().find('.beauty-img.no').animate({opacity:'1'},400);
	});
});
$('.beauty-img.no').mouseout(function(){
	var _this = $(this);
	_this.animate({top:'100%',opacity:'0'},400,function(){
		_this.css('top','0%');
		_this.css('display','none');
		_this.parent().find('.beauty-img.yes').css('display','block');
		_this.parent().find('.beauty-img.yes').animate({opacity:'1'},400);
	});
});

//返回顶部
$('.back-top').click(function() {
	$('body').animate({scrollTop:'0'},800);
	document.documentElement.scrollTop=0; 
	document.body.scrollTop=0; 
});

//用户系统
$('.user-name-btn').click(function() {
	$('.user-sub-all').css('display','inline-block');
});
$('.user-clo').click(function() {
	$('.user-sub-all').hide();
});