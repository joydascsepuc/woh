<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
use Woh\usercontrol\Users;
use Woh\front\Front;
?>

<?php 
    
    $Front = new Front();
    $Banners = $Front->getallbanners();
    $WireHeadphones = $Front->getallwireheadphones();
    $WirelessHeadphones = $Front->getallwireless();
    $Cables = $Front->getallcables();

   /* var_dump($WireHeadphones);*/
    
    $datalimit = 3;
    $wiredata = array_chunk($WireHeadphones, $datalimit, true);
    $wirelessdata = array_chunk($WirelessHeadphones, $datalimit, true); 
    $cabledata = array_chunk($Cables, $datalimit, true);

    // var_dump($wiredata);  
    
?>

    <!--Markup for header-->
    <?php
        include_once('templates/header.php');
    ?>


    <!--Coursel Section-->
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $j=1; ?>
                <?php foreach($Banners as $banner): ?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?=$j;?>" class="<?php if($j==1) echo 'active'; ?>"></li>
                <?php $j++; ?>
                <?php endforeach; ?>
            </ol>
            <div class="carousel-inner">
                <?php $i=1; ?>
                <?php foreach($Banners as $banner): ?>
                <?php
                    $folder = Utility::SeeBanners;
                    $path = $folder.$banner['img'];                 
                ?>
                <div class="carousel-item <?php if($i==1) echo 'active'; ?>">
                    <img src="<?=$path;?>" class="d-block w-100" alt="<?=$banner['alt']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="font-weight-bold text-danger"><?=$banner['title']; ?></h5>
                        <p class="font-weight-bold text-danger"><?=$banner['comment']; ?></p>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!--Items Sections-->
    <div class="container mt-5">

        <nav class="align-items-center mb-5 border-danger">
            <div class="nav nav-tabs " id="nav-tab" role="tablist">

                <a class="nav-item nav-link active text-uppercase" id="nav-home-tab" data-toggle="tab" href="#headband" role="tab" aria-controls="nav-home" aria-selected="true" style="color: black">
                    <i class="fas fa-headset pl-4 fa-2x"></i>
                    <br>
                    <span class="text-uppercase font-weight-bold">headband</span></a>

                <a class="nav-item nav-link text-uppercase" id="nav-profile-tab" data-toggle="tab" href="#wireless" role="tab" aria-controls="nav-profile" aria-selected="false" style="color: black">
                    <i class="fas fa-headphones-alt fa-2x pl-4"></i>
                    <br>
                    <span class="font-weight-bold text-uppercase">wireless</span>
                </a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#cables" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: black">
                    <i class="fas fa-plug fa-2x pl-3"></i>
                    <br>
                    <span class="font-weight-bold text-uppercase">cables</span>
                </a>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="headband" role="tabpanel" aria-labelledby="nav-home-tab">

                <!--<h2 class="text-primary text-center text-uppercase font-weight-bold mb-3">Headbands</h2>-->
                <!--1st-->
                <!-- 1st break -->
                <?php $firstcount = 0; ?>
                <?php foreach($wiredata as $wiredatum): ?>
                <div class="card-deck">
                    <!-- 2nd Break -->
                    <?php foreach($wiredatum as $wirehead): ?>
                        <?php 
                            $folder = Utility::FrontAseets;
                            $path = $folder."img/SONY/".$wirehead['img'];

                        ?>
                    <div class="card card-cascade card-ecommerce wider">
                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img class="card-img" src="<?=$path?>"
                                 alt="product-img">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center">
                            <!--Category & Title-->
                            <h5>HeadBand</h5>
                            <h4 class="card-title"><strong><a href="details.php?id=<?=$wirehead['id'];?>"><?=$wirehead['title']; ?></a></strong></h4>

                            <!--Rating-->
                            <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>

                            <!--Description-->
                            <?=$wirehead['description'];?>
                            <!-- <ul>
                                <li>High-Resolution Audio compatible</li>
                                <li>40mm HD driver unit with aluminium-coated LCP</li>
                                <li>Φ4.4mm balanced connection compatible</li>
                            </ul> -->
                            <p class="card-text"><?=$wirehead['comment'];?></p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left"><?=$wirehead['price'];?></span>
                                <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" href="addtocart.php?id=<?=$wirehead['id'];?>" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                            </div>

                        </div>
                        <!--/.Card content-->
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php $firstcount++; ?>
                <?php if($firstcount == 2){
                    break;
                } ?>
                <?php endforeach; ?>

            

            </div>
            <div class="tab-pane fade" id="wireless" role="tabpanel" aria-labelledby="nav-profile-tab">

                <!--1st One-->
                <!-- 1st Break -->
                <?php foreach($wirelessdata as $wirelessdatum): ?>
                <div class="card-deck">
                    <!-- 2nd Break -->
                    <?php foreach($wirelessdatum as $wirelesshead): ?>
                        <?php 
                            $folder = Utility::FrontAseets;
                            $path = $folder."img/wireless/".$wirelesshead['img'];
                            /*var_dump($path);*/
                        ?>
                    <div class="card card-cascade card-ecommerce wider">
                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img class="card-img" src="<?=$path;?>"
                                 alt="wireless-img">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center">
                            <!--Category & Title-->
                            <h5>WireLess</h5>
                            <h4 class="card-title"><strong><a href="details.php?id=<?=$wirelesshead['id'];?>"><?=$wirelesshead['title']; ?></a></strong></h4>

                            <!--Rating-->
                            <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>

                            <!--Description-->
                            <?=$wirelesshead['description']; ?>
                            <p class="card-text"><?=$wirelesshead['comment'];?></p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left"><?=$wirelesshead['price'];?></span>
                                <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" href="addtocart.php?id=<?=$wirelesshead['id'];?>" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                            </div>

                        </div>
                        <!--/.Card content-->
                    </div>
                <?php endforeach; ?>
                    
                </div>
            <?php endforeach; ?>

            </div>



            <div class="tab-pane fade" id="cables" role="tabpanel" aria-labelledby="nav-contact-tab">

                <!--1st-->
                <!-- 1st Break; -->
                <?php foreach($cabledata as $cabledatum): ?>
                <div class="card-deck">
                    <!-- 2nd Break -->
                    <?php foreach($cabledatum as $cabledetails): ?>
                    <?php 
                        $folder = Utility::FrontAseets;
                        $path = $folder."img/cables/".$cabledetails['img'];
                        /*var_dump($path);*/
                    ?>
                    <div class="card card-cascade card-ecommerce wider">
                        <!--Card image-->
                        <div class="view view-cascade overlay">
                            <img class="card-img" src="<?=$path; ?>"
                                 alt="Cable-Img">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade text-center">
                            <!--Category & Title-->
                            <h5>Cable</h5>
                            <h4 class="card-title"><strong><a href="details.php?id=<?=$cabledetails['id'];?>"><?=$cabledetails['title'];?></a></strong></h4>

                            <!--Rating-->
                            <ul class="rating justify-content-center" style="list-style: none; display: flex;">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="far fa-star"></i></li>
                            </ul>

                            <!--Description-->
                            <?=$cabledetails['description']; ?>
                            <p class="card-text"><?=$cabledetails['comment'];?></p>

                            <!--Card footer-->
                            <div class="card-footer">
                                <span class="float-left"><?=$cabledetails['price'];?></span>
                                <span class="float-right">
        <a data-toggle="tooltip" data-placement="top" href="addtocart.php?id=<?=$cabledetails['id'];?>" title="Add to Cart"><i class="fas fa-shopping-cart mr-3"></i></a>
        <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
        <a class="active" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
      </span>
                            </div>

                        </div>
                        <!--/.Card content-->
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            
            </div>

        </div>

    </div>


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

