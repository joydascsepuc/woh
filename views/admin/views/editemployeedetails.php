<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $employee =  $_SESSION['singleemployeeforedit']; ?>
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

	<!-- Edit Employee Section -->
	<div style="padding: 30px !important;">
		<form action="controllers/employee/update.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="title">Name</label>
					    <input type="text" value="<?=$employee['name'];?>" name="name" class="form-control" id="title" placeholder="Name of Employee" required>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
				    <label for="productid">Email</label>
				    <input type="text" name="email" value="<?=$employee['email'];?>" class="form-control" id="productid" placeholder="Email Address">
				  </div>
				</div>
			</div>
		  
		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
				      <label for="category">Gender</label>
				      <?php $options=$employee['gender'];?>
				      <select id="category" class="form-control" name="gender" required>
				        <option selected value="">Choose...</option>
				        <option value="Male" <?php if($options=="Male") echo 'selected="selected"'; ?> >Male</option>
				        <option value="Female" <?php if($options=="Female") echo 'selected="selected"'; ?> >Female</option>
				        <option value="Other" <?php if($options=="Other") echo 'selected="selected"'; ?> >Other</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="price">Mobile *</label>
					    <input type="text" name="mobile" value="<?=$employee['mobile'];?>" class="form-control" id="price" placeholder="Mobile " required>
					</div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
				      <label for="position">Position</label>
				      <?php $options=$employee['position'];?>
				      <select id="position" class="form-control" name="position" required>
				        <option selected value="">Choose...</option>
				        <option value="Site Manager" <?php if($options=="Site Manager") echo 'selected="selected"'; ?> >Site Manager</option>
				        <option value="Developer" <?php if($options=="Developer") echo 'selected="selected"'; ?> >Developer</option>
				        <option value="Watch Man" <?php if($options=="Watch Man") echo 'selected="selected"'; ?> >Watch Man</option>
				        <option value="Delivery Boy" <?php if($options=="Delivery Boy") echo 'selected="selected"'; ?> >Delivery Boy</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="discount">Salary</label>
					    <input type="text" name="salary" value="<?=$employee['salary'];?>" class="form-control" id="discount" placeholder="Salary">
					</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
				      <label for="isactive">Is Active</label>
				      <?php $options=$employee['is_active'];?>
				      <select id="isactive" class="form-control" name="isactive" required>
				        <option selected value="">Choose...</option>
				        <option value="1" <?php if($options=="1") echo 'selected="selected"'; ?> >Active</option>
				        <option value="0" <?php if($options=="0") echo 'selected="selected"'; ?> >Not-Active</option>
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

		  		<input type="hidden" name="oldpic" value="<?=$employee['emppicture'];?>">
		  		<input type="hidden" name="oldidpic" value="<?=$employee['empidcardpicture'];?>">
		  		<input type="hidden" name="id" value="<?=$employee['id'];?>">
		  	</div>

		  	<div class="row">
		  		<div class="col-12">
		  			<label for="description">Address</label>
					<textarea name="address" id="description" class="form-control ckeditor" style="height: 70px !important;"><?=$employee['address'];?></textarea>
		  		</div>
		  	</div>

		  	<div class="row mt-4">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  			<button type="submit" class="btn btn-block btn-outline-primary">Update Employee Details</button>
		  		</div>
		  		<div class="col-4"></div>

		  	</div>
		  	
		</form>
	</div>


















		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>