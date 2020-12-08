<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $employee =  $_SESSION['singleemployee']; ?>

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

	<div style="padding: 30px !important;">
		<dl>	
			<dt>Name</dt>
			<dd><?php echo $employee['name']; ?></dd>

			<dt>Email</dt>
			<dd><?php echo $employee['email']; ?></dd>

			<dt>Mobile</dt>
			<dd><?php echo $employee['mobile']; ?></dd>
			
			<dt>Position</dt>
			<dd><?php echo $employee['position']; ?></dd>

			<dt>Gender</dt>
			<dd><?php echo $employee['gender']; ?></dd>

			<dt>Active Status</dt>
			<dd><?php echo $employee['is_active']; ?></dd>

			<dt>Salary</dt>
			<dd><?php echo $employee['salary']; ?></dd>

			<dt>Address</dt>
			<dd><?php echo $employee['address']; ?></dd>

			<?php
				$folder = Utility::EmployeeAsset;
				$pathofdp = $folder."dp/".$employee['emppicture'];
				$pathofid = $folder."idcard/".$employee['empidcardpicture'];					
			?>

			<div class="row">
				<div class="col-md-5">
					<dt class="mb-2">Employee Picture</dt>
	      			<dd>
	        			<img src="<?=$pathofdp;?>" class = "img-fluid" style = "height: 50%; width: 100%;" alt = "Image not found.">    
	      			</dd>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-5">
					<dt class="mb-2">Employee ID Card Picture</dt>
	      			<dd>
	        			<img src="<?= $pathofid;?>" class = "img-fluid" style = "height: 50%; width: 100%;" alt = "Image not found.">    
	      			</dd>
				</div>
			</div>
		</dl>
	</div>




















		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>