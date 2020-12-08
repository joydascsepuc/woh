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

	$data = $_POST;

	$result = $Banner->updatebanner($data);

	if($result){
	    echo "<script type='text/javascript'>alert('Banner Updated.');</script>";
	    header('location:fetchall.php');
	}else{
	    echo "<script type='text/javascript'>alert('Banner Not Updated');</script>";
	    header('location:fetchall.php');
	}

}

