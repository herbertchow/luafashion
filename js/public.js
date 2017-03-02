//首页logo动画
$(window).load(function(){
	$('.logo-big,.logo-small').animate({top:"0px"},500);
	$('.logo-big,.logo-small').animate({top:"-30px"},600);
	$('.logo-big,.logo-small').animate({top:"0px"},400);
	$('.logo-big,.logo-small').animate({top:"-10px"},700);
	$('.logo-big,.logo-small').animate({top:"0px"},600);
});

//导航栏滚动响应
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

//返回顶部
$('.back-top').click(function() {
	$('body').animate({scrollTop:'0'},800);
	document.documentElement.scrollTop=0; 
	document.body.scrollTop=0; 
});

$('.page-next').click(function() {
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