$(document).ready(function() {
	var url = this.location.pathname;
	var filename = url.substring(url.lastIndexOf('/'));
	$('a[href="' + filename + '"]').parent('li').addClass('active');
});

$(window).scroll(function() {
	if ($(document).scrollTop() > 50) {
		$('nav').addClass('shrink');
	} else {
		$('nav').removeClass('shrink');
	}
});

