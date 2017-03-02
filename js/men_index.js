//轮播
window.onload = function(){
	var firstPath, galleryInterval, firstPathText;
	
	firstPath = $(".room-image-item[data-index='1'] img").attr("src");
	firstPathText = $(".room-image-item[data-index='1'] span").text();
	firstPathA = $(".room-image-item[data-index='1'] a").attr("href");

	galleryInterval = setInterval(function() {
		var curIndex, imagePath, nextImage, totalIndex, nextText, imagePathText, imagePathA;
		totalIndex = $('.room-image-item img').length;
		curIndex = parseInt($('.room-image-item:first-child').attr("data-index"), 10);
		if (curIndex === totalIndex) {
			$('.room-image-item:first-child').attr("data-index", 1);
			$('.room-image-item:first-child').find('span').text(firstPathText);
			$('.room-image-item:first-child').find('a').attr('href',firstPathA);
			return $('.room-image-item:first-child').find('img').attr("src", firstPath);
		} else {
			nextImage = $(".room-image-item[data-index=" + (curIndex + 1) + "] img");
			nextText = $(".room-image-item[data-index=" + (curIndex + 1) + "] span");
			imagePath = nextImage.attr("src");
			imagePathText = nextText.text();
			imagePathA = $(".room-image-item[data-index=" + (curIndex + 1) + "] a").attr("href");;
			$('.room-image-item:first-child').attr("data-index", curIndex + 1);
			$('.room-image-item:first-child').find('span').text(imagePathText);
			$('.room-image-item:first-child').find('a').attr("href", imagePathA);
			return $('.room-image-item:first-child').find('img').attr("src", imagePath);
		}
	}, 3000);

	$('.room-image-left-btn').click(function() {
		var curIndex, imagePath,imagePathA,lastPathA, lastImage, lastPath, nextImage, totalIndex, nextText, imagePathText, lastImageText, lastPathText;
		totalIndex = $('.room-image-item img').length;
		curIndex = parseInt($('.room-image-item:first-child').attr("data-index"), 10);
		if (curIndex === 2) {
			$('.room-image-item:first-child').attr("data-index", 1);
			$('.room-image-item:first-child').find('span').text(firstPathText);
			$('.room-image-item:first-child').find('a').attr("href", firstPathA);
			return $('.room-image-item:first-child').find('img').attr("src", firstPath);
		} else if (curIndex === 1) {
			lastImage = $(".room-image-item[data-index=" + totalIndex + "] img");
			lastPath = lastImage.attr("src");
			lastImageText = $(".room-image-item[data-index=" + totalIndex + "] span");
			lastPathText = lastImageText.text();
			lastPathA = $(".room-image-item[data-index=" + totalIndex + "] a").attr('href');
			$('.room-image-item:first-child').attr("data-index", totalIndex);
			$('.room-image-item:first-child').find('span').text(lastPathText);
			$('.room-image-item:first-child').find('a').attr("href", lastPathA);
			return $('.room-image-item:first-child').find('img').attr("src", lastPath);
		} else {
			nextImage = $(".room-image-item[data-index=" + (curIndex - 1) + "] img");
			imagePath = nextImage.attr("src");
			nextText = $(".room-image-item[data-index=" + (curIndex - 1) + "] span");
			imagePathText = nextText.text();
			imagePathA = $(".room-image-item[data-index=" + (curIndex - 1) + "] a").attr('href');
			$('.room-image-item:first-child').attr("data-index", curIndex - 1);
			$('.room-image-item:first-child').find('span').text(imagePathText);
			$('.room-image-item:first-child').find('a').attr("href", imagePathA);
			return $('.room-image-item:first-child').find('img').attr("src", imagePath);
		}
	});

	$('.room-image-right-btn').click(function() {
	  var curIndex, imagePath, nextImage, totalIndex, nextText, imagePathText,imagePathA;
	  totalIndex = $('.room-image-item img').length;
	  curIndex = parseInt($('.room-image-item:first-child').attr("data-index"), 10);
	  if (curIndex === totalIndex) {
	    $('.room-image-item:first-child').attr("data-index", 1);
	    $('.room-image-item:first-child').find('span').text(firstPathText);
	    $('.room-image-item:first-child').find('a').attr("href", firstPathA);
	    return $('.room-image-item:first-child').find('img').attr("src", firstPath);
	  } else {
	    nextImage = $(".room-image-item[data-index=" + (curIndex + 1) + "] img");
	    imagePath = nextImage.attr("src");
	    nextText = $(".room-image-item[data-index=" + (curIndex + 1) + "] span");
		imagePathText = nextText.text();
		imagePathA = $(".room-image-item[data-index=" + (curIndex + 1) + "] a").attr("href");;
	    $('.room-image-item:first-child').attr("data-index", curIndex + 1);
	    $('.room-image-item:first-child').find('span').text(imagePathText);
	    $('.room-image-item:first-child').find('a').attr("href", imagePathA);
	    return $('.room-image-item:first-child').find('img').attr("src", imagePath);
	  }
	});
}


//鼠标移动子gallery画廊上
$('.room-image-list').mouseover(function() {
    $('.room-image-left-btn').show();
    $('.room-image-right-btn').show();
});

$('.room-image-list').mouseout(function() {
    $('.room-image-left-btn').hide();
    $('.room-image-right-btn').hide();
});

//banner侧栏
$('.right-wrap').mouseover(function(){
	$(this).find('p').animate({fontSize:'18px'},200);
});
$('.right-wrap').mouseout(function(){
	$(this).find('p').animate({fontSize:'15px'},200);
});

//衣装hover
$('.block2 .imgall').mouseover(function() {
    $(this).css('box-shadow','5px 5px 6px #666').find('span').css('color','#f60');
});
$('.block2 .imgall').mouseout(function() {
    $(this).css('box-shadow','').find('span').css('color','#444');
});


//腕表hover
$('.block3 .mask-text').mouseover(function(){
	$(this).find('span').css('color','#f60');
});
$('.block3 .mask-text').mouseout(function(){
	$(this).find('span').css('color','#fff');
});

$('.block3 .right-wrap').mouseover(function(){
	$(this).find('.text').css('display','block');
});
$('.block3 .right-wrap').mouseout(function(){
	$(this).find('.text').css('display','none');
});

//理容hover
$('.block4 .imgall').mouseover(function() {
    $(this).css('box-shadow','5px 5px 6px #666').find('span').css('color','#f60');
});
$('.block4 .imgall').mouseout(function() {
    $(this).css('box-shadow','').find('span').css('color','#444');
});

$('.block4 .right-wrap a').mouseover(function() {
    $(this).animate({fontSize:'19px',color:'#f60'},200);
});
$('.block4 .right-wrap a').mouseout(function() {
    $(this).animate({fontSize:'16px',color:'#444'},200);
});