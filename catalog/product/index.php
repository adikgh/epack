<?php include '../config/core.php'; 

	// site setting
	$menu_name = 'product';
	$site_set = [
		'css' => 'true',
		'js' => 'true',
	];

	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from product where id = '$id'");
		if (mysqli_num_rows($sql) != 0) $product = mysqli_fetch_array($sql); else  header('location: /');
	} else {
		header('location: /');
	}

?>
<?php include '../block/header.php'; ?>


<!--  -->
	<div class="pbl1">
		<div class="pbl1_img lazy_bag" data-src="/assets/img/product/<?=$product['img']?>"></div>
		<div class="bl_c">
			<div class="pbl1_c">
				<h4 class="pbl1_name"><?=$product['name']?></h4>
			</div>
		</div>
	</div>


<!--  -->
	<div class="pbl2">
		<div class="bl_c">
			<div class="head_c txt_c">
				<h5>Прайс лист</h5>
			</div>
		</div>
		<div class="pbl2_c">
			<table class="table" style="min-width: <?=($product['type']==4?'520px':'375px')?>">
				<thead>
					<tr>
						<td>Размер</td>
						<td>Минимальный <br>тираж</td>
						<?php if ($product['type'] == 4): ?>
							<td>Цвет</td>
						<?php endif ?>
						<td>Цена <br>на 1 шт.</td>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = db::query("select * from `price` where product_id = '$id'");
				      while($ana = mysqli_fetch_array($sql)){
				      	echo "<tr>";
				      	if ($ana['size_id'] != null) echo '<td>'.t::s2($ana['size_id']).'</td>';
				      	if ($ana['circ_id'] != null) echo '<td>'.$ana['circ_id'].'00 шт</td>';
				      	if ($ana['color_id'] != null) echo '<td>'.t::c2($ana['color_id']).'</td>';
				      	if ($ana['price'] != null) echo '<td>'.$ana['price'].' тг</td>';
				      	echo "</tr>";
				      }
					?>
				</tbody>
			</table>
		</div>
	</div>

<!--  -->
	<div class="bl8">
		<div class="bl_c">
			<div class="bl8_c">
				<div class="head_c txt_c">
					<h4>Рассчитайте заказ?</h4>
					<p>Оставьте свои контакты и мы свяжемся с вами для консультации</p>
				</div>
				<div class="form_c">
					<div class="form_im dsp_n"><input type="text" class="sms" value="Рассчитать"></div>
					<div class="form_im">
						<input type="text" class="form_im_txt name" placeholder="Введите имя ..">
						<i class="fal fa-user form_icon"></i>
					</div>
					<div class="form_im">
						<input type="tel" class="form_im_txt phone ms_phone" placeholder="+7 (___) ___-__-__">
						<i class="fal fa-mobile form_icon"></i>
					</div>
					<div class="form_im">
						<div class="btn orderSend"><span>Рассчитать сейчас</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>





<?php include '../block/footer.php'; ?>