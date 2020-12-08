<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $products =  $_SESSION['singleproduct']; ?>

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
			<dt>Title</dt>
			<dd><?php echo $products['title']; ?></dd>

			<dt>Product ID</dt>
			<dd><?php echo $products['product_id']; ?></dd>

			<dt>Category</dt>
			<dd><?php echo $products['category']; ?></dd>
			
			<dt>Description</dt>
			<dd><?php echo $products['description']; ?></dd>

			<dt>Comment</dt>
			<dd><?php echo $products['comment']; ?></dd>

			<dt>Price</dt>
			<dd><?php echo $products['price']; ?></dd>

			<dt>Discount</dt>
			<dd><?php echo $products['discount']; ?></dd>

			<dt>Supplier</dt>
			<dd><?php echo $products['supplier']; ?></dd>

			<dt>Is Active</dt>
			<dd><?php echo $products['is_active']; ?></dd>

			<dt>Added At</dt>
			<dd><?php echo $products['created_at']; ?></dd>

			<?php
				$folder = Utility::FrontAseets;
				$_category = $products['category'];
				 if($_category === 'WirelessHeadphone'){	    	
			    	$path = $folder."img/wireless/".$products['img'];
			    	//var_dump($path);
			    }elseif($_category === 'WireHeadphone'){		    	
			    	$path = $folder."img/SONY/".$products['img'];
			    	//var_dump($path);
			    }else{		    	
			    	$path = $folder."img/cables/".$products['img'];
			    	//var_dump($path);
			    }
			?>

			<dt>Image</dt>
	      	<dd>
	        <img src="<?= $path;?>" style = "height: 90%; width: 90%; " alt = "Image not found.">    
	      	</dd>
		</dl>
	</div>




















		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>