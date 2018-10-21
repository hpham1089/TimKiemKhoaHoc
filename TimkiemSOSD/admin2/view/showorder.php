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
				<th>Ngày</th>
				<th>Giờ</th>
				<th>Tổng tiền</th>
				<th>Người nhận hàng</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
				<th>Email</th>
				<th>Trạng thái</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count = 0;
				//duyet mang users
				foreach ($orders as $v) {
					$count++;
					if($v->getStatus()==0){
						$status = "Mới";
						$enable = "";
					}
					else if($v->getStatus()==1){
						$status = "Đã liên hệ";
						$enable = "disabled";
					}
					else{
						$status = "Đã thanh toán";
						$enable = "disabled";
					}
				?>
					<tr>
						<td align="center"><?=$count?></td>
						<td><?=$v->getOrderDate()?></td>
						<td><?=$v->getOrderTime()?></td>
						<td><?=$v->getTotal()?></td>
						<td><?=$v->getRName()?></td>
						<td><?=$v->getAddress()?></td>
						<td><?=$v->getPhone()?></td>
						<td><?=$v->getEmail()?></td>
						<td>
							<?=$status?>
						</td>
						<td>
							<button class="btn btn-warning" type="button" onclick="xoa(this.id)" id="<?=$v->getId()?>" <?=$enable?>>Xóa</button>  <a href="?controller=sta&action=details&id=<?=$v->getId()?>"><button type="button" class="btn btn-info">Xem chi tiết</button></a>  

						</td>
					</tr>
				<?php
				}//end foreach	
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
		function xoa(id){
			var tl = confirm("Bạn có muốn xóa thật không");

			if(tl){
				window.location.href="?controller=sta&action=delete&id="+id;
			}
		}
</script>