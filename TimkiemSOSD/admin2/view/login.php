<form action="?controller=user&action=login" method="post" class="form-horizontal">
	 <div class="form-group">
    <label class="control-label col-sm-2" for="uname">Tên đăng nhập:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="uname" name="uname" placeholder="Nhập tên đăng nhập">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="upass">Mật khẩu đăng nhập:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="upass" name="upass" placeholder="Nhập mật khẩu đăng nhập">
    </div>
  </div>
	
	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </div>
  </div>
</form>