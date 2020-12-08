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

	$id = $_GET['id'];
	$data = $Banner->deletebanner($id);
	header('location:fetchall.php');
}

