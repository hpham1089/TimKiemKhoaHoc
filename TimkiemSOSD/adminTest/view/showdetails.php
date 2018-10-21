<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="padding-top: 10px;background-color: #efefef;color: black">
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên hàng</th>
				<th style="text-align: right">Số lượng</th>
				<th style="text-align: right">Đơn giá</th>
				<th style="text-align: right">Thành tiền</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count = 0;
				$quantity = 0;
				$total = 0;
				//duyet mang orderdetails
				foreach ($orderdetails as $v) {
					$count++;
					$quantity+=$v->getQuantity();
					$stotal = $v->getQuantity()*$v->getPrice();
					$total+=$stotal;
				?>
					<tr>
						<td align="center"><?=$count?></td>
						<td><?=$v->getName()?></td>
						<td align="right"><?=$v->getQuantity()?></td>
						<td align="right"><?=number_format($v->getPrice(),0)?></td>
						<td align="right"><?=number_format($stotal,0)?></td>
						
					</tr>
				<?php
				}//end foreach	
			?>
			<tr>
				<td colspan="2">Tổng</td>
				<td align="right"><?=$quantity?></td>
				<td colspan="2" align="right"><?=$total?></td>
			</tr>
		</tbody>
	</table>
	<form class="form-inline" method="post" action="?controller=sta&action=update">
		<div class="form-group">
    <label for="status">Trạng thái:</label>
    <select id="status" name="status" class="form-control">
    	<option value="1">Đã liên hệ</option>
    	<option value="2">Đã thanh toán</option>
    </select>
    <input type="hidden" name="id" value="<?=$id?>">
  </div>
  <button type="submit" class="btn btn-default">Cập nhật</button>
	</form>
</div>
