<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\banners\Banner;

$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{
	$Banner = new Banner();

	$data = $Banner->fetchallbanners();
	$_SESSION['allbanners'] = $data;

	$url = Utility::AdminWebView;
	header('location:'.$url.'viewallbanners.php');
}
