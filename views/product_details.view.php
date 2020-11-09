<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Megabgh | Shop With Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap" rel="stylesheet">

        <!-- Shop Css Styles -->
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> -->
        <!-- <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">  -->
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <!-- <link rel="stylesheet" href="css/nice-select.css" type="text/css"> -->
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <!-- <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"> -->
        <!-- <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"> -->
        <!-- <link rel="stylesheet" href="css/slicknav.min.css" type="text/css"> -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .main-header{padding: 1em 0em;border-bottom: 1px solid rgba(0,0,0,0.1);}
    </style>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="shop" class="shop-name">megabgh online shop</a>
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
                                    <li class="d-lg-none"><a href="#" class="header-btn1 "><i class="fa fa-shopping-cart"></i></a></li>
                                    <li class="d-lg-none"><a href="#" class="header-btn1 ">My Account</a></li>
                                    
                                    <!-- <li><a href="shop">Shop</a></li> -->             
                                    <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <!-- <a href="#" class="header-btn1"><i class="fa fa-shopping-cart"></i> (233) 20 140 8571</a> -->
                    <a href="#" class="header-btn1"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" class="" style="color:#6785FF;">|</a>
                    <a href="#" class="header-btn1">My Account</a>
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
    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop__details__pic">
                        <div class="shop__details__big__img">
                            <img class="product__big__img" src="<?=$product[0]->image_url?>" style="width:500px; height:500px;" alt="">
                        </div>
                        <!-- <div class="shop__details__thumb__pic">
                            <div class="pt active" data-imgbigurl="img/products/details/product-big-1.jpg">
                                <img src="img/products/details/thumb-1.jpg" alt="">
                            </div>
                            <div class="pt" data-imgbigurl="img/products/details/product-big-2.jpg">
                                <img src="img/products/details/thumb-2.jpg" alt="">
                            </div>
                            <div class="pt" data-imgbigurl="img/products/details/product-big-1.jpg">
                                <img src="img/products/details/thumb-3.jpg" alt="">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop__details__text">
                        <h3><?=$product[0]->name?></h3>
                        <div class="price">GHS <?=$product[0]->price?></div>
                        <p>Dodge Widebody Replica offered in multiple sizes and finishes with applications to fit
                        Chrysler 300c, Dodge Magnum, Chargers and</p>
                        <p class="last-para">Not only does the Widebody offer superior performance for the standard</p>
                        <div class="shop__details__widget">
                            <div class="quantity">
                                <div class="pro-qty"><input type="text" value="1"></div>
                            </div>
                            <a href="#" class="primary-btn">Add To Cart</a>
                        </div>
                        <ul>
                            <li><span>Availability:</span>In Stock</li>
                            <li><span>Category:</span><?=$product[0]->category_name?></li>
                            <li>
                                <span>Share on:</span>
                                <div class="share__links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->


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
                    <h4>Services </h4>
                    <ul>
                        <li><a href="#">- Cleaning</a></li>
                        <li><a href="#">- Personnel Support</a></li>
                        <li><a href="#">- Environmental Services</a></li>
                        <li><a href="#">- Training</a></li>
        
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
    <p style="font-size:1.2em;"><span class="shop-name" style="font-size:2em;">megabgh online shop.</span></p>
    <p style="font-size:1.2em;"> Contact our cutomer service <span class="number"><a href="#" style="margin-bottom:0;">(233) 20 140 8571</a></span> for shop support.</p>
</div>
</div>
<!-- footer-bottom area -->
<div class="footer-bottom-area section-bg2" data-background="assets/img/gallery/footer-bg.png">
<div class="container">
    <div class="footer-border">
       <div class="row d-flex align-items-center">
           <div class="col-xl-12 ">
               <div class="footer-copy-right text-center">
                   <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with  <a href="https://colorlib.com" target="_blank">Colorlib.</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<!-- Shop  Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
<script src="js/jquery-ui.min.js"></script>
<!-- <script src="js/jquery.nice-select.min.js"></script> -->
<!-- <script src="js/jquery.slicknav.js"></script> -->
<!-- <script src="js/owl.carousel.min.js"></script> -->
<script src="js/main.js"></script>
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
<!-- <script src="js/shop.js"></script> -->

</body>
</html>