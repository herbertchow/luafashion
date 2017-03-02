//评价按钮
$('.block4 .send').click(function(){
	_this = $(this);
	var getText = $('#cmt').val();
	var getHtml = "<div class='cmt-item'><img class='avatar sub' src='../../images/ava.png'><span class='cmt-text'>"+ getText +"</span><div class='cmt-time'>2016-5-10</div></div>";
	$('#cmt-wrap').prepend(getHtml);
	$('#cmt').val("");
});

//轮换
(function() {
	var imgs, thumbs;
	imgs = $(".image-list").children();
	thumbs = $(".image-list-thumbs").children();
	imgs.hide();
	imgs.eq(0).show();
	imgs.eq(0).addClass('isactive');
	$(".image-item-wrap").click(function() {
		var MarginMiddle, contentHeight, imageItemLeft, imageItemLength, imageItemPositionLeft, imageThumbsLeft, imgHeight, num;
		imgs.removeClass('isactive');
		if ($(this).children().eq(0).hasClass("selected")) {
			return;
		}
		$(".image-item").removeClass("selected");
		$(this).children().eq(0).addClass("selected");
		num = thumbs.index($(this));
		imgs.hide();
		imgs.eq(num).show();
		imgs.eq(num).addClass('isactive');
		contentHeight = $('.image-list ').find('.isactive').height();
		imgHeight = $('.image-list ').find('.isactive').children().eq(0).height();
		MarginMiddle = (contentHeight - imgHeight) / 2;
		$('.image-list ').find('.isactive').children('img').css('margin-top', MarginMiddle + 'px');
		imageItemLeft = $(this).offset().left;
		imageThumbsLeft = $('.image-list-thumbs').offset().left;
		imageItemPositionLeft = parseInt($(this).css('left'));
		imageItemLength = $(".image-item-wrap").length;
		$('.image-text').text($('.image-item.selected').attr('type-text'));
		if (imageItemLeft < (imageThumbsLeft + ($('.image-list-thumbs').width()*0.5))) {
			imageItemPositionLeft = imageItemPositionLeft + ($('.image-list-thumbs').width()*0.13);
		} else {
			imageItemPositionLeft = imageItemPositionLeft - ($('.image-list-thumbs').width()*0.13);
		}
		if (imageItemLength < 8) {
			return;
		}
		if (num === (imageItemLength - 1) && imageItemLeft < (imageThumbsLeft + ($('.image-list-thumbs').width()*0.86))) {
			return;
		}
		if (num === 0 && imageItemLeft > imageThumbsLeft) {
			return;
		}
		return $(".image-item-wrap").animate({
			left: imageItemPositionLeft + 'px'
		}, 100);
	});
	$('.image-gallery-left-btn').click(function() {
	var MarginMiddle, contentHeight, imageItemLeft, imageItemLength, imageItemPositionLeft, imageThumbsLeft, imgHeight, num2, thumbs_this;
	num2 = $('.image-item-wrap .selected').parent().index();
	if (num2 === 0) {
		return;
	}
	thumbs_this = $('.image-item-wrap .selected').parent();
	imgs.removeClass('isactive');
	$('.image-item').removeClass("selected");
	$('.image-item-wrap').eq(num2 - 1).children().eq(0).addClass("selected");
	imgs.hide();
	imgs.eq(num2 - 1).show();
	imgs.eq(num2 - 1).addClass('isactive');
	contentHeight = $('.image-list ').find('.isactive').height();
	imgHeight = $('.image-list ').find('.isactive').children().eq(0).height();
	MarginMiddle = (contentHeight - imgHeight) / 2;
	$('.image-list ').find('.isactive').children('img').css('margin-top', MarginMiddle + 'px');
	imageItemLeft = $('.image-item-wrap .selected').parent().offset().left;
	imageThumbsLeft = $('.image-list-thumbs').offset().left;
	imageItemPositionLeft = parseInt($('.image-item-wrap .selected').parent().css('left'));
	imageItemLength = $(".image-item-wrap").length;
	imageItemPositionLeft = imageItemPositionLeft + ($('.image-list-thumbs').width()*0.13);
	$('.image-text').text($('.image-item.selected').attr('type-text'));
	if (imageItemLeft > (imageThumbsLeft + ($('.image-list-thumbs').width()*0.13))) {
		return;
	}
	if (imageItemLength < 8) {
		return;
	}
	return $(".image-item-wrap").animate({
		left: imageItemPositionLeft + 'px'
		}, 100);
	});
	return $('.image-gallery-right-btn').click(function() {
		var MarginMiddle, contentHeight, imageItemLeft, imageItemLength, imageItemPositionLeft, imageThumbsLeft, imgHeight, num2, thumbs_this;
		num2 = $('.image-item-wrap .selected').parent().index();
			if (num2 === ($(".image-item-wrap").length - 1)) {
				return;
			}
		thumbs_this = $('.image-item-wrap .selected').parent();
		imgs.removeClass('isactive');
		$('.image-item').removeClass("selected");
		$('.image-item-wrap').eq(num2 + 1).children().eq(0).addClass("selected");
		imgs.hide();
		imgs.eq(num2 + 1).show();
		imgs.eq(num2 + 1).addClass('isactive');
		contentHeight = $('.image-list ').find('.isactive').height();
		imgHeight = $('.image-list ').find('.isactive').children().eq(0).height();
		MarginMiddle = (contentHeight - imgHeight) / 2;
		$('.image-list ').find('.isactive').children('img').css('margin-top', MarginMiddle + 'px');
		imageItemLeft = $('.image-item-wrap .selected').parent().offset().left;
		imageThumbsLeft = $('.image-list-thumbs').offset().left;
		imageItemPositionLeft = parseInt($('.image-item-wrap .selected').parent().css('left'));
		imageItemLength = $(".image-item-wrap").length;
		imageItemPositionLeft = imageItemPositionLeft - ($('.image-list-thumbs').width()*0.13);
		$('.image-text').text($('.image-item.selected').attr('type-text'));
		if (num2 === 0 && imageItemLeft > (imageThumbsLeft + ($('.image-list-thumbs').width()*0.13))) {
			return;
		}
		if (imageItemLength < 8) {
			return;
		}
		return $(".image-item-wrap").animate({
			left: imageItemPositionLeft + 'px'
			}, 100);
	});
})();