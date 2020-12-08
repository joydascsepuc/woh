<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $carts =  $_SESSION['cartitems']; ?>

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
		<table class="table" id="datatable">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Product ID</th>
					<th>Price</th>
					<th>Category</th>
					<th>C. Name</th>
					<th>Username</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($carts as $cart): ?>
				<tr>					
					<td><?=$cart['product_name']; ?></td>
					<td><?=$cart['product_id']; ?></td>
					<td><?=$cart['product_price']; ?></td>
					<td><?=$cart['product_category']; ?></td>
					<td><?=$cart['customer_name']; ?></td>
					<td><?=$cart['customer_username']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

























		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>