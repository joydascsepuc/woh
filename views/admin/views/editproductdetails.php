<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $product =  $_SESSION['singleproduct']; ?>

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

		<!-- Edit Product Section -->
	<div style="padding: 30px !important;">
		<form action="controllers/products/update.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group">
					    <label for="title">Product Title</label>
					    <input type="text" value="<?=$product['title'];?>" name="title" class="form-control" id="title" placeholder="Name of Product" required>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
				    <label for="productid">Product ID</label>
				    <input type="text" value="<?=$product['product_id'];?>" name="productid" class="form-control" id="productid" placeholder="Product's ID" required>
				  </div>
				</div>
				<div class="col">
					<div class="form-group">
				    <label for="comment">Comment</label>
				    <input type="text" value="<?=$product['comment'];?>" name="comment" class="form-control" id="comment" placeholder="Product's Comment" required>
				  </div>
				</div>
			</div>
		  
		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
				      <label for="category">Category</label>
				      <?php $options=$product['category'];?>
				      <select id="category" class="form-control" name="category" required>
				        <option selected value="">Choose...</option>
				        <option value="WirelessHeadphone" <?php if($options=="WirelessHeadphone") echo 'selected="selected"'; ?>>Wireless</option>
				        <option value="WireHeadphone" <?php if($options=="WireHeadphone") echo 'selected="selected"'; ?>>Wire</option>
				        <option value="Cable" <?php if($options=="Cable") echo 'selected="selected"'; ?>>Cable</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="price">Price</label>
					    <input type="text" value="<?=$product['price'];?>" name="price" class="form-control" id="price" placeholder="Price: " required>
					</div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
					    <label for="discount">Discount</label>
					    <input type="text" value="<?=$product['discount'];?>" name="discount" class="form-control" id="discount" placeholder="Discount: ">
					</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col">
		  			<div class="form-group">
					    <label for="supplier">Supplier</label>
					    <input type="text" name="supplier" value="<?=$product['supplier'];?>" class="form-control" id="supplier" placeholder="Supplier: " required>
					</div>
		  		</div>
		  		<div class="col">
		  			<div class="form-group">
				      <label for="isactive">Is Active</label>
				      <?php $options=$product['is_active'];?>
				      <select id="isactive" class="form-control" name="isactive" required>
				        <option selected value="">Choose...</option>
				        <option value="1" <?php if($options=="1") echo 'selected="selected"'; ?>>Active</option>
				        <option value="0" <?php if($options=="0") echo 'selected="selected"'; ?>>Not-Active</option>
				      </select>
			        </div>
		  		</div>
		  		<div class="col">
		  			<label for="picture">Product Picture</label>
                    <input type="file" class="form-control-file" id="picture" placeholder="" name="picture" value="">
                    <input type="hidden" name="imgname" value="<?=$product['img'];?>">
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-12">
		  			<label for="description">Description</label>
					<textarea name="description" id="description" class="form-control ckeditor" style="height: 70px !important;"><?=$product['description']; ?></textarea>
		  		</div>
		  	</div>
		  	<input type="hidden" name="id" value="<?=$product['id'];?>">
		  	<div class="row mt-4">
		  		<div class="col-4"></div>
		  		<div class="col-4">
		  			<button type="submit" class="btn btn-block btn-outline-primary">Update Product Info</button>
		  		</div>
		  		<div class="col-4"></div>
		  	</div>
		  	
		</form>
	</div>


















		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>