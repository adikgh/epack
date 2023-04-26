<?php if ($site_set['header'] != 'false'): ?>
	<!-- menu -->
	<div class="header <?=($site_set['menu_type']=='n1'?'header_n1':'')?>">
		<div class="bl_c">
			<div class="header_c">
				<div class="logo">
					<a href="/">

						<?php if ($site_set['menu_type']=='n1'): ?>
							<div class="logo_c lazy_logo" data-src="/assets/img/logo/white/epack icon white 60x60.png"></div>
						<?php else:?>
							<div class="logo_c lazy_logo" data-src="/assets/img/logo/epack icon 60x60.png"></div>
						<?php endif?>

						<div class="logo_p">
							<div>EPACK</div>
							<div>Пакеты с логотипом</div>
						</div>

					</a>
				</div>
				<div class="mn"><i class="far fa-bars"></i></div>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="menu">
		<div class="menu_a menu_close"></div>
		<div class="menu_c">
			<div class="menu_n">
				<div class="bl_c">
					<div class="menu_t">
						<div class="menu_cl menu_close"><i class="fal fa-times"></i></div>
						<div class="menu_tl lazy_logo" data-src="/assets/img/logo/logo.png"></div>
						<h5 class="menu_tn">Меню</h5>
					</div>
					<div class="menu_m">
						<div class="menu_mi"><a href="#">Каталог</a></div>
						<div class="menu_mi"><a href="#">О нас</a></div>
						<div class="menu_mi"><a href="#">Контакты</a></div>
					</div>
					<div class="menu_l">
						<p>Язык:</p>
						<?=($lang=='kz'?'<div class="menu_li">Қазақша,</div>':'<a href="'.$url.'?lang=kz" class="menu_lia">Қазақша,</a>')?>
						<?=($lang=='ru'?'<div class="menu_li">Русский</div>':'<a href="'.$url.'?lang=ru" class="menu_lia">Русский</a>')?>
					</div>
					<div class="menu_s">
						<a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a>
						<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><i class="fab fa-whatsapp"></i></a>
						<a target="_blank" href="https://facebook.com/<?=$site['telegram']?>"><i class="fab fa-telegram-plane"></i></a>
					</div>
					<div class="menu_p">
						<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
						<span>● Звоните, мы сейчас работаем</span>
					</div>
				</div>
			</div>
			<div class="menu_b">
				<div class="btn disb_zab"><span>Задать вопрос</span></div>
			</div>
		</div>
	</div>
<?php endif ?>