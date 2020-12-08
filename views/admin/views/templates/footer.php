<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>

<script src="<?=Utility::AdminAseets?>/js/jquery-3.4.1.min.js"></script>
<script src="<?=Utility::AdminAseets?>/js/popper.min.js"></script>
<script src="<?=Utility::AdminAseets?>/js/bootstrap.min.js"></script>
<script src="<?=Utility::AdminAseets?>/js/main.js"></script>
<script src="<?=Utility::AdminAseets?>/js/time.js"></script>
<script src="<?=Utility::AdminAseets?>/datatable/jquery.dataTables.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>


 <!-- For On click -->
<script type="text/javascript">
  $('.nav-item a').on('click', function() {
   
    $('.nav-item').children('.dropdown-menu').slideUp(150);
    
    if ($(this).parent().hasClass("show")) {
      $(this).next('.dropdown-menu').slideUp(150);
    } else {
      $(this).next('.dropdown-menu').slideDown(200);
    }

  });
</script>

 
</body>
</html>