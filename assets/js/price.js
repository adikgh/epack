$(document).ready(function() {

	$('.price_bl1_na').on('click', function(e) {
		e.preventDefault();
		if ($(this).parent('.price_bl1_n').hasClass('price_bl1_n_act') == true) {
			$(this).parent('.price_bl1_n').removeClass('price_bl1_n_act')
			$(this).parent('.price_bl1_n').height(600)
		} else {
			$(this).parent('.price_bl1_n').addClass('price_bl1_n_act')
			$(this).parent('.price_bl1_n').height($(this).siblings('.price_bl1_ns').height())
		}
	});

})