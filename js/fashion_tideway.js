//收藏按钮
$('.block2').delegate('.js-co','click',function(){
	_this = $(this);
	if ((_this).hasClass('active')){
		_this.removeClass('active');
		_this.removeClass('fa-heart');
		_this.addClass('fa-heart-o');
	}
	else {
		_this.addClass('active');
		_this.removeClass('fa-heart-o');
		_this.addClass('fa-heart');
	}
});

//换页
$('.block2 .page-wrap').delegate('.page-btn','click',function(){
	_this = $(this);
	$('.item-wrap').removeClass('active');
	$('.item-wrap[type="'+_this.attr('type')+'"]').addClass('active');
});

$('.block2 .page-next').click(function(){
	getLength = $('.page-btn').length;
	getIndex = parseInt($('.item-wrap.active').attr('type'),10);
	if(getIndex == getLength) {
		return;
	}
	$('.item-wrap').removeClass('active');
	$('.item-wrap[type="'+ (getIndex + 1) +'"]').addClass('active');
});

$('.block2 .page-pre').click(function(){
	getIndex = parseInt($('.item-wrap.active').attr('type'),10);
	if(getIndex == 1) {
		return;
	}
	$('.item-wrap').removeClass('active');
	$('.item-wrap[type="'+ (getIndex - 1) +'"]').addClass('active');
});


//侧栏hover
$('.block2').delegate('.head-title','mouseenter',function(){
	_this = $(this).find('span');
	_this.text('更多内容');
	_this.animate({left:'40%'},300);
});
$('.block2').delegate('.head-title','mouseleave',function(){
	_this = $(this).find('span');
	_this.text('精彩导读');
	_this.animate({left:'0'},300);
});

//分享按钮
$('.detail-bottom .share-btn').click(function(){
	$(this).parent('a').find('.share-wrap').show();
});
$('.detail-bottom .fa.fa-close').click(function(){
	$(this).parent('.share-wrap').hide();
});