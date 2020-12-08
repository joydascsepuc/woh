<?php
session_start();
include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
use Woh\utility\Utility;
use Woh\registerUser;
use Woh\register;
use Woh\front\Front;
?>

<?php 
    
    $Front = new Front();
    $Carts = $Front->getcartitems();
    $number = count($Carts);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=Utility::FrontAseets?>/css/all.css">
    <link rel="stylesheet" href="<?=Utility::FrontAseets?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=Utility::FrontAseets?>/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Yatra+One&display=swap" rel="stylesheet">
    <script src="<?=Utility::FrontAseets?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?=Utility::FrontAseets?>/js/popper.min.js"></script>
    <script src="<?=Utility::FrontAseets?>/js/bootstrap.min.js"></script>
    <script src="<?=Utility::FrontAseets?>/js/main.js"></script>
    <link rel="stylesheet" href="<?=Utility::FrontAseets?>css/style.css">
    <title>World of HeadPhones | WoF</title>
</head>
<body>

 <header>
       <div id="nav-1">
           <nav class="navbar navbar-expand-none navbar-light bg-light">

               <div><i class="fas fa-phone-alt pr-1"></i><span class=" text-uppercase font-weight-bold">+8801831586368</span></div>
               <div><i class="far fa-envelope pr-1"></i><span class=" font-weight-bold mr-5">joydascsepuc@gmail.com</span></div>


               <?php if($_SESSION["loginstatus"] == "false") { ?>
               <div>
                   <button type="button" data-toggle="modal" data-target="#signinModal" class="btn btn-faded--primary" style="padding: 0">
                       <i class="far fa-user"></i><span class="text-uppercase font-weight-bold ml-2">Sign In</span>
                   </button>
               </div>

           <?php } else{ ?>

               <div>
                    <a href="logout.php" class ="btn" style="border-radius: 10px; text-decoration: none; font-weight: bold;">Logout</a>   
               </div>

           <?php } ?>

           </nav>
       </div>

        <div id="nav-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <a class="navbar-brand" href="index.php"><img src="<?=Utility::FrontAseets?>img/logo.png" style="height: 5rem"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto font-weight-bold">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Utility::FrontWebView?>index.php">Home</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= Utility::FrontWebView?>wireheadphones.php">WireHead-Phones</a>
                                <a class="dropdown-item" href="<?= Utility::FrontWebView?>wireless.php">WireLess-HeadPhones</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= Utility::FrontWebView?>cables.php">Cables</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Utility::FrontWebView?>about.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= Utility::FrontWebView?>contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <div id="search-box">
                        <input id="search-text" type="text" name="" placeholder="Type to search">
                        <a id="search-btn" href="#"><i class="fas fa-search"></i></a>
                    </div>

                    <div>
                        <i class="fas fa-shopping-cart" data-toggle="modal" data-target="#cartModal"></i>
                    </div>

                </div>
            </nav>
        </div>

        <!--Modals-->
        <!--1.Sign In Modal-->
        <div class="modal fade modal-content-right" id="signinModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">

                <div class="modal-content" id="signinContent">
                    <div class="modal-header pb-0">
                        <div>
                            <h3 class="modal-title">Sign in</h3>
                            <em>to your account</em>
                        </div>
                        <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formSignIn" action="login.php" method="post">
                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Username</i>
                <input type="text" class="form-control" name="signinusername" id="signInUserNameInput" placeholder="Username" required>
              </span>
                            </div>
                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Password</i>
                <input type="password" class="form-control" name="signinpassword" id="signInPasswordInput" placeholder="Password" required>
              </span>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberCheck" checked>
                                    <label class="custom-control-label" for="rememberCheck">Remember me</label>
                                </div>
                                <u><a href="#" data-target="#forgotPassword" data-toggle="modal" class="text-primary small" id="showResetContent">Forgot password ?</a></u>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </form>
                        <hr>
                        <p class="font-weight-bold">Don't have an account ? <u><a href="#" id="" data-toggle="modal" data-target="#signUpModal">Sign Up</a></u></p>
                        <hr>
                        <div class="text-center">
                            <p class="font-weight-bold">Or sign in via</p>
                            <button class="btn btn-icon btn-faded-primary rounded-circle" data-toggle="tooltip" title="Facebook" data-container="#signinContent">
                                <a href="#" target="_blank" id="facebook"><i class="fab fa-facebook"></i></a>
                            </button>
                            <button class="btn btn-icon btn-faded-info rounded-circle" data-toggle="tooltip" title="Twitter" data-container="#signinContent">
                                <a href="#" target="_blank" id="linkedId"><i class="fab fa-twitter"></i></a>
                            </button>
                            <button class="btn btn-icon btn-faded-danger rounded-circle" data-toggle="tooltip" title="Google" data-container="#signinContent">
                                <a href="#" id="gmail"><i class="fas fa-envelope"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--2.Cart Modal-->
        <div class="modal fade modal-content-right modal-cart" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom">
                        <h5 class="modal-title" id="cartModalLabel">You have <?=$number; ?> items in your cart</h5>
                        <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body scrollbar-width-thin">
                        <ul class="list-group list-group-flush">
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
                                <li class="list-group-item px-0">
                                    <div class="media">
                                        <a href="#" class="mr-2"><img src="<?=$path;?>" width="150" height="150" alt="Cart-Img"></a>
                                        <div class="media-body">
                                            <a href="#" class="d-block text-body" title="Hanes Hooded Sweatshirt"><?=$cart['product_name'];?></a>
                                            <em class="text-muted">1 * <?=$cart['product_price'];?></em>
                                        </div>
                                        <button class="btn btn-icon btn-sm btn-text-danger rounded-circle" type="button"><a href="deletecartitem.php?id=<?=$cart['id'];?>"><i class="material-icons">Delete</i></a></button>
                                    </div>
                                </li>
                                <?php 
                                    $price = $cart['product_price'];
                                    $subtotal += $price;
                                ?>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                    <div class="modal-footer border-top">
                        <div class="mr-auto">
                            <em>Subtotal</em>
                            <h5 class="mb-0 text-dark font-weight-bold font-condensed"><?=$subtotal;?></h5>
                        </div>
                        <!-- <a href="#" class="btn btn-faded-success">View Cart</a> -->
                        <a href="checkout.php" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            </div>
        </div>



        <!--3.Reset Password modal-->
        <div class="modal" id="forgotPassword" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">

                <div class="modal-content" id="forgotPasswordContent">
                    <div class="modal-header pb-0">
                        <div>
                            <h3 class="modal-title">Reset Password</h3>
                            <em>of your account</em>
                        </div>
                        <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formforgotPassword">

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Your Name</i>
                <input type="text" class="form-control" id="forgotPasswordNameInput" placeholder="Your name" required>
              </span>
                            </div>

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Your e-mail</i>
                <input type="email" class="form-control" id="forgotPasswordEmailInput" placeholder="Email address" required>
              </span>
                            </div>
                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Last Remember Password</i>
                <input type="password" class="form-control" id="forgotPasswordPasswordInput" placeholder="Password" required>
              </span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" id="reset">Get Reset Instruction</button>
                        </form>
                        <hr>
                        <hr>
                        <hr>
                        <div class="text-center">
                            <p class="font-weight-bold">Or sign in via</p>
                            <button class="btn btn-icon btn-faded-primary rounded-circle" data-toggle="tooltip" title="Facebook" data-container="#signinContent">
                                <a href="#" target="_blank" id="forgotPasswordfacebook"><i class="fab fa-facebook"></i></a>
                            </button>
                            <button class="btn btn-icon btn-faded-info rounded-circle" data-toggle="tooltip" title="Twitter" data-container="#signinContent">
                                <a href="#" target="_blank" id="forgotPasswordlinkedId"><i class="fab fa-twitter"></i></a>
                            </button>
                            <button class="btn btn-icon btn-faded-danger rounded-circle" data-toggle="tooltip" title="Google" data-container="#signinContent">
                                <a href="#" id="forgotPasswordgmail"><i class="fas fa-envelope"></i></a>
                            </button>
                        </div>
                        <div id="show" style="display: none;">
                            <p class="text-primary font-weight-bold ml-4">An instruction email has sent. Please check your email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sign Up Modal-->
        <div class="modal" id="signUpModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">

                <div class="modal-content" id="signUpContent">
                    <div class="modal-header pb-0">
                        <div>
                            <h3 class="modal-title">Sign Up</h3>
                            <em>to join our family</em>
                        </div>
                        <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form id="formsignUp" action="registerUser.php" method="post">

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Your First Name</i>
                <input type="text" name="firstname" class="form-control" id="signUpFirstNameInput" placeholder="First Name" required>
              </span>
                            </div>

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Your Last Name</i>
                <input type="text" name="lastname" class="form-control" id="signUpLastNameInput" placeholder="Last name" required>
              </span>
                            </div>

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Your e-mail</i>
                <input type="email" name="registeremail" class="form-control" id="signUpEmailInput" placeholder="Email address" required>
              </span>
                            </div>

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Username</i>
                <input type="text" name="registerusername" class="form-control" id="signUpusername" placeholder="Username" required>
              </span>
                            </div>

                            <div class="form-group">
                <input type="hidden" name="usertype" class="form-control" id="usertype" value="user">
              </span>
                            </div>

                             <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Your Mobile</i>
                <input type="text" name="mobile" class="form-control" id="signUpmobileInput" placeholder="Mobile Number" required>
              </span>
                            </div>

                            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">Password</i>
                <input type="password" name="password" class="form-control" id="signUpPasswordInput" placeholder="Password" required>
              </span>
                            </div>

                            <div class="form-group">
                            <span class="input-icon">
                <i class="material-icons">Confirm Password</i>
                <input type="password" name="confirmpassword" class="form-control" id="signUpConfirmPasswordInput" placeholder="Password" required>
              </span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Join Family</button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <p class="font-weight-bold">Or sign Up via</p>
                            <button class="btn btn-icon btn-faded-primary rounded-circle" data-toggle="tooltip" title="Facebook" data-container="#signinContent">
                                <a href="#" target="_blank" id="signUpfacebook"><i class="fab fa-facebook"></i></a>
                            </button>
                            <button class="btn btn-icon btn-faded-info rounded-circle" data-toggle="tooltip" title="Twitter" data-container="#signinContent">
                                <a href="#" target="_blank" id="signUplinkedId"><i class="fab fa-twitter"></i></a>
                            </button>
                            <button class="btn btn-icon btn-faded-danger rounded-circle" data-toggle="tooltip" title="Google" data-container="#signinContent">
                                <a href="#" id="signUpgmail"><i class="fas fa-envelope"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    
