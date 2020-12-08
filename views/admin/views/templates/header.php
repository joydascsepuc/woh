<?php
session_start();
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>

<?php
	$check = $_SESSION['adminloginstatus'];
	if($check === "false"){
		Utility::redirect("http://localhost/woh/index.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DashBoard | Admin Panel</title>

	<script src="<?=Utility::AdminAseets?>ckeditor/ckeditor.js"></script>
	
    <link rel="stylesheet" href="<?=Utility::AdminAseets?>/css/all.css">
    <link rel="stylesheet" href="<?=Utility::AdminAseets?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=Utility::AdminAseets?>/css/animate.css">
    <link rel="stylesheet" href="<?=Utility::AdminAseets?>/css/font.css">
    <link rel="stylesheet" href="<?=Utility::AdminAseets?>/datatable/jquery.dataTables.css">
    <link rel="stylesheet" href="<?=Utility::AdminAseets?>/css/style.css">

    <style type="text/css">

    	input[type="search"]{
		border: 2px solid rgba(98, 101, 228, 1) !important;
		border-radius: 5px 0;
		}

		/*Form er khela*/
		.form-control{
			border:1px solid rgba(98, 101, 228, 1);
			border-radius: 10px 0;
		}

		.form-control:hover{
			border-radius: 0 10px;
		}

		/*Table er khela*/
		/*#datatable{
			padding: 1rem;
			border: 2px solid rgba(98, 101, 228, 1);
			border-radius: 0 15px;
		}*/

		.dropdown-item{
			color: black;
		}

		.nav-item, .nav-link{
			color: black;
		}

		/*a{
			color: #0000FF;
		}

		a:hover{
			color: #FF0000;
		}

		a:visited{
			color: #800080;
		}*/


    </style>


</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<!-- Profile -->
				<div id="profile" class="ml-2 mt-3">
                    <div class="p-1 text-center">
                        <img src="<?=Utility::AdminAseets?>/img/JDPic1.jpg" style="height: 110px; width: 110px; border-radius: 50%;" alt="user-img">
                        <p class="text-primary font-weight-bold" style="color: black !important; font-size: 1.3rem;">Joy Das<br>Position: Admin</p>
                    </div>
	             </div>

	             <div id="navbar" class="mt-5 pt-3">
	             	<nav class="navbar">
	             		<ul class="navbar-nav">
	             			<li class="nav-item">
	             				<a href="<?=Utility::AdminWebView?>index.php" class="nav-link">
	             					<i class="fas fa-chart-pie"></i>
	             					Dashboard 
	             				</a>
	             			</li>
	             			<li class="nav-item dropdown">
	             				<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
	             					<i class="fas fa-sitemap"></i>
	             					Manage Product &nbsp; <i class="fas fa-angle-double-down"></i>
	             				</a>

	             				<div class="dropdown-menu">
	             					<a href="<?=Utility::AdminWebView?>addproduct.php" class="dropdown-item">
	             						<i class="fas fa-plus"></i>
	             						Add Products
	             					</a>
	             					<a href="<?=Utility::AdminFetch?>products/fetchall.php" class="dropdown-item">
	             						<i class="fas fa-eye"></i>
	             						View all Products
	             					</a>
	             					<a href="<?=Utility::AdminFetch?>products/fetchcarts.php" class="dropdown-item">
	             						<i class="fas fa-shopping-cart"></i>
	             						Cart Items
	             					</a>
	             					<a href="<?=Utility::AdminFetch?>products/pendingd.php" class="dropdown-item">
	             						<i class="fas fa-truck"></i>
	             						Pending Delivary
	             					</a>
	             				</div>
	             			</li>
	             			<li class="nav-item dropdown">
	             				<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
	             					<i class="fas fa-sliders-h"></i>
	             					Manage Slider  &nbsp; <i class="fas fa-angle-double-down"></i>
	             				</a>

	             				<div class="dropdown-menu">
	             					<a href="<?=Utility::AdminWebView?>addslider.php" class="dropdown-item">
	             						<i class="fas fa-plus"></i>
	             						Add Slider
	             					</a>
	             					<a href="<?=Utility::AdminFetch?>banners/fetchall.php" class="dropdown-item">
	             						<i class="fas fa-dice"></i>
	             						View All Slider
	             					</a>
	             				</div>
	             			</li>
	             			<li class="nav-item dropdown">
	             				<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
	             					<i class="fas fa-cookie-bite"></i>
	             					Manage Category  &nbsp; <i class="fas fa-angle-double-down"></i>
	             				</a>

	             				<div class="dropdown-menu">
	             					<a href="<?=Utility::AdminWebView?>addcategory.php" class="dropdown-item">
	             						<i class="fas fa-plus"></i>
	             						Add Category
	             					</a>
	             					<a href="<?=Utility::AdminFetch?>category/fetchall.php" class="dropdown-item">
	             						<i class="fas fa-eye"></i>
	             						View All Category
	             					</a>
	             				</div>
	             			</li>
	             			<li class="nav-item dropdown">
	             				<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
	             					<i class="fas fa-users-cog"></i>
	             					Manage Employees  &nbsp; <i class="fas fa-angle-double-down"></i>
	             				</a>

	             				<div class="dropdown-menu">
	             					<a href="<?=Utility::AdminWebView?>addemployee.php" class="dropdown-item">
	             						<i class="fas fa-plus"></i>
	             						Add Employee
	             					</a>
	             					<a href="<?=Utility::AdminFetch?>employee/fetchall.php" class="dropdown-item">
	             						<i class="fas fa-eye"></i>
	             						View all Employee
	             					</a>
	             				</div>
	             			</li>
	             			<li class="nav-item dropdown">
	             				<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
	             					<i class="fas fa-users"></i>
	             					Manage Users  &nbsp; <i class="fas fa-angle-double-down"></i>
	             				</a>

	             				<div class="dropdown-menu">	             					
	             					<a href="<?=Utility::AdminFetch?>users/fetchall.php" class="dropdown-item">
	             						<i class="fas fa-eye"></i>
	             						View all Users
	             					</a>
	             				</div>
	             			</li>
	             			<li class="nav-item">
	             				<a href="<?=Utility::AdminFetch?>settings/settings.php" class="nav-link">
	             					<i class="fas fa-cogs"></i>
	             					Settings
	             				</a>
	             			</li>
	             			<li class="nav-item">
	             				<a href="logout.php" class="nav-link">
	             					<i class="fas fa-sign-out-alt"></i>
	             					Log Out
	             				</a>
	             			</li>
	             		</ul>
	             	</nav>
	             </div>










	        </div>

	
