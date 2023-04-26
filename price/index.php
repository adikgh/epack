<?php include '../config/core.php'; 

	// site setting
	$menu_name = 'price';
	$site_set = [
		'css' => 'true',
		'js' => 'true',
	];
?>
<?php include '../block/header.php'; ?>


<div class="prm">
	<div class="bl_c">
		<div class="prm_c">
			<div class="prm_i">Малый тираж</div>
			<div class="prm_i">Крупный тираж</div>
			<div class="prm_i">Бумажный пакеты</div>
		</div>
	</div>
</div>


<div class="prb1">
	<div class="bl_c">
		<div class="prb1_c">
			<div class="prb1_cl">
				
			</div>
			<div class="prb1_cr">

				<div class="table">
					<div class="thead">
						<div class="th">Размер:</div>
						<div class="th">Мин. тираж:</div>
						<div class="th">Цена за 1 шт:</div>
						<div class="th">Сумма:</div>
					</div>
				</div>

				<table>
					<tbody>						
						<?php
							$sql = db::query("select * from `price` where product_id = 1");
					      while($ana = mysqli_fetch_array($sql)){
					      	echo '
						      	<tr>
						      		<td class="tdbl0">'.t::s2($ana['size_id']).'</td>
						      		<td>'.$ana['circ_id'].'00 шт</td>
						      		<td class="tdp">'.$ana['price'].' тг</td>
						      		<td class="tdp">'.($ana['price']*$ana['circ_id']).'00 тг</td>
						      	</tr>
					      	';
					      }
						?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>


<div class="prb1">
	<div class="bl_c">
		<div class="prb1_c">
			<div class="prb1_cl">
				
				<div class="table">
					<div class="thead">
						<div class="th">Размер:</div>
						<div class="th">Мин. тираж:</div>
						<div class="th">Цена за 1 шт:</div>
						<div class="th">Сумма:</div>
					</div>
				</div>

				<table>
					<tbody>
						<?php
							$sql = db::query("select * from `price` where product_id = 2");
					      while($ana = mysqli_fetch_array($sql)){
					      	echo '
						      	<tr>
						      		<td class="tdbl0">'.t::s2($ana['size_id']).'</td>
						      		<td>'.$ana['circ_id'].'00 шт</td>
						      		<td class="tdp">'.$ana['price'].' тг</td>
						      		<td class="tdp">'.($ana['price']*$ana['circ_id']).'00 тг</td>
						      	</tr>
					      	';
					      }
						?>
					</tbody>
				</table>

			</div>
			<div class="prb1_cr">

			</div>
		</div>
	</div>
</div>


<div class="prb1">
	<div class="bl_c">
		<div class="prb1_c">
			<div class="prb1_cl">
				


			</div>
			<div class="prb1_cr">
				
				<div class="table">
					<div class="thead">
						<div class="th">Размер:</div>
						<div class="th">Мин. тираж:</div>
						<div class="th">Цена за 1 шт:</div>
						<div class="th">Сумма:</div>
					</div>
				</div>

				<table>					
					<tbody class="tbody">
						<?php
							$sql = db::query("select * from `price` where product_id = 4");
					      while($ana = mysqli_fetch_array($sql)){
					      	echo '
						      	<tr>
						      		'.($ana['rowspan_sz']==''?'':'<td rowspan="'.$ana['rowspan_sz'].'" class="tdbl0 tdbb03">'.t::s2($ana['size_id']).'</td>').'
						      		<td>'.$ana['circ_id'].'00 шт</td>
						      		<td class="tdp">'.$ana['price'].' тг</td>
						      		<td class="tdp">'.($ana['price']*$ana['circ_id']).'00 тг</td>
						      	</tr>
					      	';
					      }
						?>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>


<div class="prb1">
	<div class="bl_c">
		<div class="prb1_c prb1_cb">
				
			<div class="table gr5">
				<div class="thead">
					<div class="th">Размер:</div>
					<div class="th">Мин. тираж:</div>
					<div class="th">Цвет:</div>
					<div class="th">Цена за 1 шт:</div>
					<div class="th">Сумма:</div>
				</div>
			</div>

			<table class="gr5">
				<tbody>
					<?php
						$sql = db::query("select * from `price` where product_id = 3");
				      while($ana = mysqli_fetch_array($sql)){
				      	echo '
					      	<tr>
					      		'.($ana['rowspan_sz']==''?'':'<td rowspan="'.$ana['rowspan_sz'].'" class="tdbl0 tdbb06">'.t::s2($ana['size_id']).'</td>').'
					      		'.($ana['rowspan_cr']==''?'':'<td rowspan="'.$ana['rowspan_cr'].'" class="tdbb02">'.$ana['circ_id'].'00 шт</td>').'
					      		<td>'.t::c2($ana['color_id']).'</td>
					      		<td class="tdp">'.$ana['price'].' тг</td>
					      		<td class="tdp">'.($ana['price']*$ana['circ_id']).'00 тг</td>
					      	</tr>
				      	';
				      }
					?>
				</tbody>
			</table>

		</div>
	</div>
</div>









<?php include '../block/footer.php'; ?>