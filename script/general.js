$(document).on('ready', function() {
	if($(window).scrollTop() > 50) {
		$('header').addClass('compressed');
		$('a.scroll-up').fadeIn();
	} else {
		$('header').removeClass('compressed');
		$('a.scroll-up').fadeOut();
	}

	$(document).on('click', 'a.scroll-up', function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 60
		}, 500);
		return false;
	});
});

$(window).on('scroll', function(e) {
	if($(window).scrollTop() > 50) {
		$('header').addClass('compressed');
		$('a.scroll-up').fadeIn();
	} else {
		$('header').removeClass('compressed');
		$('a.scroll-up').fadeOut();
	}

	var bodyHeight   = $('body').innerHeight(),
		windowHeight = $(document).innerHeight();

	if(windowHeight > bodyHeight) {
		$('footer').addClass('dock-bottom');
	} else {
		$('footer').removeClass('dock-bottom');
	}
});