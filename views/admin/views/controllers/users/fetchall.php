<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\UserControl\UserControl;


$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{

	$UserControl = new UserControl();

	$data = $_POST;
	$data = $UserControl->fetchallusers();
	$_SESSION['allusers'] = $data;

	$url = Utility::AdminWebView;

	header('location:'.$url.'viewalluser.php');
	
}

