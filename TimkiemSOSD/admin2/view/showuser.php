<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="padding-top: 10px;background-color: #efefef;color: black">
	<a href="?controller=user&action=add"><button type="button" class="btn btn-primary">Thêm</button></a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên đăng nhập</th>
				<th>Mật khẩu đăng nhập</th>
				<th>Quyền</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count = 0;
				//duyet mang users
				foreach ($users as $v) {
					$count++;
					if($v->getURight()==1){
						$quyen = "admin";
					}
					else{
						$quyen = "user";
					}
					echo '<tr>';
					echo '<td>'.$count.'</td>';
					echo '<td>'.$v->getUName().'</td>';
					echo '<td>'.$v->getUPass().'</td>';
					echo '<td>'.$quyen.'</td>';
					echo '<td><button type="button" onclick="xoa(this.id)" class="btn btn-warning" id="'.$v->getId().'">Xóa</button>  <a href="?controller=user&action=edit&id='.$v->getId().'"><button type="button" class="btn btn-primary">Sửa</button></a></td>';
					echo '</tr>';
				}
			?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
		function xoa(id){
			var tl = confirm("Bạn có muốn xóa thật không");
			if(tl){
				window.location.href="?controller=user&action=delete&id="+id;
			}
		}
</script>