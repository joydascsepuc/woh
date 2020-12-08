<?php
session_start();
include_once ("vendor/autoload.php");
use Woh\utility\Utility;
/*$_SESSION['loginstatus'] = "false";
$_SESSION['adminloginstatus'] = "false";*/
$adminloginstatus = $_SESSION['adminloginstatus'];
$userloginstatus = $_SESSION['loginstatus'];
var_dump($adminloginstatus);
if($adminloginstatus === "true"){
	$_SESSION['adminloginstatus'] = "true";
}else{
	$_SESSION['adminloginstatus'] = "false";
}

if($userloginstatus === "true"){
	$_SESSION['loginstatus'] = "true";
}else{
	$_SESSION['loginstatus'] = "false";
}
// var_dump($status);
Utility::redirect("views/front/index.php");
?>