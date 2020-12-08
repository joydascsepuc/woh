<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
use Woh\front\Front;
?>

<?php
	
	$Front = new Front();
    $data = $Front->getallsummary();

   	$products = $data['products'];
   	$activeproducts = $data['activeproducts'];
   	$pending = $data['pending'];
   	$carts = $data['carts'];
   	$orders = $data['orders'];
   	$users = $data['users'];

   	/*var_dump($users);*/
?>

<style type="text/css">
	i{
		position: relative;
		top: 4px !important;
	}
</style>


<?php include_once('templates/header.php'); ?>
<?php
	$check = $_SESSION['adminloginstatus'];
	if($check === "false"){
		Utility::redirect("http://localhost/woh/index.php");
	} 
?>

		<div class="col-md-10 justify-content-center">

			<div class="container">
				<div class="row mt-5">
					<div class="col-md-4">
						<table>
							<tr>
								<td class="font-weight-bold" style="font-size: 2rem;">Current Time:&nbsp;</td>
							<div>
						  	  <td id="Hour" class = "clock"></td>
							  <td id="Minut" class = "clock"></td>
							  <td id="Second" class = "clock"></td>	  
							</div>
							</tr>
						</table> 
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<p class="font-weight-bold" style="font-size: 2rem;">Today is: <?php echo "" . date("d/m/Y") . "<br>"; ?></p>
					</div>
				</div>
			</div>

			<div style="padding: 0 2.1rem 1rem 2.1rem;" class="text-center">
				<div class="" style="display: flex; position: relative;">
					<div class="" style="background-color: #5ac3ed; width: 100%; height: 9rem; margin-top: 2rem;  border-radius: 0 10px; position: relative; right: 8px;">
						<p class="information text-dark text-center" id="tophead">Total Number of Products
							<br><?=$products;?></p>
					</div>
					<!-- <div class="" style="padding: 0px !important;"></div> -->
					<div class="" style="position: relative; left: 8px; background-color: #F86891; width: 100%; height: 9rem; margin-top: 2rem;  border-radius: 0 10px;">
						<p class="information text-dark text-center" id="tophead">Active Numbers of products<br><?=$activeproducts?></p>
					</div>
				</div>
			</div>

			<div id="dashboard">
				<div class="row text-center">
				<div class="col design" style="background-color: #49DB98;">
					<p class="information"><i class="fas fa-align-center fa-2x"></i>&nbsp;Active Users : 1</p>
				</div>
				<div class="col design" style="background-color: #F86891;">
					<p class="information"><i class="fas fa-skiing-nordic fa-2x"></i>&nbsp;Customers : <?=$users?></p>
				</div>
				<div class="col design" style="background-color: #49DB98;">
					<p class="information"><i class="fas fa-edit fa-2x"></i>&nbsp;Moderators: 0</p>
				</div>
			</div>

			<div class="row text-center">
				<div class="col design" style="background-color: #F86891;">
					<p class="information"><i class="fas fa-truck fa-2x"></i>&nbsp;Pending Delivery : <?=$pending?></p>
				</div>
				<div class="col design" style="background-color: #49DB98;">
					<p class="information"><i class="fas fa-shopping-basket fa-2x"></i>&nbsp;Carts Number: <?=$carts?></p>
				</div>
				<div class="col design" style="background-color: #F86891;">
					<p class="information"><i class="fas fa-hands-helping fa-2x"></i>&nbsp;Ordered Number :<?=$orders;?></p>
				</div>
			</div>
			</div>

			
			<div style="padding: 1rem 2.1rem 1rem 2.1rem; " class="text-center">
				<div class="" style="display: flex; position: relative;">
					<div class="" style="background-color: #49DB98; width: 100%; height: 9rem;  border-radius: 10px 0; padding: 0px !important; position: relative; right: 8px;">
						<p class="information text-dark text-center" id="tophead">Total Admins<br>1</p>
					</div>
					<!-- <div class="col-1" style="padding: 0px !important;"></div> -->
					<div class="col-6" style="background-color: #5ac3ed; width: 100%; height: 9rem;  border-radius: 10px 0; padding: 0 !important; position: relative; left: 8px;">
						<p class="information text-dark text-center" id="tophead">Total Users<br><?=$users?></p>
					</div>
				</div>
			</div>
	






		</div>
	</div>
</div>




<?php include_once('templates/footer.php'); ?>