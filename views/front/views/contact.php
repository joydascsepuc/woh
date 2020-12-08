
<!--Markup for header-->
<?php

include_once('templates/header.php');

?>

<!--Main Section-->
<div class="container-fluid mt-5" style="background-color: #F8F9FA">
    <div class="row">
        <div class="col-md-6 p-2">
            <h2 class="text-primary">Attention new Customers</h2>
            <div class="p-2">
                <p class="font-weight-bold text-secondary"><span class="text-secondary"><br>Dear,<br><br></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid architecto aut dolore eum ex magnam neque quae qui! Ab accusamus, esse ex facilis incidunt nemo nesciunt non officiis quibusdam velit. Aut eos magnam nobis nostrum repudiandae temporibus unde voluptates voluptatibus? Aperiam error explicabo maiores minus quidem. Atque, nisi voluptates! Accusamus atque consectetur distincti</p>

                <p class="font-weight-bold text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iusto nulla pariatur perspiciatis quos ratione, reiciendis rem sint voluptate? Autem delectus enim hic id, ipsam iure, libero magnam nesciunt, omnis possimus qui quo repudiandae! Aut beatae cum cumque error expedita porro recusandae, reprehenderit rerum soluta veniam? Delectus impedit sapiente unde.</p>
                <br>
                <p class="font-weight-bold text-secondary">Regards,<br><span style="font-size: 16px">WoH Team</span></p>
            </div>
        </div>
        <div class="col-md-6 p-2">
            <h2 class="text-primary">Contact Us</h2>
            <form id="Myform" class="contact-form p-3" method="post" name="ContactForm" action="send_form_email.php">

                <div class="form-group">
                    <label for="name" class="lable font-weight-bold">Name</label>
                    <input type="text" class="form-control form border-secondary" id="name" name="name" placeholder="Your Name">
                </div>

                <div class="form-group">
                    <label for="subject" class="lable font-weight-bold">Subject</label>
                    <input type="text" id="subject" class="form-control form  border-secondary" name="subject" placeholder="Subject">
                </div>

                <div class="form-group">
                    <label for="email" class="lable font-weight-bold">Email</label>
                    <input type="text" id="email" class="form-control form  border-secondary" name="email" placeholder="Your Email: ">
                </div>

                <div class="form-group">
                    <label for="message" class="lable font-weight-bold">Message</label>
                    <textarea class="form-control form  border-secondary" id="message" name="message" rows="3"></textarea>
                </div>

                <div class="text-center">

                    <button class="btn btn-outline-secondary align-middle" type="submit" name="submit" value="submit" id="btn">Send Message</button>

                </div>

            </form>
        </div>
    </div>
</div>


<!--Map Section-->
<div class="container-fluid">
    <div id="googleMap" style="width:100%;height:500px;"></div>
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

<!--Map Script-->
<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(22.3384,91.83168),
            zoom:10,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgCUihHjhdzOLA3ckMjZK-XDULFcSPlYM&callback=myMap"></script>




