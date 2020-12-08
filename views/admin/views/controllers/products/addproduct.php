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

	$result = $Products->addproduct($data);
	$url = Utility::AdminWebView;
	if($result){
	     echo "<script type='text/javascript'>alert('Product Added');</script>";
	    header('location:fetchall.php');
	}else{
	     echo "<script type='text/javascript'>alert('Product not Added');</script>";
	     header('location:fetchall.php');
	}
}


