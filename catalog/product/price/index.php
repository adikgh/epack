<?php include "inc/core.php"; ?>
<?php include "block/header.php"; ?>

	<style>
		.bl_c{
			width: 100%;
			max-width: 800px;
			overflow-x: auto;
			position: relative;
		}
		table {
		  font-size: 14px;
		  background: white;
		  width: 100%;
		  border-collapse: collapse;
		  text-align: left;
		  min-width: 800px;
		}
		th {
		  font-size: 13px;
		  font-weight: normal;
		  background: #b9c9fe;
		  border-top: 4px solid #aabcfe;
		  border-bottom: 1px solid #fff;
		  color: #039;
		  padding: 8px;
		}
		td {
		  background: #e8edff;
		  border-bottom: 1px solid #fff;
		  color: #669;
		  border-top: 1px solid transparent;
		  padding: 8px;
		}
		tr:hover td {background: #ccddff;}

		table img{
			width: 120px;
			height: 120px;
		}
		.td_name{
			max-width: 150px;
			width: 150px;

			text-align: center;
		}
		.td_logo{
			max-width: 150px;
			width: 150px;
		}
		.raz td{
			padding-top: 15px;
		}
	</style>

	<div class="bl_c">
		<table>
			<tr>
				<th>Фото</th>
				<th>Имя</th>
				<th>Размер</th>
				<th>Тираж</th>
				<th>Цена</th>
				<th>Сумма</th>
			</tr>

			<?php
				$l = db::query("select * from price");
				while ($sql = mysqli_fetch_assoc($l)) {
					$id = $sql['id'];
					$price = db::query("select * from price_item where price_id = '$id'");
					$san = mysqli_num_rows($price);
					$san += 1;
					echo '
						<tr>
							<td class="td_logo" rowspan="'.$san.'"><img src="/assets/img/price/'.$sql['logo'].'"></td>
							<td class="td_name" rowspan="'.$san.'">'.$sql['name'].'</td>
						</tr>
					';
					while ($item = mysqli_fetch_assoc($price)) {
						$size_id = $item['size_id'];
						$size = db::query("select * from size where id = '$size_id'");
						$size = mysqli_fetch_assoc($size);
						echo '
							<tr>
								<td>'.$size['size'].'</td>
								<td>от '.$item['tirazh'].' шт</td>
								<td>'.$item['price'].' тг/шт</td>
								<td>от '.$item['tirazh']*$item['price'].' тг</td>
							</tr>
						';
					}
					echo '
						<tr class="raz"><td colspan="6"></td></tr>
					';
				}
			?>
			
		</table>
	</div>

<?php include "block/footer.php"; ?>