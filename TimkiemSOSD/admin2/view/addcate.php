<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="background-color: #efefef;color:black;padding-top:10px">
	<form action="?controller=cate&action=insert" method="post" class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-3" for="name">Tên nhóm:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên nhóm">
    </div>
  </div>
  	<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
		</div>
</form>
</div>