<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"]."/Woh/vendor/autoload.php");
use Woh\Utility\Utility;
use Woh\UserControl\UserControl;

$UserControl = new UserControl();

$data = $_POST;

//var_dump($data);
$result = $UserControl->loginUser($data);
// var_dump($result);
if($result){
    //echo "Login Success.";
    $admintype = $result['usertype'];
    if($admintype === "admin"){
    	$_SESSION['adminloginstatus'] = "true";
        $_SESSION['adminusername'] = $result['username'];
    	Utility::redirect("http://localhost/woh/views/admin/views/index.php");
    }elseif($admintype === "user"){
    	$_SESSION['loginstatus'] = "true";
        $_SESSION['name'] = $result['firstname'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['mobile'] = $result['mobile'];

   		Utility::redirect("http://localhost/woh/views/front/views/index.php");
    }else{
    	$_SESSION['loginstatus'] = "false";
    	$_SESSION['adminloginstatus'] = "false";
    }
    
	}else{
		/*$_SESSION['loginstatus'] = "false";
        $_SESSION['adminloginstatus'] = "false";*/
	    print "<script type='text/javaScript'> alert('Login failed.'); </script>";
	    Utility::redirect("http://localhost/woh/index.php");
	    //print_r($result);
	}


?>