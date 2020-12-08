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

	$id = $_GET['id'];
	/*var_dump($id);*/
	$data = $Products->fetchsingleproduct($id);
	var_dump($data);
	$_SESSION['singleproduct'] = $data;


	$url = Utility::AdminWebView;

	header('location:'.$url.'viewproductdetails.php');

}

