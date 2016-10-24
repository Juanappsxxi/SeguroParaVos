$(function () {

if ($('body').outerHeight() < $(window).outerHeight()) {
	$('footer').css({
		position: 'absolute',
		bottom: 0,
		left: 0,
		right: 0
	});
}

// $('body').on('click', '[role=boolean]', function(e) {
// 	e.preventDefault();

// 	console.log(this);
// });

});