<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $data =  $_SESSION['settings']; ?>


<div class="col-md-10 justify-content-center">

	<!-- Time and Date Section -->
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

	<div class="" style="margin-top: 15% !important;">
		<form action="controllers/settings/update.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col">
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" value="<?=$data['firstname']; ?>" class="form-control" id="firstname" placeholder="First Name" required>
			</div>
			<div class="col">
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" value="<?=$data['lastname']; ?>" class="form-control" id="lastname" placeholder="Last Name" required>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<label for="email">Email</label>
				<input type="email" name="email" value="<?=$data['email']; ?>" class="form-control" id="email" placeholder="Email address" required>
			</div>
			<div class="col">
				<label for="mobile">Mobile</label>
				<input type="text" name="mobile" value="<?=$data['mobile']; ?>" class="form-control" id="mobile" placeholder="Mobile Number" required>
			</div>
			<div class="col">
				<label for="password">Password</label>
				<input type="password" name="password" value="<?=$data['password']; ?>" class="form-control" id="passsword" placeholder="Password" required>
			</div>
		</div>

		<div class="row mt-4">
	  		<div class="col-4"></div>
	  		<div class="col-4">
	  			<button type="submit" class="btn btn-block btn-outline-primary">Update Information</button>
	  		</div>
	  		<div class="col-4"></div>
	  	</div>
	  	
	  </form>
	</div>




		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>