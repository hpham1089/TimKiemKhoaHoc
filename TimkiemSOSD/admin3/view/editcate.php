<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="background-color: #efefef;color:black;padding-top:10px">
	<form action="?controller=cate&action=update" method="post" class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-3" for="name">Tên nhóm:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" placeholder="Nhập vào tên nhóm mới" value="<?=$cate->getName()?>">
    </div>
  </div>
  		<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Sửa</button>
    </div>
		</div>
		<input type="hidden" name="id" value="<?=$cate->getId()?>">
</form>
</div>