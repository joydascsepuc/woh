

    <!--Markup for header-->
    <?php

    include_once('templates/header.php');

    ?>


    <!--About Section-->
    <section>
        <div class="container-fluid">
            <div id="background1">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4" id="middle">
                        <h2 class="font-weight-bold text-danger">WoH Corporation</h2>
                        <a href="#" class="btn btn-outline-danger font-weight-bold" title="het to know us">Get to know us</a>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>


        <div class="container mt-3">
            <div id="background2">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 bg-white p-2 text-center mt-5 pt-5">
                        <h2 class="font-weight-bold text-dark">WoH Purpose & Values</h2>
                        <p class="text-dark font-weight-bold">Fill the world with emotion,through the power of creativity and technology</p>
                        <a href="#" class="btn btn-outline-dark font-weight-bold" title="learn More">Learn More</a>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>


        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 p-5 ">
                    <h2 class="text-dark font-weight-bold text-center">WoH In Asia Pacific</h2>
                    <p class="text-dark">WoH is one of the most recognised global brands for consumer electronics thanks to its legacy of remarkable innovation and quality. In Asia, WoH is helmed as one of Asia Pacific’s most valued brands.  With a brand presence in Asia Pacific for more than 60 years, WoH continues to raise the bar with its spirit of innovation to produce quality consumer products in Asia Pacific and beyond.</p>
                </div>
                <div class="col-md-6">
                    <img src="../../../resource/front/img/aboutpage/banner3.webp" class="img-fluid p-5">
                </div>
            </div>
        </div>


        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="../../../resource/front/img/aboutpage/banner4.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-dark font-weight-bold pt-5">Corporate Social Responsibility</h2>
                    <p class="text-dark pl-0">The WoH Group recognises that its businesses have direct and indirect impact on the communities in which we operate. Find out how WoH is contributing towards being a positive global citizen..</p>
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

<!--Customize JS-->
<script type="text/javascript">

    document.getElementById("search-btn").onclick = function () {

        if(document.getElementById("search-text").style.width == "9rem"){
            document.getElementById("search-text").style.width = "0";
        }else{
            document.getElementById("search-text").style.width = "9rem";
        }
    }


</script>

