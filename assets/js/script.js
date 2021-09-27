$(function() {
	updateHeight();
	$(window).resize(function(event) {
		updateHeight()
	});

	adjustButtons();


	// handle the next and previous button
	// also handle the one that will move to the assessment page
	$('#next-btn').click(function(event) {
		var currentItem = $('.course-item.active');
		var currentCount = currentItem.attr('data-lesson');
		var count = $('.course-item').length;
		if (currentCount==count) {
			location.assign('assessment.php');
		}
		currentCount++;
		currentItem.removeClass('active');
		$('div[data-lesson='+currentCount+']').addClass('active');
		adjustButtons();
	});

	$('#previous-btn').click(function(event) {
		var currentItem = $('.course-item.active');
		var currentCount = currentItem.attr('data-lesson');
		var count = $('.course-item').length;
		currentCount--;
		currentItem.removeClass('active');
		$('div[data-lesson='+currentCount+']').addClass('active');
		adjustButtons();
	});
});


function adjustButtons() {
	var count = $('.course-item').length;
	var activeItem = $('.course-item.active').attr('data-lesson');
	
	if (activeItem==1) {
		$('#previous-btn').prop('disabled', true);
	}else{
		$('#previous-btn').prop('disabled', false);
	}
	$('#stage-indicator-current').text(activeItem);
	$('#stage-indicator-len').text(count);
	window.scrollTo(0,0);
	if (count==activeItem) {
		$('#next-btn').text('Proceed to assessment');
	}
}

function updateHeight() {
	var windowHeight = window.innerHeight;
	var navHeight =$('.navbar').innerHeight();
	var offset = windowHeight - navHeight;
	$('.home-container').height(offset);
}