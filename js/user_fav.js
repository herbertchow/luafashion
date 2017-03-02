//评价按钮
$('.block1 .cancel').click(function(){
	window.location.href="../../index.php";
});

//分享按钮
$('.detail-bottom .share-btn').click(function(){
	$(this).parent('a').find('.share-wrap').show();
});
$('.detail-bottom .fa.fa-close').click(function(){
	$(this).parent('.share-wrap').hide();
});

//收藏按钮
$('.block1').delegate('.js-co','click',function(){
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

$('.block1').delegate('.fav-cancle-btn','click',function(){
	_this = $(this);
	_this.parents('.item-detail').fadeOut();
});