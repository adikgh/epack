<?php include '../config/core.php'; 

	// site setting
	$menu_name = 'ads';
	$site_set = [
		'header' => 0,
		'footer' => 0,
		'swiper' => 0,
		'main' => 0,
		'css' => 'true',
	];

	$wt = 'https://wa.me/77077065202?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B';


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
			<div class="add_bl1_a">
				<div class="add_bl1_ac"></div>
				<h6 class="txt_c">Отправьте резюме на Whatsapp</h6>
				<div class="add_bl1_b">
					<a href="<?=$wt?>">
						<div class="btn">
							<i class="fab fa-whatsapp"></i>
							<span>написать</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>



<?php include '../block/footer.php'; ?>