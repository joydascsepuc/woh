<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;

$check = $_SESSION['adminloginstatus'];
if($check === "false"){
	Utility::redirect("http://localhost/woh/index.php");
}else{
	Utility::redirect("views/");	
}

?>