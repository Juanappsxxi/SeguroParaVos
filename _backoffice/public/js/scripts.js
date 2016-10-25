$(function () {

fixFooterPos();
switchCurrencyWithPercent($('#porcentaje'), $('.input-group .input-group-addon.currency'), $('.input-group .input-group-addon.percent'));
fillCobertUnity($('#unidad_cobertura').val(), $('.unidad-cobertura'));

$(window).on('resize', function() {
	fixFooterPos();
})

$('body').on('click', '#porcentaje', function() {
	switchCurrencyWithPercent($(this), $('.input-group .input-group-addon.currency'), $('.input-group .input-group-addon.percent'));
});

$('body').on('change', '#unidad_cobertura', function() {
	fillCobertUnity($(this).val(), $('.unidad-cobertura'));
});

});

function fixFooterPos() {
	if ($('body').outerHeight() < $(window).outerHeight()) {
		$('footer').css({
			position: 'absolute',
			bottom: 0,
			left: 0,
			right: 0
		});
	} else {
		$('footer').removeAttr('style');
	}
}

function fillCobertUnity(verbose, $tarjet) {
	$tarjet.html(function() {
		var r = '';
		switch (verbose) {
			case 'mensual':
			r = 'meses';
			break;
			case 'anual':
			r = 'años';
			break;
		}
		return r;
	});
}

function switchCurrencyWithPercent($input, $currency, $percent) {
	if ($input.is(':checked')) {
		$currency.hide();
		$percent.css({ 'display': 'table-cell' });
	} else {
		$currency.css({ 'display': 'table-cell' });
		$percent.hide();
	}
}