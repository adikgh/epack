$(document).ready(function() {

	// 
	let scroll = $(window).scrollTop();
	if (scroll > 80) {$('.header').addClass('header_fix')}
	else {$('.header').removeClass('header_fix')}
	$(window).scroll(function() {
    	scroll = $(window).scrollTop();
		if (scroll > 80) {$('.header').addClass('header_fix')}
		else {$('.header').removeClass('header_fix')}
	})


	// СМС +
	$('.orderSend').on('click', function() {

		var sms = $(this).parent().siblings().children('.sms')
		var name = $(this).parent().siblings().children('.name')
		var phone = $(this).parent().siblings().children('.phone')

		if (name.attr('data-pr') != 1 || phone.attr('data-pr') != 1) { mess('Введите свой данный') } 
		else {
			$.ajax({
				url: "/send/?mess",
				type: "POST",
				dataType: "html",
				data: ({sms:sms.val(),name:name.val(),phone:phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
						name.val('')
						name.attr('data-pr', 0)
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
						console.log(data);
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})



	// 
	$('.send').on('click', function() {

		var sms = $(this).parent().siblings().children('.sms')
		var phone = $(this).parent().siblings().children('.phone')

		if (phone.attr('data-pr') != 1) { mess('Введите свой данный') } 
		else {
			$.ajax({
				url: "/send/?sms",
				type: "POST",
				dataType: "html",
				data: ({sms:sms.val(),phone:phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})





   // 
	$('.disb_zab').click(function(){$('.fr').addClass('zabr_nom_act')})
	$('.zabr_back').click(function(){$('.fr').removeClass('zabr_nom_act')})

	
})