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

	$id = $_GET['id'];
	/*var_dump($id);*/
	$data = $Employee->fetchsingleemployee($id);
	var_dump($data);
	$_SESSION['singleemployee'] = $data;


	$url = Utility::AdminWebView;

	header('location:'.$url.'viewemployeedetails.php');
}

