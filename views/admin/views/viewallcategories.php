<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $categories =  $_SESSION['allcategories']; ?>


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
		<table class="table"  id="datatable">
			<thead>
				<tr>
					<th>Serial</th>
					<th>Category Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($categories as $category): ?>
				<tr>
					<td><?=$i; ?></td>
					<td><?=$category['name']; ?></td>
					<td><a href="<?=Utility::AdminFetch?>category/edit.php?id=<?=$category['id']; ?>"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="<?=Utility::AdminFetch?>category/delete.php?id=<?=$category['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
					<?php $i++; ?>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>























		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>