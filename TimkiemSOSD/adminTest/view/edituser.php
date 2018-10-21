<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="background-color: #efefef;color:black;padding-top:10px">
	<form action="?controller=user&action=update" method="post" class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-3" for="uname">Tên đăng nhập:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="uname" name="uname" placeholder="Nhập tên đăng nhập" value="<?=$user->getUName()?>">
    </div>
  </div>
  <div class="form-group">
		<label class="control-label col-sm-3" for="upass">Mật khẩu đăng nhập:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="upass" name="upass" placeholder="Nhập mật khẩu đăng nhập" value="<?=$user->getUPass()?>">
    </div>
  </div>
	<div class="form-group">
		<label class="control-label col-sm-3" for="uright">Quyền:</label>
    <div class="col-sm-9">
      <select class="form-control" id="uright" name="uright">
      	<option value="1" <?php if($user->getURight()==1) echo "selected";?>>Quản trị</option>
					<option value="2" <?php if($user->getURight()==2) echo "selected";?>>Người dùng</option>
      </select>
    </div>
  </div>		
		
		<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Sửa</button>
    </div>
		</div>
		<input type="hidden" name="id" value="<?=$user->getId()?>">
</form>
</div>