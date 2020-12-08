<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
?>
    <!--Markup for header-->
    <?php
    include_once('templates/header.php');
    $details =  $_SESSION['productdetailsforuser'];
    $category = $details['category'];
    $folder = Utility::FrontAseets;

    if($category === 'WirelessHeadphone'){            
        $path = $folder."img/wireless/".$details['img'];
        //var_dump($path);
    }elseif($category === 'WireHeadphone'){                
        $path = $folder."img/SONY/".$details['img'];
        //var_dump($path);
    }else{              
        $path = $folder."img/cables/".$details['img'];
        //var_dump($path);
    }

    $discount = $details['discount'];
    $price = $details['price'];

    if($discount === "0"){
        $aftercalculation = $details['price'];
    }else{
        $primary = ($discount*$price);
        $secondary = $primary/100;
        $aftercalculation = $price - $secondary;    
    }
     


    ?>


    <!--Product details-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12"> HOME &GT HEADPHONES &GT WIRELESS </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="product-caoursel">
                        <div class="carousel-item active"> <img class="d-block w-100" src="<?=$path?>" alt="First slide"> </div>
                        <div class="carousel-item"> <img class="d-block w-100" src="<?=Utility::FrontAseets?>img/SONY/Untitled-2.png" alt="Second slide"> </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
            </div>
            <div class="col-md-5">
                <div class="row ml-1">
                    <h3><?=$details['title'];?></h3>
                </div>
                <div class="row ml-1">
                    <h1><i class="fa fa-inr" aria-hidden="true"></i><?=$aftercalculation?></h1>
                    &nbsp; &nbsp;
                    <h3><del><?=$details['price'];?></del></h3>
                    &nbsp; &nbsp;
                    <h2 class="text-success"><?=$details['discount']; ?>% off</h2>
                </div>
                <div class="row ml-1">
                    <h5 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></h5>
                    &nbsp; &nbsp;
                    <h5>1200 star rating  and 250 reviews</h5>
                </div>
                <div class="row ml-1">
                    <p></i> <strong>Bank Offer</strong> 20% Instant Discount on EXIM Credit Cards</p>
                    <p></i> <strong>Bkash Offer</strong> 5% Unlimited Instant Cashback on Bkash Payment</p>
                </div>
                <div class="row ml-1">
                    <h4>Colors: &nbsp; &nbsp; </h4>
                    <a class="btn btn-danger text-light"> red</a>&nbsp; <a class="btn btn-info text-light"> blue </a> &nbsp; <a class="btn btn-warning text-light"> yellow</a>
                </div>
                <div class="row ml-1">
                    <h4>Seller: &nbsp; &nbsp;</h4>
                    <p style="font-size: 18px" class="pt-1"><?=$details['supplier']; ?></p>
                </div>
                <div class="">
                    <button class="btn btn-outline-primary"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
                    <button class="btn btn-outline-primary"><i class="fas fa-heart"></i>Add as Favourite</button>
                </div>
                </div>

            <div class="col-md-3">

                <p class="text-muted font-weight-bold">Delivery Options</p>

                <div class="row">
                    <div class="col">
                        <p><i class="fas fa-location-arrow"></i> Chittagong, Chittagong North, Chasma Pahar R\A</p>
                    </div>
                    <div class="col">
                        <a href="#" class="text-uppercase">Change</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p><i class="fas fa-home"></i> Home Delivery<span class="text-muted"><br>&nbsp; &nbsp;&nbsp; 1 -4 days</span></p>
                    </div>
                    <div class="col">
                        <p class="text-muted">Free</p>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <p><i class="fas fa-dollar-sign"></i> Cash on Delivery Available</p>
                    </div>
                </div>

                <hr class="text-white">

                <p class="text-muted font-weight-bold">Return & Warranty</p>
                <div class="row">
                    <div class="col">
                        <p><i class="fas fa-undo"></i> 7 days Returns<span class="text-muted"><br>&nbsp;&nbsp;&nbsp; Change of mind is not applicable</span></p>
                        <!--<p class="text-muted p-0 pl-4 m-0">Change of mind is not applicable</p>-->
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p><i class="fas fa-shield-alt"></i> Warranty not available</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--Product Description-->
    <section>
        <div class="container-fluid">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Details</a>
                    <a class="nav-item nav-link" id="nav-additionalInformation-tab" data-toggle="tab" href="#nav-additionalInformation" role="tab" aria-controls="nav-profile" aria-selected="false">Additional Information</a>
                    <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review">Reviews(4)</a>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container">
                        <h2 class="font-italic mb-5">Description</h2>
                        <?=$details['description']; ?>

                        <br>
                        <div class="ml-5">
                            <ul>
                                <li>Name: <?=$details['title']; ?></li>
                                <li>Model: <?=$details['product_id']; ?></li>
                                <li>Device name: <?=$details['title']; ?></li>
                                <li>Color: black > White > Yellow</li>
                                <li>Bluetooth solution: V5.0</li>
                                <li>supporting agreement: HFP,HSP,A2DP, AVRCP</li>
                                <li>Operating distance: *S10M</li>
                                <li>Call time: «6-7h(60% volume)</li>
                                <li>Earphone capacity: 60mAh/3.7V</li>
                                <li>Suitable for: Compatible with all wireless devices</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-additionalInformation" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container">
                        <h2 class="font-italic mb-5">Additional Information</h2>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Subject</th>
                                <th scope="col">Info</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Weight</td>
                                <td>0.2kg</td>
                            </tr>
                            <tr>
                                <td>Line Length</td>
                                <td>None</td>
                            </tr>
                            <tr>
                                <td>With Microphone</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Plug Type</td>
                                <td>Wiress</td>
                            </tr>
                            <tr>
                                <td>Resistance</td>
                                <td>32</td>
                            </tr>
                            <tr>
                                <td>Wireless Type</td>
                                <td>Bluetooth</td>
                            </tr>
                            <tr>
                                <td>Connectors</td>
                                <td>None</td>
                            </tr>
                            <tr>
                                <td>Frequency Response Rate</td>
                                <td>20-20000Hz</td>
                            </tr>
                            <tr>
                                <td>Volume Control</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Music Time</td>
                                <td>Up to 6 hours</td>
                            </tr>
                            <tr>
                                <td>Call Time</td>
                                <td>Up to 4 hours</td>
                            </tr>
                            <tr>
                                <td>Base Capacity</td>
                                <td>2000mAh</td>
                            </tr>
                            <tr>
                                <td>Connect Distance</td>
                                <td>About 10 M</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                    <div class="container">
                        <h2 class="font-italic mb-5">Reviews</h2>

                        <div class="review">
                            <!--Review 1-->
                            <div class="row">
                                <div class="col-md-1">
                                    <img class="review-img img-fluid" src="img/PEOPLES/1.jpg">
                                </div>
                                <div class="col-md-9">
                                    <p class="font-weight-bold text-danger">Joy Das</p>
                                    <p class="review-comment font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum esse libero nam officia optio quia repellendus sed vero voluptate voluptates?</p>
                                </div>
                                <div class="col-md-2">
                                    <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                                </div>
                            </div>

                            <!--Review 2-->
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <img class="review-img img-fluid" src="img/PEOPLES/2.jpg">
                                </div>
                                <div class="col-md-9">
                                    <p class="font-weight-bold text-danger">Xaved Hossain</p>
                                    <p class="review-comment font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum esse libero nam officia optio quia repellendus sed vero voluptate voluptates?</p>
                                </div>
                                <div class="col-md-2">
                                    <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                                </div>
                            </div>

                            <!--Review 3-->
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <img class="review-img img-fluid" src="img/PEOPLES/3.jpg">
                                </div>
                                <div class="col-md-9">
                                    <p class="font-weight-bold text-danger">Animesh Bhowmick</p>
                                    <p class="review-comment font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum esse libero nam officia optio quia repellendus sed vero voluptate voluptates?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque deleniti et eum, fugit iusto optio quis quos velit veritatis?</p>
                                </div>
                                <div class="col-md-2">
                                    <i class="far fa-star"></i></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                                </div>
                            </div>

                            <!--Review 4-->
                            <div class="row mt-3">
                                <div class="col-md-1">
                                    <img class="review-img img-fluid" src="img/PEOPLES/4.jpg">
                                </div>
                                <div class="col-md-9">
                                    <p class="font-weight-bold text-danger">Rajat Das</p>
                                    <p class="review-comment font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum esse libero nam officia optio quia repel</p>
                                </div>
                                <div class="col-md-2">
                                    <i class="far fa-star"></i></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Similar Products-->
    <section style="margin-top: 100px">
        <div class="container-fluid">
            <h2 class="font-weight-bold mb-5">Similar Products</h2>
            <!--1st-->
            <div class="card-deck">
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img" src="<?=Utility::FrontAseets?>img/SONY/Untitled-1.png"
                             alt="image-1">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>HeadBand</h5>
                        <h4 class="card-title"><strong><a href="product.php">Z1R Premium Headphones</a></strong></h4>

                        <!--Rating-->
                        <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>

                        <!--Description-->
                        <ul>
                            <li>High-Resolution Audio compatible</li>
                            <li>40mm HD driver unit with aluminium-coated LCP</li>
                            <li>Φ4.4mm balanced connection compatible</li>
                        </ul>
                        <p class="card-text">The Way The Artists Truly Intended</p>

                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="float-left">249$</span>
                            <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                        </div>

                    </div>
                    <!--/.Card content-->
                </div>

                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img" src="<?=Utility::FrontAseets?>img/SONY/Untitled-2.png"
                             alt="image-1">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>HeadBand</h5>
                        <h4 class="card-title"><strong><a href="">MDR-Z7M2 Headphone</a></strong></h4>

                        <!--Rating-->
                        <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>

                        <!--Description-->
                        <ul>
                            <li>High-Resolution Audio compatible</li>
                            <li>40mm HD driver unit with aluminium-coated LCP</li>
                            <li>Φ4.4mm balanced connection compatible</li>
                        </ul>
                        <p class="card-text">The Way The Artists Truly Intended</p>

                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="float-left">749$</span>
                            <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                        </div>

                    </div>
                    <!--/.Card content-->

                </div>
                <div class="card card-cascade card-ecommerce wide">

                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img" src="<?=Utility::FrontAseets?>img/SONY/Untitled-3.png"
                             alt="image-1">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>HeadBand</h5>
                        <h4 class="card-title"><strong><a href="">WH-1000XM3 Wireless</a></strong></h4>

                        <!--Rating-->
                        <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>

                        <!--Description-->
                        <ul>
                            <li>High-Resolution Audio compatible</li>
                            <li>40mm HD driver unit with aluminium-coated LCP</li>
                            <li>Φ4.4mm balanced connection compatible</li>
                        </ul>
                        <p class="card-text">The Way The Artists Truly Intended</p>

                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="float-left">98$</span>
                            <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                        </div>

                    </div>
                    <!--/.Card content-->
                </div>
            </div>

            <!--2nd-->
            <div class="card-deck">
                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img" src="<?=Utility::FrontAseets?>img/SONY/Untitled-4.png"
                             alt="image-1">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>HeadBand</h5>
                        <h4 class="card-title"><strong><a href="">MDR-1AM2 Headphones</a></strong></h4>

                        <!--Rating-->
                        <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>

                        <!--Description-->
                        <ul>
                            <li>High-Resolution Audio compatible</li>
                            <li>40mm HD driver unit with aluminium-coated LCP</li>
                            <li>Φ4.4mm balanced connection compatible</li>
                        </ul>
                        <p class="card-text">The Way The Artists Truly Intended</p>

                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="float-left">79$</span>
                            <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                        </div>

                    </div>
                    <!--/.Card content-->
                </div>

                <div class="card card-cascade card-ecommerce wider">
                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img" src="<?=Utility::FrontAseets?>img/SONY/Untitled-5.png"
                             alt="image-1">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>HeadBand</h5>
                        <h4 class="card-title"><strong><a href="">WH-H910N h.ear on 3</a></strong></h4>

                        <!--Rating-->
                        <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>

                        <!--Description-->
                        <ul>
                            <li>High-Resolution Audio compatible</li>
                            <li>40mm HD driver unit with aluminium-coated LCP</li>
                            <li>Φ4.4mm balanced connection compatible</li>
                        </ul>
                        <p class="card-text">The Way The Artists Truly Intended</p>

                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="float-left">549$</span>
                            <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                        </div>

                    </div>
                    <!--/.Card content-->

                </div>
                <div class="card card-cascade card-ecommerce wide">

                    <!--Card image-->
                    <div class="view view-cascade overlay">
                        <img class="card-img" src="<?=Utility::FrontAseets?>img/SONY/Untitled-6.png"
                             alt="image-1">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Category & Title-->
                        <h5>HeadBand</h5>
                        <h4 class="card-title"><strong><a href="">WH-H900N h.ear on 2</a></strong></h4>

                        <!--Rating-->
                        <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>

                        <!--Description-->
                        <ul>
                            <li>High-Resolution Audio compatible</li>
                            <li>40mm HD driver unit with aluminium-coated LCP</li>
                            <li>Φ4.4mm balanced connection compatible</li>
                        </ul>
                        <p class="card-text">The Way The Artists Truly Intended</p>

                        <!--Card footer-->
                        <div class="card-footer">
                            <span class="float-left">349$</span>
                            <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                        </div>

                    </div>
                    <!--/.Card content-->
                </div>
            </div>

        </div>
    </section>


    <!--Markup for foter-->
    <?php

    include_once('templates/footer.php');

    ?>

    <!--Alert JavaScript-->
    <script type="text/javascript">


        document.getElementById("reset").onclick = function () {

            var name = document.getElementById("forgotPasswordNameInput").value;
            var email = document.getElementById("forgotPasswordEmailInput").value;
            var password = document.getElementById("forgotPasswordPasswordInput").value;

            if((name && email && password) !== ""){
                document.getElementById("show").style.display="";
            }else {
                document.getElementById("show").style.display="none";
            }
        }
    </script>

    <script type="text/javascript">

        document.getElementById("search-btn").onclick = function () {

            if(document.getElementById("search-text").style.width == "9rem"){
                document.getElementById("search-text").style.width = "0";
            }else{
                document.getElementById("search-text").style.width = "9rem";
            }
        }


    </script>


