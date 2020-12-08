<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\category\Category;


$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{
	$id = $_GET['id'];
	$Category = new Category();

	$data = $_POST;
	$data = $Category->fetchacategory($id);
	$_SESSION['category'] = $data;

	$url = Utility::AdminWebView;
	header('location:'.$url.'editcategory.php');
}





