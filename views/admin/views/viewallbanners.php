<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
<?php include_once('templates/header.php'); ?>
<?php $banners =  $_SESSION['allbanners']; ?>


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
					<th>Title</th>
					<th>Comment</th>
					<th>Alt</th>
					<th>Image</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; ?>
				<?php foreach ($banners as $banner): ?>
				<tr>
					<td><?=$i; ?></td>
					<td><?=$banner['title']; ?></td>
					<td><?=$banner['comment']; ?></td>
					<td><?=$banner['alt']; ?></td>
					<?php
						$folder = Utility::SeeBanners;
						$path = $folder.$banner['img'];					
					?>
					<td><img src="<?=$path;?>" class="img-fluid" style = "height: 100px; width: 300px;" alt = "<?=$banner['alt']; ?>">  </td>
					<td><a href="<?=Utility::AdminFetch?>banners/edit.php?id=<?=$banner['id']; ?>"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="<?=Utility::AdminFetch?>banners/delete.php?id=<?=$banner['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
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