<?php if ($site_set['footer'] != 'false'): ?>
	<!-- Footer -->
	<footer class="footer">
		<div class="bl_c">
			<div class="foot_c">
				<div class="foot_i">
					<div class="foot_logo">
						<a href="/">
							<div class="logo_con lazy_bag" data-src="/assets/img/logo/logo.png"></div>
							<div class="logo_txt">
								<div>Производим пакеты</div>
								<div>с логотипом</div>
							</div>
						</a>
					</div>
				</div>
				<div class="foot_i">
					<div class="foot_sos">
						<a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><i class="fab fa-instagram"></i></a>
						<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><i class="fab fa-whatsapp"></i></a>
						<a target="_blank" href="https://facebook.com/<?=$site['telegram']?>"><i class="fab fa-telegram-plane"></i></a>
					</div>
				</div>
				<div class="foot_i">
					<div class="foot_n">
						<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
						<span><?=t::w('calc_al')?></span>
					</div>
				</div>
			</div>

			<div class="footer_b">
				<div class="footer_bi"><span>© 2021 EPACK. <?=t::w('All rights reserved')?></span></div>
				<div class="footer_bi2">
					<div class="footer_bic">
						<div class="footer_bici">
							<span><?=t::w('Developed by:')?></span><a target="_blank" href="https://gprog.kz/">G prog</a>
						</div>
						<div class="footer_bici footer_bici2">
							<a target="_blank" href="https://gprog.kz/"><?=t::w('order site')?></a>
						</div>
					</div>
					<a target="_blank" href="https://gprog.kz/"><div class="footer_bim lazy_bag" data-src="https://gprog.kz/assets/img/logo/logo_tr_1200.png"></div></a>
				</div>
			</div>
		</div>
	</footer>
<?php endif ?>


<!-- end body -->
</div>

	<?php include 'foot.php'; ?>

</body>
</html>

	<?php include 'modal.php'; ?>