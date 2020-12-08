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
	$data = $_POST;
	$result = $user->updateInformation($data);
	$url = Utility::AdminWebView;
	if($result){
	    header('location:index.php');
	    // echo "updated";
	}else{
	     // header('location:fetchall.php');
		echo "not updated";
	}

}


