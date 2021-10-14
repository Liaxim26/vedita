<?php 
	require_once('connection.php');
	include 'CProduct.php';

	$product = new CProduct();

 	$data = $_POST;
	$action = $data["action"];
	$product_id = $data["id"];

	if ($action == 'setInvisible'){
		$product->setInvisible($product_id);
	} elseif ($action == 'increaseQuantity'){
		$product->increaseQuantity($product_id);
	} elseif  ($action == 'decreaseQuantity'){
		$product->decreaseQuantity($product_id);
	}


 ?>