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
	$data = $Products->deleteproduct($id);



	$url = Utility::AdminWebView;

	header('location:fetchall.php');
}

