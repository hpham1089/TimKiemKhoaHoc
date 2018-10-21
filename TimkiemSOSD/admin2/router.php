<?php
//đầu vào cho router là 2 biến $controller và $action được lấy từ index.php
	function call($c,$a){
		require_once('controller/'.$c.'_controller.php');
		switch($c){
			case 'page':
			$c = new PageController();
			break;
			case 'user':
			include_once('model/user_model.php');
			$c = new UserController();
			break;
			case 'cate':
			include_once('model/cate_model.php');
			$c = new CateController();
			break;
			case 'prod':
			include_once('model/cate_model.php');
			include_once('model/prod_model.php');
			$c = new ProdController();
			break;
			case 'sta':
			include_once('model/order_model.php');
			include_once('model/orderdetails_model.php');
			$c = new StaController();
			break;

		}
		$c->{$a}();
	}
	$controllers=['page'=>['home','error'],'user'=>['view','insert','edit','update','delete','login','logout','add'],'cate'=>['view','insert','edit','update','delete','add'],'prod'=>['view','insert','edit','update','delete','add'],'sta'=>['order','details','delete','update']];
	if(array_key_exists($controller,$controllers)){//controller la hop le
		if(in_array($action,$controllers[$controller])){//action hop le
			call($controller,$action);
		}
		else{//action khong hop le
			call('page','error');
		}

	}
	else{//controller khong hop le
		call('page','error');
	}

?>