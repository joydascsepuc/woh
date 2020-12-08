<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $users =  $_SESSION['allusers']; ?>

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
					<th>Serial</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Username</th>
					<th>Usertype</th>
					<th>Mobile</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($users as $user): ?>
				<tr>
					<td><?=$i; ?></td>
					<td><?=$user['firstname']; ?></td>
					<td><?=$user['lastname']; ?></td>
					<td><?=$user['email']; ?></td>
					<td><?=$user['username']; ?></td>
					<td><?=$user['usertype']; ?></td>
					<td><?=$user['mobile']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>














		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>