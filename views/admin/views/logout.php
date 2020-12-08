<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");

unset($_SESSION['category']);
unset($_SESSION['allcategories']);
unset($_SESSION['singleemployeeforedit']);
unset($_SESSION['allemployee']);
unset($_SESSION['singleemployee']);
unset($_SESSION['singleproduct']);
unset($_SESSION['pendingproducts']);
unset($_SESSION['allusers']);


$_SESSION["adminloginstatus"] = "false";
header("Location: http://localhost/woh/index.php");