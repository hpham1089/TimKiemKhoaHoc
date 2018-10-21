<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.nen{
  		background-color: blue;
  		color:white;
  		min-height: 150px;
  	}
  	.giua{
  		min-height: 500px;
  		background-color: black;
  		color:white;
  	}
  </style>
</head>
<body>
<?php
	session_start();//khoi dong phien lam viec
?>
<div class="container-fluid">
	<div class="row nen">
		<div class="col-sm-12">
			<h1>Đây là banner</h1>
		</div>
	</div>
	<div class="row giua">
		<?php
			include_once('router.php');
		?>
	</div>
	<div class="row nen">
		<div class="col-sm-12">
			<h1>Đây là footer</h1>
		</div>
	</div>
</div>
</body>
</html>