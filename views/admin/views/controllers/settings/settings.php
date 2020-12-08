<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\UserControl\UserControl;

$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{
	$user = new UserControl();

	$data = $user->settings();
	$_SESSION['settings'] = $data;

	$url = Utility::AdminWebView;
	header('location:'.$url.'settings.php');
}
