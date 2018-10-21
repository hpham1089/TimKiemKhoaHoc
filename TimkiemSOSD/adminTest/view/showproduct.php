<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="padding-top: 10px;background-color: #efefef;color: black">
	<a href="?controller=prod&action=add"><button type="button" class="btn btn-primary">Thêm</button></a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên hàng</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Giảm giá</th>
				<th>Ảnh</th>
				<th>Nhóm</th>
				<th>Mô tả</th>
				<th>Thời gian</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count = 0;
				//duyet mang users
				foreach ($prods as $v) {
					$count++;
				?>
					<tr>
						<td align="center"><?=$count?></td>
						<td><?=$v->getName()?></td>
						<td><?=$v->getQuantity()?></td>
						<td><?=$v->getPrice()?></td>
						<td><?=$v->getDiscountPrice()?></td>
						<td><img src="image/<?=$v->getImage()?>" width="100px"></td>
						<td><?=$v->getCateName()?></td>
						<td><?=$v->getDescription()?></td>
						<td><?=$v->getCreateDate()?></td>
						<td>
							<button class="btn btn-warning" type="button" onclick="xoa(this.id)" id="<?=$v->getId()?>">Xóa</button>  <a href="?controller=prod&action=edit&id=<?=$v->getId()?>"><button type="button" class="btn btn-info">Sửa</button></a>  

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
				window.location.href="?controller=prod&action=delete&id="+id;
			}
		}
</script>