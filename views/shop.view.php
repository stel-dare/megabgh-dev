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
    <link rel="stylesheet" href="css/shop.css" type="text/css">
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
                        <a href="#" class="shop-name" style="color:#6785FF;">megabgh online shop</a>
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
                                    <li class="d-lg-none"><a href="#" class="header-btn1 "><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                    <li class="d-lg-none"><a href="#" class="header-btn1 ">Hi,
                                            <?= $logged_in? htmlspecialchars($_SESSION['username']) : 'Customer'; ?></a>
                                        <!-- <ul class="submenu">
                                            <li><a href="login"><i class="fas fa-sign-in-alt"></i> Log In</a></li>
                                        </ul> -->
                                        <?php if($logged_in): ?>
                                        <ul class="submenu">
                                            <li><a href="#"><i class="fas fa-shopping-bag"></i> View Orders</a></li>
                                            <li><a href="user_account"><i class="fas fa-user-circle"></i> View profile</a></li>
                                            <li><a href="logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
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
                        <li><a href="#" class="header-btn1" style="color:#6785FF;"><i
                                    class="fa fa-shopping-cart"></i></a></li>
                        <li><a href="#" class="" style="color:#6785FF;">|</a></li>
                        <li class="user-account-name"><a href="#" class="header-btn1" style="color:#6785FF;">Hi,
                                <?= $logged_in? htmlspecialchars($_SESSION['username']) : 'Customer'; ?></a>
                            <?php if($logged_in): ?>
                            <ul class="user-account-submenu">
                                <li><a href="#"><i class="fas fa-shopping-bag"></i> View Orders</a></li>
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
    <main>
        <!--? slider Area Start-->
        <section class=" ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slider-area hero-overly"
                    style="background-image:linear-gradient(0deg, rgb(0 0 0 / 0.5), rgb(0 0 0 / 0.5)),url(assets/img/hero/home-hero4.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Very Affordable</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Our products are very affordable.
                                    </p>
                                    <a href="#" class="btn hero-btn d-none" data-animation="fadeInLeft"
                                        data-delay="0.7s">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center slider-area hero-overly"
                    style="background-image:linear-gradient(0deg, rgb(0 0 0 / 0.5), rgb(0 0 0 / 0.5)),url(assets/img/hero/shopping-payment.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Very secure payment. </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Our payments methods are secure and
                                        stress free.</p>
                                    <a href="#" class="btn hero-btn d-none" data-animation="fadeInLeft"
                                        data-delay="0.7s">Shop With Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider Area End-->

        <!-- Shop Section Begin -->
        <section class="shop spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-2">
                        <div class="product__widget">
                            <div class="row" style="align-items:center;">
                                <div class="col-lg-4 col-md-4">
                                    <p>Showing <span id="lastIndex">1</span> - <span id="newIndex">9</span> of <span
                                            id="total_products">32</span> Products</p>
                                </div>
                                <!-- <div class="col-lg-4 col-md-4">
                                <p>Clear Search</p>
                            </div> -->
                                <div class="col-lg-8 col-md-8 text-right">
                                    <!-- <div class="select__item">
                                    <p>Showing Items</p>
                                    <select>
                                        <option value="">12</option>
                                    </select>
                                </div> -->
                                    <div class="blog_right_sidebar select__item">
                                        <div class="search_widget ">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input id="searchInput" type="text" class="form-control"
                                                        style="height:36px;" placeholder="Search Product"
                                                        onfocus="this.placeholder = ''"
                                                        onblur="this.placeholder = 'Search Keyword'">
                                                    <div class="input-group-append">
                                                        <button class="btns" type="button"
                                                            onclick="searchButtonClicked()"><i
                                                                class="ti-search"></i></button>
                                                        <button class="btns clear_search" id="clear_search"
                                                            type="button" onclick="clearSearchInput()"
                                                            style="background:#dc3545;"><i
                                                                class="ti-close"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select__item">
                                        <p>Sort By</p>
                                        <select id='sortBy' onchange="sortByClicked()">
                                            <option value="id">All Products</option>
                                            <option value="date_added">New Arrivals</option>
                                            <option value="best">Best Sellers</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id='products_view'>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-2.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Air purifier</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-3.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Vaccum Cleaner</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-4.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Garden Sprayer</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-2.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Air Purifier</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-3.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Vaccum Cleaner</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-4.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Garden Sprayer</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-2.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Air Purifier</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-3.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Vaccum Cleaner</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic">
                                    <img src="img/products/product-4.jpg" alt="">
                                    <ul class="hover__item">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">Garden Sprayer</a></h6>
                                    <div class="price">
                                        <span>GHS800.00</span>
                                        <a href="#">+Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        </div>
                        <div class="shop__pagination">
                            <!-- <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a> -->
                            <a href="#" id='getPrevProducts'><span class="arrow_carrot-left"></span> Previous</a>
                            <a href="#" id='getNextProducts'>Next<span class="arrow_carrot-right"></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-1">
                        <div class="shop__sidebar">
                            <div class="shop__sidebar__item">
                                <h4>Categories</h4>
                                <ul style="cursor:pointer;">
                                    <!-- <li><a href="#">Air Purifier <span>(75 Item)</span></a></li>
                                <li><a href="#">Steamer <span>(54 Item)</span></a></li>
                                <li><a href="#">Disinfectant <span>(63 Item)</span></a></li>
                                <li><a href="#">Vaccum Cleaner <span>(18 Item)</span></a></li> -->
                                    <li class="category_name qSelected" onclick="categoryClick(this)">All Categories
                                    </li>
                                    <?php foreach($categories as $cat) : ?>
                                    <li class="category_name" onclick="categoryClick(this)"
                                        title='<?= $cat -> category_name ?>'><?= $cat -> category_name ?></li>
                                    <?php endforeach; ?>
                                    <!-- <li><a href=""style="color:#6785ff;text-decoration:underline;">All Categories</a></li> -->

                                </ul>
                            </div>
                            <div class="shop__sidebar__item">
                                <h4>Price</h4>
                                <ul style="cursor:pointer;">
                                    <li class="price qSelected" onclick="priceClick(this)">All Prices<span
                                            class='lPrice' style="visibility:hidden;"></span><span class="uPrice"
                                            style="visibility:hidden;"></span></li>
                                    <li class="price" onclick="priceClick(this)">GHS <span class='lPrice'>0</span> - GHS
                                        <span class="uPrice">1000.00</span></li>
                                    <li class="price" onclick="priceClick(this)">GHS <span class='lPrice'>1000.00</span>
                                        - GHS <span class="uPrice">2000.00</span></li>
                                    <li class="price" onclick="priceClick(this)">GHS <span class='lPrice'>2000.00</span>
                                        - GHS <span class="uPrice">3000.00</span></li>
                                    <li class="price" onclick="priceClick(this)">GHS <span class='lPrice'>3000.00</span>
                                        - GHS <span class="uPrice">4000.00</span></li>
                                    <li class="price" onclick="priceClick(this)">Over GHS <span
                                            class="lPrice">4000.00</span><span style="visibility:hidden;"
                                            class="uPrice">100000.00</span></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Section End -->
    </main>
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
                <p style="font-size:1.2em;"><span class="shop-name" style="font-size:2em;">megabgh online shop.</span>
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
    <!-- Scroll Up -->
    <div id="back-top">
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
    <script src="js/shop.js"></script>

</body>

</html>