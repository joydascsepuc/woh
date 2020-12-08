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

	<!-- Add Product Section -->
	<div style="padding: 30px !important;">
		<form action="controllers/products/addproduct.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="title">Product Title</label>
					    <input type="text" name="title" class="form-control" id="title" placeholder="Name of Product" required>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
				    <label for="productid">Product ID</label>
				    <input type="text" name="productid" class="form-control" id="productid" placeholder="Product's ID" required>
				  </div>
				</div>
				<div class="col">
					<div class="form-group">
				    <label for="comment">Comment</label>
				    <input type="text" name="comment" class="form-control" id="comment" placeholder="Product's Comment" required>
				  </div>
				</div>
			</div>
		  
		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
				      <label for="category">Category</label>
				      <select id="category" class="form-control" name="category" required>
				        <option selected>Choose...</option>
				        <option value="WirelessHeadphone">Wireless</option>
				        <option value="WireHeadphone">Wire</option>
				        <option value="Cable">Cable</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="price">Price</label>
					    <input type="text" name="price" class="form-control" id="price" placeholder="Price: " required>
					</div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="discount">Discount</label>
					    <input type="text" name="discount" class="form-control" id="discount" placeholder="Discount: ">
					</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
					    <label for="supplier">Supplier</label>
					    <input type="text" name="supplier" class="form-control" id="supplier" placeholder="Supplier: " required>
					</div>
		  		</div>
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
		  			<label for="picture">Product Picture</label>
                    <input type="file" class="form-control-file" id="picture" placeholder="" name="picture" value="" required>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-12">
		  			<label for="description">Description</label>
					<textarea name="description" id="description" class="form-control ckeditor" style="height: 70px !important;"></textarea>
		  		</div>
		  	</div>

		  	<div class="row mt-4">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  			<button type="submit" class="btn btn-block btn-outline-primary">Add Product</button>
		  		</div>
		  		<div class="col-4"></div>

		  	</div>
		  	
		</form>
	</div>
		

	
			




































		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>