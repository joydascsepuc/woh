<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\employee\Employee;



$check = $_SESSION['adminloginstatus'];

if($check === "false"){
	header("location:http://localhost/woh/index.php");
}else{

	$Employee = new Employee();

	$data = $_POST;

	$result = $Employee->addemployee($data);
	$url = Utility::AdminWebView;
	if($result){
	     echo "<script type='text/javascript'>alert('Employee Added');</script>";
	     header('location:fetchall.php');
	}else{
	     echo "<script type='text/javascript'>alert('Employee not Added');</script>";
	     header('location:fetchall.php');
	}
	
}

