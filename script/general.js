String.prototype.replaceAll = function(search, replace) {
	return this.toString().split(search).join(replace);
}

$(document).on('ready', function() {
	showScrollUpCommand();
	// setZebraBackgrounds();
	// centerColumnsWhenLessThan3();

	// Slideshow de banners
	$('#slider-banner').jcarousel({
		transitions: {
	        transforms3d: true,
	        easing:       'ease'
	    }
	});

	// Auto empezar slider
	jcarouselAutostart();
	function jcarouselAutostart() {
		// lo hago recursivo
		window.carouselTimer = setTimeout(function() {
			var $carouselVisible = $('#slider-banner').jcarousel('visible');
			var carouselIndex    = $carouselVisible.index();

			if(carouselIndex < $carouselVisible.parent().find('> li').length -1) {
				$('#slider-banner').jcarousel('scroll', carouselIndex +1, true, function() {
					jcarouselAutostart();
					// updatePagination();
				});
			} else {
				$('#slider-banner').jcarousel('scroll', 0, true, function() {
					jcarouselAutostart();
					// updatePagination();
				});
			}
		}, 3000);
	}

	if(document.location.hash != '') {
		$('header .navegacion').find('a.activo').removeClass('activo');
		$('header .navegacion').find('a[href=' + document.location.hash + ']').addClass('activo');

		setTimeout(function() {
			// reseteo el scroll top
			$('html, body').scrollTop(0);
			// Lo envio al hash que viene por url
			$('html, body').animate({
				scrollTop: $('#_' + document.location.hash.replace('#', '')).offset().top - (document.location.hash != '#home' ? 50 : 80)
			}, 500);
		}, 50);
	}

	$('body').on('click', 'a', function(e) {
		e.preventDefault();
		var $this = $(this);

		if($this.attr('href') == '#') return false;

		try {
			$('#_' + $this.attr('href').replace('#', ''));
		} catch(e) {
			if($this.attr('target')) {
				window.open($this.attr('href'), $this.attr('target'));
			} else {
				document.location.href = $this.attr('href');
			}
			return false;
		}

		$('header .navegacion').find('a.activo').removeClass('activo');
		$('header .navegacion').find('a[href=' + $this.attr('href') + ']').addClass('activo');

		$('html, body').animate({
			scrollTop: $('#_' + $this.attr('href').replace('#', '')).offset().top - ($this.attr('href') != '#home' ? 50 : 80)
		}, 500);

		document.location.hash = $this.attr('href');
		return false;
	});

	// Slideshow de banners
	// $('#slider-banner').jcarousel({
	// 	transitions: {
	//         transforms3d: true,
	//         easing:       'ease'
	//     }
	// });

	// Controles del slideshow
	// $('.controles-slide-banner').on('click', function(e) {
	// 	var $target = $(e.target);
	// 	if($target.length) {
	// 		clearTimeout(window.carouselTimer);

	// 		var $carouselVisible = $('#slider-banner').jcarousel('visible');
	// 		var carouselIndex    = $carouselVisible.index();
	// 		var slidetarget      = $target.data('slidetarget');
	// 		if(slidetarget == 'prev') {
	// 			var newIndex = '-=1';
	// 			if(carouselIndex == 0) {
	// 				newIndex = $carouselVisible.parent().find('> li').length -1;
	// 			}
	// 			$('#slider-banner').jcarousel('scroll', newIndex, true, updatePagination);
	// 			return false;
	// 		}
	// 		if(slidetarget == 'next') {
	// 			var newIndex = '+=1';
	// 			if(carouselIndex == $carouselVisible.parent().find('> li').length -1) {
	// 				newIndex = 0;
	// 			}
	// 			$('#slider-banner').jcarousel('scroll', newIndex, true, updatePagination);
	// 			return false;
	// 		}
	// 		if(!isNaN(slidetarget)) {
	// 			$('#slider-banner').jcarousel('scroll', slidetarget -1, true, updatePagination);
	// 			return false;
	// 		}
	// 	}
	// });
	
	// Auto empezar slider
	// jcarouselAutostart();
	// function jcarouselAutostart() {
	// 	// lo hago recursivo
	// 	window.carouselTimer = setTimeout(function() {
	// 		var $carouselVisible = $('#slider-banner').jcarousel('visible');
	// 		var carouselIndex    = $carouselVisible.index();

	// 		if(carouselIndex < $carouselVisible.parent().find('> li').length -1) {
	// 			$('#slider-banner').jcarousel('scroll', carouselIndex +1, true, function() {
	// 				jcarouselAutostart();
	// 				updatePagination();
	// 			});
	// 		} else {
	// 			$('#slider-banner').jcarousel('scroll', 0, true, function() {
	// 				jcarouselAutostart();
	// 				updatePagination();
	// 			});
	// 		}
	// 	}, 3000);
	// }

	// Actualizar paginación del slideshow
	// function updatePagination() {
	// 	var carouselIndex         = $('#slider-banner').jcarousel('visible').index();
	// 	var $carouselPageSelected = $('.ctrl-paginacion').find('li.selected');
	// 	var $carouselNewPage      = $('.ctrl-paginacion').find('li:eq(' + carouselIndex + ')');
		
	// 	$carouselPageSelected.removeClass('selected');
	// 	$carouselNewPage.addClass('selected');
	// }
});

$(window).on('scroll', function(e) {
	showScrollUpCommand();
	// selectNavLinkByScrol();
});

function showScrollUpCommand() {
	if($(window).scrollTop() > 50) {
		$('header').addClass('compressed');
		$('a.scroll-up').fadeIn();
	} else {
		$('header').removeClass('compressed');
		$('a.scroll-up').fadeOut();
	}
}

// function selectNavLinkByScrol() {
// 	// console.log($(window).scrollTop());
// 	$('header .navegacion').find('a').each(function() {
// 		// console.log($(this).attr('href'));
// 		// console.log($(this).attr('href').replace('#', '#_'));
// 		if($(this).attr('href').indexOf('/') == -1) {
// 			// console.log($($(this).attr('href').replace('#', '#_')));
// 			if($($(this).attr('href').replace('#', '#_')).length) {
// 				// console.log($($(this).attr('href').replace('#', '#_')).offset().top);
// 				// console.log($($(this).attr('href').replace('#', '#_')).height());
// 				if($(window).scrollTop() >= $($(this).attr('href').replace('#', '#_')).offset().top - 100 && $(window).scrollTop() < ($($(this).attr('href').replace('#', '#_')).height() + $($(this).attr('href').replace('#', '#_')).offset().top)) {
// 					$('header .navegacion').find('a').removeClass('activo');
// 					$(this).addClass('activo');
// 					document.location.hash = $(this).attr('href');
// 				}
// 				if($(window).scrollTop() <= $($(this).attr('href').replace('#', '#_')).offset().top - 100) {
// 					$(this).removeClass('activo');
// 				}
// 			}
// 		}
// 	});
// }

// function setZebraBackgrounds() {
// 	$('.contenido-principal').each(function(index, item) {
// 		if(index % 2 > 0) {
// 			$(item).addClass('fondo-gris');
// 		}
// 	});
// }

// function fixHeights() {
// 	$(".contenido-principal").height(function() {
// 		return $(window).outerHeight() - $('header').outerHeight() + 3
// 	});

// 	$(".contenido-principal:first").height(function() {
// 		return $(window).outerHeight() - $('header').outerHeight()
// 	});

// 	$(".contenido-principal:last").height(function() {
// 		return $(window).outerHeight() - $('header').outerHeight() - $('footer').outerHeight() - 60 + 3
// 	});

// 	$(".contenido-principal").find('.center').wrap('<div class="inner-overflow" />');
// }

// function centerColumnsWhenLessThan3() {
// 	var _clientes_ = $('.contenido-principal.clientes').find('.columna-30');

// 	if(_clientes_.length < 3) {
// 		var _clientes_width = 0;

// 		_clientes_.each(function () {
// 			var margin_right = parseFloat($(this).css('margin-right').replace('px', ''));
// 			var margin_left = parseFloat($(this).css('margin-left').replace('px', ''));

// 			_clientes_width += $(this).outerWidth() + margin_right + margin_left;
// 		});

// 		_clientes_.first().css({
// 			'padding-left': function () {
// 				return (_clientes_.parent().innerWidth() - _clientes_width) / 2;
// 			}
// 		});
// 	}
// }