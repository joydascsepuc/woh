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

	<!-- Add Employee Section -->
	<div style="padding: 30px !important;">
		<form action="controllers/employee/addemployee.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="title">Name</label>
					    <input type="text" name="name" class="form-control" id="title" placeholder="Name of Employee" required>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
				    <label for="productid">Email</label>
				    <input type="text" name="email" class="form-control" id="productid" placeholder="Email Address">
				  </div>
				</div>
			</div>
		  
		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
				      <label for="category">Gender</label>
				      <select id="category" class="form-control" name="gender" required>
				        <option selected>Choose...</option>
				        <option value="Male">Male</option>
				        <option value="Female">Female</option>
				        <option value="Other">Other</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="price">Mobile *</label>
					    <input type="text" name="mobile" class="form-control" id="price" placeholder="Mobile " required>
					</div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
				      <label for="position">Position</label>
				      <select id="position" class="form-control" name="position" required>
				        <option selected>Choose...</option>
				        <option value="Site Manager">Site Manager</option>
				        <option value="Developer">Developer</option>
				        <option value="Watch Man">Watch Man</option>
				        <option value="Delivery Boy">Delivery Boy</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="discount">Salary</label>
					    <input type="text" name="salary" class="form-control" id="discount" placeholder="Salary">
					</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
				      <label for="isactive">Is Active</label>
				      <select id="isactive" class="form-control" name="isactive" required>
				        <option selected>Choose...</option>
				        <option value="1">Active</option>
				        <option value="0">Not-Active</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<label for="picture">Employee Picture</label>
                    <input type="file" class="form-control-file" id="picture" placeholder="" name="picture" value="">
		  		</div>
		  		<div class="col">
		  			<label for="picture1">ID Card Picture</label>
                    <input type="file" class="form-control-file" id="picture1" placeholder="" name="idcardpicture" value="">
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-12">
		  			<label for="description">Address</label>
					<textarea name="address" id="description" class="form-control ckeditor" style="height: 70px !important;"></textarea>
		  		</div>
		  	</div>

		  	<div class="row mt-4">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  			<button type="submit" class="btn btn-block btn-outline-primary">Add Employee</button>
		  		</div>
		  		<div class="col-4"></div>

		  	</div>
		  	
		</form>
	</div>
		

	
			




































		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>