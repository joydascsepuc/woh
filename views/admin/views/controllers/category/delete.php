<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\category\Category;

$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{
	$Category = new Category();

	$id = $_GET['id'];
	$data = $Category->deletecategory($id);

	// $url = Utility::AdminWebView;

	header('location:fetchall.php');
}


