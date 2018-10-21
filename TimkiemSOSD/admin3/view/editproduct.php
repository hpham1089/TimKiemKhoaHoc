<div class="col-sm-3">
	<?php
		require_once('menu.php');
	?>

</div>
<div class="col-sm-9" style="background-color: #efefef;color:black;padding-top:10px">
	<form action="?controller=prod&action=update" method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label col-sm-3" for="name">Tên hàng:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên nhóm" value="<?=$prod->getName()?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="quantity">Số lương:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Nhập số lượng" value="<?=$prod->getQuantity()?>">
    </div>

  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="price">Giá bán:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá bán" required="true" value="<?=$prod->getPrice()?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="discountPrice">Giảm giá:</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="discountPrice" name="discountPrice" placeholder="Nhập giá giảm" value="<?=$prod->getDiscountPrice()?>">
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
              if($v->getName()==$prod->getCateName()){
                $st = "selected";
              }
              else{
                $st = "";
              }
              echo '<option value="'.$v->getId().'"'.$st.'>'.$v->getName().'</option>';
          }
        ?>
      </select>
    </div>
  </div>
     <div class="form-group">
    <label class="control-label col-sm-3" for="description">Mô tả:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="4" id="description" name="description"><?=$prod->getDescription()?></textarea>
    </div>
    
  </div>
  
  	<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Sửa</button>
    </div>
		</div>
    <input type="hidden" name="id" value="<?=$prod->getId()?>">
</form>
</div>