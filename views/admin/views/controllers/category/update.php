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

	$result = $Category->updatecategory($data);
	$url = Utility::AdminWebView;

	if($result){
	    echo "<script type='text/javascript'>alert('Category Updated.');</script>";
	    header('location:fetchall.php');
	}else{
	    echo "<script type='text/javascript'>alert('Category Not Updated');</script>";
	    header('location:fetchall.php');
	}

}

