<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>

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


	<!-- Add Category Section -->
	<div style="padding: 30px !important;">
		<form action="controllers/category/addcategory.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="title">Name</label>
					    <input type="text" name="name" class="form-control" id="title" placeholder="Title of Category" required>
					</div>
				</div>				
			</div>

		  	<div class="row mt-4">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  			<button type="submit" class="btn btn-block btn-outline-primary">Add Category</button>
		  		</div>
		  		<div class="col-4"></div>

		  	</div>
		  	
		</form>
	</div>























		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>