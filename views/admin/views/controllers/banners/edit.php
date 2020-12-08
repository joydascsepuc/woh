<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\banners\Banner;


$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{
	$id = $_GET['id'];
	$Banner = new Banner();

	$data = $_POST;
	$data = $Banner->fetchabanner($id);
	$_SESSION['singlebanner'] = $data;

	$url = Utility::AdminWebView;
	header('location:'.$url.'editslider.php');
}


