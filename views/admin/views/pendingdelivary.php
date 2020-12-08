<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $products =  $_SESSION['pendingproducts']; ?>

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
					<th>Delivary Status</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $product): ?>
				<tr>					
					<td><?=$product['product_name']; ?></td>
					<td><?=$product['product_id']; ?></td>
					<td><?=$product['product_price']; ?></td>
					<td><?=$product['product_category']; ?></td>
					<td><?=$product['customer_name']; ?></td>
					<td><?=$product['customer_username']; ?></td>
					<td><?=$product['delivary_status']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

























		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>