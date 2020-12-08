<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
use Woh\registerUser;
use Woh\register;
use Woh\front\Front;
?>
<?php include_once('templates/header.php'); ?>

<?php   
    $Front = new Front();
    $carts = $Front->getcartitems();
    $number = count($carts);

    /*var_dump($carts);*/
    /*var_dump($number);*/
?>

<div class="col-md-10 justifly-content-center">
	<h5 class="display-5 font-weight-bold text-danger">Check Out Page</h5>
	<div class="container-fluid">
		<div class="row">
			<div class="col-8">
				<?php $subtotal = 0; ?>
                <?php foreach($Carts as $cart): ?>
	        	<?php 
                    $folder = Utility::FrontAseets;
                    $_category = $cart['product_category'];
                     if($_category === 'WirelessHeadphone'){            
                        $path = $folder."img/wireless/".$cart['img'];
                        //var_dump($path);
                    }elseif($_category === 'WireHeadphone'){                
                        $path = $folder."img/SONY/".$cart['img'];
                        //var_dump($path);
                    }else{              
                        $path = $folder."img/cables/".$cart['img'];
                        //var_dump($path);
                    }
	            ?>
					<div class="row">
						<div class="col-4 mt-3">
							<img src="<?=$path?>" alt = "Checkout Image" style = "width: 200px; height: 200px;">
						</div>
						<div class="col" style="position: relative; top: 50px">
							<label for="quantity">Quantity</label>
							<input type="number" class="form-control" name="quantity" id="quantity" value="1" style="width: 100px; height: 40px;">
						</div>
						<div class="col-4" style="position: relative; top: 60px">
							Price : <input type="text" name="price" id="price" value="<?=$cart['product_price']?>" readonly>
							<?php

								$price = $cart['product_price'];
								$subtotal += $price;

							?>
						</div>
					</div>
				<?php endforeach;?>
			</div>
			<div class="col-4" style="position: relative; left: 15%">
				<hr style="border: 2px solid blue">
				<h5 class="font-weight-bold text-success text-center">Summary</h5>
				<table class="table table-striped">
                            <thead>
                            	<tr>
                                <th scope="col">Name.</th>
                                <th scope="col">Price</th>
                            	</tr>
                            </thead>
                            <tbody>
	                            <tr>
	                                <td>Subtotal</td>
	                                <td><?=$subtotal;?></td>
	                            </tr>
	                            <tr>
	                                <td>Discount</td>
	                                <td>0</td>
	                            </tr>
	                            <tr>
	                                <td>Shipping</td>
	                                <td>60</td>
	                            </tr>
	                            <br>
	                            <tr>
	                                <td class="text-danger font-weight-bold text-uppercase" style="font-size: 30px !important;">Total</td>
	                                <?php $total = $subtotal+60; ?>
	                                <td><?=$total; ?></td>
	                            </tr>
	                            <tr>
	                            	<td colspan="2"><button class="btn btn-primary btn-block">Confirm Checkout</button></td>
	                            </tr>
                            </tbody>
                        </table>
                        <hr style="border: 2px solid blue">

			</div>
		</div>
	</div>






		</div>
	</div>
</div>

<?php include_once('templates/footer.php'); ?>


<!-- <script type="text/javascript">

	function changePrice(priceforone){
	  var primaryprice = priceforone;
	  var quantity = document.getElementById(quantity).value;

	  var price = primaryprice * quantity;

	  document.getElementById("price").value = price;
	}

</script> -->