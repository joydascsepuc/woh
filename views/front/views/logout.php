<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\utility\Utility;
$_SESSION['loginstatus'] = "false";
//Utility::ProjectPath('/index.php');
Utility::redirect("http://localhost/woh/views/front/views/index.php");
?>