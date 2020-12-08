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

	<!-- Add Slider Section -->
	<div style="padding: 30px !important;">
		<form action="controllers/banners/addbanner.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="title">Title*</label>
					    <input type="text" name="title" class="form-control" id="title" placeholder="Title of Slider" required>
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="Comment">Comment*</label>
					    <input type="text" name="comment" class="form-control" id="comment" placeholder="Comment" required>
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="alt">Img Alt</label>
					    <input type="text" name="alt" class="form-control" id="alt" placeholder="Alt of Image:">
					</div>
				</div>
				<div class="col">
		  			<label for="picture">Picture*</label>
                    <input type="file" class="form-control-file" id="picture" placeholder="" name="picture" value="" required>
		  		</div>				
			</div>

		  	<div class="row mt-4">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  			<button type="submit" class="btn btn-block btn-outline-primary">Add Slider</button>
		  		</div>
		  		<div class="col-4"></div>

		  	</div>
		  	
		</form>
	</div>




















		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>