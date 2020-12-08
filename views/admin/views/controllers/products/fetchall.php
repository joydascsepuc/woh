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

	$data = $_POST;
	$data = $Products->fetchallproducts();
	$_SESSION['products'] = $data;
	/*var_dump($data);*/

	$url = Utility::AdminWebView;
	// var_dump($url);
	header('location:'.$url.'viewallproducts.php');
}




