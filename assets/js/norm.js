// window.onload =()=> {
// 	setTimeout(function () {
// 		$(".preload").addClass('preloader_act')
// 		setTimeout(function(){$(".preload").addClass('dsp_n')}, 300)
// 	}, 500)
// }


// start jquery
$(document).ready(function() {

	// lazy load
	$('.lazy_logo').lazy()
	$('.lazy_bag').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_img').lazy({effect:"fadeIn",effectTime:500,threshold:0})


	// setting input
	$(".ms_phone").inputmask("+7 (999) 999-99-99");
	// form - input
	$('input[type=text]').on('input', function(){
		if ($(this).val().length < $(this).attr('data-lenght')) {
			$(this).attr('data-pr', 0)
		} else {
			$(this).attr('data-pr', '1')
			$(this).attr('data-val', $(this).val())
		}
	})
	$('input[type=tel]').on('input', function(){
		in_rez = $(this).val().replace(/ /g, '').replace(/\+/g, '').replace(/\)/g, '').replace(/\(/g, '').replace(/-/g, '').replace(/_/g, '')
		if (in_rez.length < $(this).attr('data-lenght')) {
			$(this).attr('data-pr', 0)
		} else {
			$(this).attr('data-pr', 1)
			$(this).attr('data-val', in_rez)
		}
	})



	$('.mn').click(function(e) {
		$('#html').toggleClass('ovr_h');
		$('.menu').toggleClass('menu_act');
	});
	$('.menu_close').click(function(e) {
		$('#html').toggleClass('ovr_h');
		$('.menu').toggleClass('menu_act');
	});



})