// function
function mess(e) {
	$('.bl_mess').addClass('bl_mess_zak')
	$('.bl_mess_sam').html(e)
	setTimeout(function(){$('.bl_mess').removeClass('bl_mess_zak')}, 10000)
}
$('.bl_mess').on('click',function(){$(this).removeClass('bl_mess_zak')})