<?php
session_start();
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
use Woh\usercontrol\Users;
use Woh\front\Front;

$id = $_GET['id'];
$Front = new Front();
$data = $Front->getproductdetails($id);
$_SESSION['productdetailsforuser'] = $data;


header("location:product.php");
?>
