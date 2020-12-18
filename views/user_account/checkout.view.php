<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Megabgh | Checkout</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link href="assets/user_account_assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper">
    <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header header-sticky">
                    <!-- Logo -->
                    <div class="header-left">
                        <div class="logo">
                            <a href="shop" class="shop-name" style="color:#6785FF;">megabgh online shop</a>
                        </div>
                        <div class="menu-wrapper  d-flex align-items-center">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <!-- <li><a href="#">Home</a></li> -->
                                        <!-- <li ><a href="#">Promotions</a></li> -->
                                        <!-- <li><a href="about">About</a> -->
                                        <!-- <ul class="submenu">
                                            <li><a href="services">Cleaning</a></li>
                                            <li><a href="personnel">Personnel Support</a></li>
                                            <li><a href="environmental">Environmental Services</a></li>
                                            <li><a href="training">Training</a></li>
                                        </ul> -->
                                        <!-- </li> -->
                                        <!-- <li ><a href="contact">Contact</a></li> -->
                                        <li class="d-lg-none" style="position:relative;width:max-content;"><a href="#"
                                                class="header-btn1 "><i class="fa fa-shopping-cart"></i></a><span
                                                class='cart-number'
                                                style="font-size:0.7em;position:absolute;
                                    top:0;right:0;color:#000"><?= $logged_in? htmlspecialchars($_SESSION['numberItemsCart']) : '0'; ?></span>
                                        </li>
                                        <li class="d-lg-none"><a href="#" class="header-btn1 ">Hi,
                                                <?= $logged_in? htmlspecialchars($_SESSION['username']) : 'Customer'; ?></a>
                                            <!-- <ul class="submenu">
                                            <li><a href="login"><i class="fas fa-sign-in-alt"></i> Log In</a></li>
                                        </ul> -->
                                            <?php if($logged_in): ?>
                                            <ul class="submenu">
                                                <li><a href="user_account"><i class="fas fa-shopping-bag"></i> View
                                                        Orders</a></li>
                                                <li><a href="user_account"><i class="fas fa-user-circle"></i> View
                                                        profile</a></li>
                                                <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                                                </li>
                                            </ul>
                                            <?php else: ?>
                                            <ul class="submenu">
                                                <li><a href="login"><i class="fas fa-sign-in-alt"></i> Log in</a></li>
                                            </ul>
                                            <?php endif;?>
                                        </li>

                                        <!-- <li><a href="shop">Shop</a></li> -->
                                        <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-none d-lg-block">
                        <!-- <a href="#" class="header-btn1"><i class="fa fa-shopping-cart"></i> (233) 20 140 8571</a> -->
                        <ul style="display:flex;">
                            <li style="position:relative;"><a href="#" class="header-btn1" style="color:#6785FF;"><i
                                        class="fa fa-shopping-cart"></i><span class='cart-number'
                                        style="font-size:0.7em;position:absolute;
                                    top:0;right:0;"><?= $logged_in? htmlspecialchars($_SESSION['numberItemsCart']) : '0'; ?></span></a></li>
                            <li><a href="#" class="" style="color:#6785FF;padding-left:1em;">|</a></li>
                            <li class="user-account-name"><a href="#" class="header-btn1" style="color:#6785FF;">Hi,
                                    <?= $logged_in? htmlspecialchars($_SESSION['username']) : 'Customer'; ?></a>
                                <?php if($logged_in): ?>
                                <ul class="user-account-submenu">
                                    <li><a href="user_account"><i class="fas fa-shopping-bag"></i> View Orders</a></li>
                                    <li><a href="user_account"><i class="fas fa-user-circle"></i> View profile</a></li>
                                    <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                                </ul>
                                <?php else: ?>
                                <ul class="user-account-submenu">
                                    <li><a href="login"><i class="fas fa-sign-in-alt"></i> Log in</a></li>
                                </ul>
                                <?php endif;?>

                            </li>
                        </ul>
                        <!-- <a href="#" class="header-btn2">Contact Us</a> -->
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <!-- End .header -->

        <main class="main">
           
            <!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="checkout">
                    <div class="container">
                        
                        <!-- End .checkout-discount -->
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h2 class="checkout-title">Billing Details</h2>
                                    <!-- End .checkout-title -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name </label>
                                            <input type="text" class="form-control" value="<?=$user_info->first_name?>" disabled>
                                        </div>
                                        <!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label>Last Name </label>
                                            <input type="text" class="form-control" value="<?=$user_info->last_name?>" disabled>
                                        </div>
                                        <!-- End .col-sm-6 -->
                                    </div>
                                    <!-- End .row -->

                                    <!-- <label>Company Name (Optional)</label>
                                    <input type="text" class="form-control">

                                    <label>Country *</label>
                                    <input type="text" class="form-control" required> -->

                                    <label>Address </label>
                                    <input type="text" class="form-control" value="<?=$user_address->address?>" disabled>
                                    <!-- <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..." required> -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label> City </label>
                                            <input type="text" class="form-control" value="<?=$user_address->address_city?>" disabled>
                                        </div>
                                        <!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label>Region </label>
                                            <input type="text" class="form-control" value="<?=$user_address->address_region?>" disabled>
                                        </div>
                                        <!-- End .col-sm-6 -->
                                    </div>
                                    <!-- End .row -->

             
                                    <!-- End .row -->

                                    <label>Email address </label>
                                    <input type="email" class="form-control" value="<?=$user_info->email?>" disabled>

                                    <!-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                        <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                                    </div> -->
                                    <!-- End .custom-checkbox -->

                                    <!-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkout-diff-address">
                                        <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
                                    </div> -->
                                    <!-- End .custom-checkbox -->

                                    <!-- <label>Order notes (optional)</label>
                                    <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea> -->
                                </div>
                                <!-- End .col-lg-9 -->
                                <aside class="col-lg-3">
                                    <div class="summary">
                                        <h3 class="summary-title">Your Order</h3>
                                        <!-- End .summary-title -->

                                        <table class="table table-summary">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach($user_cart as $item): ?>
                                                <tr>
                                                    <td><a href="#"><?=$item -> name?></a></td>
                                                    <td>GHS <?=round($item->quantity * $item->price,2)?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                                
                                                <tr class="summary-subtotal">
                                                    <td>Subtotal:</td>
                                                    <td>GHS <?= round($subtotal,2) ?></td>
                                                </tr>
                                                <!-- End .summary-subtotal -->
                                                <tr>
                                                    <td>Shipping:</td>
                                                    <td>Free shipping</td>
                                                </tr>
                                                <tr class="summary-total">
                                                    <td>Total:</td>
                                                    <td>GHS <?= round($subtotal,2) ?></td>
                                                </tr>
                                                <!-- End .summary-total -->
                                            </tbody>
                                        </table>
                                        <!-- End .table table-summary -->

                                        <div class="accordion-summary" id="accordion-payment">
                                            

                                            <div class="card">
                                                <div class="card-header" id="heading-5">
                                                    <h2 class="card-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                   <?=$user_payment_methods->name?> Mobile Money
										                    <img src="<?=$user_payment_methods->image_url?>" alt="payments cards" style="height:18px;">
										                </a>
                                                    </h2>
                                                </div>
                                                <!-- End .card-header -->
                                                <div id="collapse-5" class="" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                                    <div class="card-body"><?=$user_payment_methods->phone_number?>
                                                    </div>
                                                    <!-- End .card-body -->
                                                </div>
                                                <!-- End .collapse -->
                                            </div>
                                            <!-- End .card -->
                                        </div>
                                        <!-- End .accordion -->

                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
                                    </div>
                                    <!-- End .summary -->
                                </aside>
                                <!-- End .col-lg-3 -->
                            </div>
                            <!-- End .row -->
                        </form>
                    </div>
                    <!-- End .container -->
                </div>
                <!-- End .checkout -->
            </div>
            <!-- End .page-content -->
        </main>
        <!-- End .main -->
        <footer>
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <!-- <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                     <div class="single-footer-caption mb-50">
                       <div class="single-footer-caption mb-30">
                        
                        <div class="footer-logo mb-35">
                            <a href="/"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                        <div class="footer-tittle">
                            <div class="footer-pera">
                                <p>
                                    MEGAB is a cleaning, environmental management and personnel outsourcing company. 
                                    We always look forward to rendering dedicated service that will bring a smile to the faces of our clients.
                                </p>
                            </div>
                        </div>
                        
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Our Values </h4>
                        <ul>
                            <li><a href="#">- Dedication.</a></li>
                            <li><a href="#">- Truth.</a></li>
                            <li><a href="#">- Hardwork.</a></li>
                            <li><a href="#">- Loyalty.</a></li>
                            <li><a href="#">- Excellence.</a></li>
            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4>Get in touch</h4>
                        <ul>
                            <li class="number"><a href="#">(233) 20 140 8571</a></li>
                            <li><a href="#">gakbentil@yahoo.co.uk</a></li>
                             
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
                <div class="container text-center">
                    <p style="font-size:1.2em;"><span class="shop-name" style="font-size:2em;">megabgh online
                            shop.</span>
                    </p>
                    <p style="font-size:1.2em;"> Contact our cutomer service <span class="number"><a href="#"
                                style="margin-bottom:0;">(233) 20 140 8571</a></span> for shop support.</p>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | Made by <a href="https://stel-dare.github.io/"
                                            target="_blank" rel="noreferrer noopener">stel.</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
       
        <!-- End .footer -->
    </div>


    
    <!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <!-- <script src="assets/js/checkout.js"></script> -->

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>

</html>