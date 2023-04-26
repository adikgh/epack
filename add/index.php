<?php include '../config/core.php'; 

	// site setting
	$wh_s = 'https://wa.me/'.$site['whtasapp'].'?text=';
	$menu_name = 'add';
	$site_set = [
		'header' => 0,
		'footer' => 0,
		'swiper' => 0,
		'css' => 'true',
	];

?>
<?php include '../block/header.php'; ?>



<!--  -->
	<div class="add_bl1">
		<div class="bl_c">
			<div class="add_bl1_n1">
				<div class="logo_con lazy_bag" data-src="/assets/img/logo/logo.png"></div>
				<div class="logo_txt">
					<div>Производим пакеты</div>
					<div>с логотипом</div>
				</div>
			</div>
			<div class="add_bl1_n2">
				<div class="foot_sos">
					<a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a>
					<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><i class="fab fa-whatsapp"></i></a>
					<a target="_blank" href="https://facebook.com/<?=$site['telegram']?>"><i class="fab fa-telegram-plane"></i></a>
				</div>
			</div>
			<div class="add_bl1_a">
				<div class="add_bl1_ac"></div>
				<h6 class="txt_c">Номер для заказ <br>по регионам Казахстана</h6>
				<div class="add_bl1_s">
					<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
					<span><?=t::w('calc_al')?></span>
				</div>
				<div class="add_bl1_b">
					<a target="_blank" href="tel:<?=$site['phone']?>">
						<div class="btn">
							<i class="fas fa-phone-alt"></i>
							<span>позвонить</span>
						</div>
					</a>
				</div>
				<div class="add_bl1_b">
					<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
						<div class="btn">
							<i class="fab fa-whatsapp"></i>
							<span>написать</span>
						</div>
					</a>
				</div>
			</div>
			<div class="add_bl1_a">
				<div class="add_bl1_ac"></div>
				<h6 class="txt_c">Посмотреть прайст лист онлайн</h6>
				<div class="add_bl1_b">
					<a href="/price/">
						<div class="btn">
							<span>прайст лист</span>
							<i class="fal fa-long-arrow-right"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="add_bl1_a">
				<div class="add_bl1_ac"></div>
				<h6 class="txt_c">Вы можете увидеть больше информации на нашем сайте</h6>
				<div class="add_bl1_b">
					<a href="/">
						<div class="btn">
							<span>прийти на сайт</span>
							<i class="fal fa-long-arrow-right"></i>
						</div>
					</a>
				</div>
			</div>
			<div class="add_bl1_a">
				<div class="add_bl1_ac"></div>
				<div class="add_bl1_b">
					<div class="btn disb_zab">
						<span>Задать вопрос</span>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php include '../block/footer.php'; ?>