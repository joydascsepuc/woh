<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>

<?php $products =  $_SESSION['products']; ?>


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
		<table class="table text-center" id="datatable">
			<thead>
				<tr>
					<th>Serial</th>
					<th>Title</th>
					<th>Product ID</th>
					<th>Category</th>
					<th>Price</th>
					<th>Discount</th>
					<th>Supplier</th>
					<th>Is Active</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $j=1; ?>
				<?php foreach ($products as $product): ?>
				<tr>
					<td><?=$j;?></td>
					<td><a href="<?=Utility::AdminFetch?>products/fetchsingle.php?id=<?=$product['id']; ?>"><?=$product['title']; ?></a></td>
					<td><?=$product['product_id']; ?></td>
					<td><?=$product['category']; ?></td>
					<td><?=$product['price']; ?></td>
					<td><?=$product['discount']; ?></td>
					<td><?=$product['supplier']; ?></td>
					<td><?=$product['is_active']; ?></td>
					<td><a href="<?=Utility::AdminFetch?>products/edit.php?id=<?=$product['id']; ?>"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="<?=Utility::AdminFetch?>products/delete.php?id=<?=$product['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
				</tr>
				<?php $j++;?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

























		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>