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

	$data = $_POST;
	$data = $Category->fetchallcategory();
	$_SESSION['allcategories'] = $data;
	/*var_dump($data);*/

	$url = Utility::AdminWebView;
	// var_dump($url);
	header('location:'.$url.'viewallcategories.php');



}


