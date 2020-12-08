<?php
session_start();
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
use Woh\usercontrol\Users;
use Woh\front\Front;

$id = $_GET['id'];
$Front = new Front();
$product = $Front->getproductdetails($id);
// $_SESSION['productdetailsforuser'] = $data;
// $customername = $_SESSION['name'];
// $username = $_SESSION['username'];
// $mobileno = $_SESSION['mobile'];

$data = array(

	'product_name' => $product['title'],
	'product_id' => $product['product_id'],
	'product_price' => $product['price'],
	'product_category' => $product['category'],
	'img' => $product['img'],
	'product_discount' => $product['discount'],
	'customer_name' => $_SESSION['name'],
	'customer_username' => $_SESSION['username'],
	'customer_mobile_no' => $_SESSION['mobile']
);

$addtocart = $Front->addtocart($data);

header("location:index.php");
?>