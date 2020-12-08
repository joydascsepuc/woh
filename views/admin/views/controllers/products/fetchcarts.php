<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\products\Products;



$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{
	$Products = new Products();

	$data = $Products->fetchcartsdetails(); 
	// var_dump($data);
	// var_dump($data);
	$_SESSION['cartitems'] = $data;


	$url = Utility::AdminWebView;

	header('location:'.$url.'cartItems.php');
}
