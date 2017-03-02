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
$('.block5 .get-more').click(function(){
	if('block' == $('.block4 .row.row_2').css('display')) {
		$('.block5 .get-more').text('没有更多内容了');
	}
	$('.block4 .row.row_2').show();
});

//侧栏顶部hover
$('.block2').delegate('.right-one','mouseenter',function(){
	_this = $(this).find('div');
	_this.css('color','#f60');
});
$('.block2').delegate('.right-one','mouseleave',function(){
	_this = $(this).find('div');
	_this.css('color','#444');
});

//侧栏hover
$('.block4 ').delegate('.item-card','mouseenter',function(){
	_this = $(this);
	_this.find('.item-card-mask').show();
	_this.find('.card-text').css('color','#000');
});
$('.block4 ').delegate('.item-card','mouseleave',function(){
	_this = $(this);
	_this.find('.item-card-mask').hide();
	_this.find('.card-text').css('color','#fff');
});

//分享按钮
$('.detail-bottom .share-btn').click(function(){
	$(this).parent('a').find('.share-wrap').show();
});
$('.detail-bottom .fa.fa-close').click(function(){
	$(this).parent('.share-wrap').hide();
});

//banner hovber
$('.block2 .mask-text').mouseover(function(){
	$(this).find('span').css('color','#f60');
});
$('.block2 .mask-text').mouseout(function(){
	$(this).find('span').css('color','#fff');
});