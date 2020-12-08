<?php

include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\UserControl\UserControl;

$UserControl = new UserControl();

$data = $_POST;

$result = $UserControl->registerUser($data);

if($result){
    echo "<script type='text/javascript'>alert('Registration Success');</script>";
    header("location:index.php");
}else{
    echo "<script type='text/javascript'>alert('Registration Failed');</script>";
}
