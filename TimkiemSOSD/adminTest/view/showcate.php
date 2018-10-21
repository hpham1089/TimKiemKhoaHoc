<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="padding-top: 10px;background-color: #efefef;color: black">
	<a href="?controller=cate&action=add"><button type="button" class="btn btn-primary">Thêm</button></a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên nhóm</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count = 0;
				//duyet mang users
				foreach ($cates as $v) {
					$count++;
				?>
					<tr>
						<td align="center"><?=$count?></td>
						<td><?=$v->getName()?></td>
						<td>
							<button class="btn btn-warning" type="button" onclick="xoa(this.id)" id="<?=$v->getId()?>">Xóa</button>  <a href="?controller=cate&action=edit&id=<?=$v->getId()?>"><button type="button" class="btn btn-info">Sửa</button></a>  

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
				window.location.href="?controller=cate&action=delete&id="+id;
			}
		}
</script>