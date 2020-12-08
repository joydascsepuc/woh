    <!--Markup for header-->
    <?php
    include_once('templates/header.php');
    use Woh\front\Front;
    use Woh\utility\Utility;
    $Front = new Front();
    $Cables = $Front->getallcables();
    $datalimit = 3;
    $cabledata = array_chunk($Cables, $datalimit, true);
    ?>

    <!--Product SSection-->
    <div class="container-fluid p-5">
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


    <!--Markup for foter-->
    <?php

    include_once('templates/footer.php');

    ?>

    <script type="text/javascript">

        document.getElementById("search-btn").onclick = function () {

            if(document.getElementById("search-text").style.width == "9rem"){
                document.getElementById("search-text").style.width = "0";
            }else{
                document.getElementById("search-text").style.width = "9rem";
            }
        }


    </script>

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

