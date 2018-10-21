<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="background-color: #efefef;color:black;padding-top:10px">
	<form action="?controller=prod&action=insert" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-sm-3" for="name">Tên hàng:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên nhóm">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="quantity">Số lương:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Nhập số lượng" value="0">
    </div>

  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="price">Giá bán:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá bán" required="true">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="discountPrice">Giảm giá:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="discountPrice" name="discountPrice" placeholder="Nhập giá giảm" value="0">
    </div>
    
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="image">Hình ảnh:</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" id="image" name="image">
    </div>
    
  </div>
   <div class="form-group">
    <label class="control-label col-sm-3" for="cate">Nhóm hàng:</label>
    <div class="col-sm-9">
      <select class="form-control" name="cate" id="cate">
        <?php
          foreach ($cates as $v) {
              echo '<option value="'.$v->getId().'">'.$v->getName().'</option>';
          }
        ?>
      </select>
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-3" for="description">Mô tả:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="4" id="description" name="description"></textarea>
    </div>
    
  </div>
  
  	<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
		</div>
</form>
</div>