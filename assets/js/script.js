$(function() {
	updateHeight();
	resize(function(event) {
		updateHeight()
	});
});

function updateHeight() {
	var windowHeight = window.innerHeight;
	var navHeight =$('.navbar').innerHeight();
	var offset = windowHeight - navHeight;
	$('.home-container').height(offset);

}