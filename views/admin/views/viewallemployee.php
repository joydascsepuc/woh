<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $employees =  $_SESSION['allemployee']; ?>


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

	<!-- View all Employee -->
	<div style="padding: 30px !important;">
		<table class="table" id="datatable">
			<thead>
				<tr>					
					<th>Name</th>
					<th>Mobile</th>
					<th>Position</th>
					<th>Gender</th>
					<th>Is Active</th>
					<th>Salary</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($employees as $employee): ?>
				<tr>
					
					<td><a href="<?=Utility::AdminFetch?>employee/fetchsingle.php?id=<?=$employee['id']; ?>"><?=$employee['name']; ?></a></td>
					<td><?=$employee['mobile']; ?></td>
					<td><?=$employee['position']; ?></td>
					<td><?=$employee['gender']; ?></td>
					<td><?=$employee['is_active']; ?></td>
					<td><?=$employee['salary']; ?></td>
					<td><a href="<?=Utility::AdminFetch?>employee/edit.php?id=<?=$employee['id']; ?>"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="<?=Utility::AdminFetch?>employee/delete.php?id=<?=$employee['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
















		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>