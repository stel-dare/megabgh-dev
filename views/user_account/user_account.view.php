<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>Megabgh | My Account</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="assets/user_account_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/vendor/select2/css/select2.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/css/osahan.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/header.css">
    <link href="assets/user_account_assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">
</head>


<body>
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
                                    <li class="d-lg-none" style="position:relative;width:max-content;"><a href="cart" class="header-btn1 "><i
                                                class="fa fa-shopping-cart"></i></a><span class='cart-number' style="font-size:0.7em;position:absolute;
                                    top:0;right:0;color:#000"><?= $logged_in? htmlspecialchars($_SESSION['numberItemsCart']) : '0'; ?></span></li>
                                    <li class="d-lg-none"><a href="#" class="header-btn1 ">Hi,
                                            <?= $logged_in? htmlspecialchars($_SESSION['username']) : 'Customer'; ?></a>
                                        <!-- <ul class="submenu">
                                            <li><a href="login"><i class="fas fa-sign-in-alt"></i> Log In</a></li>
                                        </ul> -->
                                        <?php if($logged_in): ?>
                                        <ul class="submenu">
                                            <li><a href="user_account"><i class="fas fa-shopping-bag"></i> View Orders</a></li>
                                            <li><a href="user_account"><i class="fas fa-user-circle"></i> View
                                                    profile</a></li>
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
                    <li style="position:relative;"><a href="cart" class="header-btn1" style="color:#6785FF;"><i
                                    class="fa fa-shopping-cart"></i><span class='cart-number' style="font-size:0.7em;position:absolute;
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


    <div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-profile">Edit profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Phone number
                                </label>
                                <input type="text" value="+91 85680-79956" class="form-control"
                                    placeholder="Enter Phone number">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Email id
                                </label>
                                <input type="text" value="iamosahan@gmail.com" class="form-control" placeholder="Enter Email id
                              ">
                            </div>
                            <div class="form-group col-md-12 mb-0">
                                <label>Password
                                </label>
                                <input type="password" value="**********" class="form-control" placeholder="Enter password
                              ">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary">UPDATE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-address-modal" tabindex="-1" role="dialog" aria-labelledby="add-address"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-address">Add Delivery Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='update_user_account' method='post'>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Complete Address</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Complete Address e.g. Christian Ridge, Beahu, Takoradi" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                class="icofont-ui-pointer"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Address City
                                </label>
                                <input type="text" class="form-control" name="address_city"
                                    placeholder="Address City e.g. Takoradi, East Legon" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Address Region
                                </label>
                                <input type="text" class="form-control" name="address_region"
                                    placeholder="Address Region e.g. Western,Central" required>
                            </div>
                            <!-- <div class="form-group mb-0 col-md-12">
                                <label for="inputPassword4">Nickname
                                </label>
                                <div class="btn-group btn-group-toggle d-flex justify-content-center"
                                    data-toggle="buttons">
                                    <label class="btn btn-info active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Home
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> Work
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> Other
                                    </label>
                                </div>
                            </div> -->
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="submit" name="submit" value='add-address'
                        class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    

    <div class="modal fade" id="delete-address-modal" tabindex="-1" role="dialog" aria-labelledby="delete-address"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-address">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 text-black">Are you sure you want to delete this address?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary"
                        onclick="deleteAddress()">DELETE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- // Delete payment method modal -->
    <div class="modal fade" id="delete-payment-modal" tabindex="-1" role="dialog" aria-labelledby="delete-payment"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-payment">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 text-black">Are you sure you want to delete this payment method?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary"
                        onclick="deletePaymentMethod()">DELETE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- // Add payment method modal -->
    <div class="modal fade" id="add-payment-modal" tabindex="-1" role="dialog" aria-labelledby="add-payment"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-profile">Add Payment Method</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="update_user_account" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Payment Vendor
                                </label>
                                <select name="payment_id" id="payment_id" required>
                                    <?php foreach($payment_methods as $method):?>
                                    <option value=<?=$method->id?>><?=$method->name?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Phone Number
                                </label>
                                <input type="tel" name="phone_number" class="form-control" placeholder="Enter Phone Number e.g. 0241235767  
                              " pattern="[0-9]{10}" required>
                            </div>
                            <!-- <div class="form-group col-md-12 mb-0">
                                <label>Password
                                </label>
                                <input type="password" value="**********" class="form-control" placeholder="Enter password
                              ">
                            </div> -->
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="submit" name="submit" value="add-payment"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light osahan-nav shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img alt="logo" src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offers.html"><i class="icofont-sale-discount"></i> Offers <span class="badge badge-danger">New</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Restaurants
</a>
                        <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                            <a class="dropdown-item" href="listing.html">Listing</a>
                            <a class="dropdown-item" href="detail.html">Detail + Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pages
</a>
                        <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                            <a class="dropdown-item" href="track-order.html">Track Order</a>
                            <a class="dropdown-item" href="invoice.html">Invoice</a>
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="register.html">Register</a>
                            <a class="dropdown-item" href="404.html">404</a>
                            <a class="dropdown-item" href="extra.html">Extra :)</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img alt="Generic placeholder image" src="img/user/4.png" class="nav-osahan-pic rounded-pill"> My Account
</a>
                        <div class="dropdown-menu dropdown-menu-right shadow-sm border-0">
                            <a class="dropdown-item" href="orders.html#orders"><i class="icofont-food-cart"></i> Orders</a>
                            <a class="dropdown-item" href="orders.html#offers"><i class="icofont-sale-discount"></i> Offers</a>
                            <a class="dropdown-item" href="orders.html#favourites"><i class="icofont-heart"></i> Favourites</a>
                            <a class="dropdown-item" href="orders.html#payments"><i class="icofont-credit-card"></i> Payments</a>
                            <a class="dropdown-item" href="orders.html#addresses"><i class="icofont-location-pin"></i> Addresses</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-cart">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-shopping-basket"></i> Cart
<span class="badge badge-success">5</span>
</a>
                        <div class="dropdown-menu dropdown-cart-top p-0 dropdown-menu-right shadow-sm border-0">
                            <div class="dropdown-cart-top-header p-4">
                                <img class="img-fluid mr-3" alt="osahan" src="img/cart.jpg">
                                <h6 class="mb-0">Gus's World Famous Chicken</h6>
                                <p class="text-secondary mb-0">310 S Front St, Memphis, USA</p>
                                <small><a class="text-primary font-weight-bold" href="#">View Full Menu</a></small>
                            </div>
                            <div class="dropdown-cart-top-body border-top p-4">
                                <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
                                <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p>
                                <p class="mb-2"><i class="icofont-ui-press text-success food-item"></i> Veg Seekh Sub 6" (15 cm) x 1 <span class="float-right text-secondary">$133</span></p>
                                <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Chicken Tikka Sub 12" (30 cm) x 1 <span class="float-right text-secondary">$314</span></p>
                                <p class="mb-2"><i class="icofont-ui-press text-danger food-item"></i> Corn & Peas Salad x 1 <span class="float-right text-secondary">$209</span></p>
                            </div>
                            <div class="dropdown-cart-top-footer border-top p-4">
                                <p class="mb-0 font-weight-bold text-secondary">Sub Total <span class="float-right text-dark">$499</span></p>
                                <small class="text-info">Extra charges may apply</small>
                            </div>
                            <div class="dropdown-cart-top-footer border-top p-2">
                                <a class="btn btn-success btn-block btn-lg" href="checkout.html"> Checkout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <section class="section pt-4 pb-4 osahan-account-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="osahan-account-page-left shadow-sm rounded bg-white h-100">
                        <div class="border-bottom p-4">
                            <div class="osahan-user text-center">
                                <div class="osahan-user-media">
                                    <img class="mb-3 rounded-pill shadow-sm mt-1" src="img/user/4.png"
                                        alt="gurdeep singh osahan">
                                    <div class="osahan-user-media-body">
                                        <h6 class="mb-2"><?="$user->first_name $user->last_name" ?></h6>
                                        <p class="mb-1"><?=$user->email ?></p>
                                        <p class=""><?=$user->username ?> </p>
                                        <p class="mb-0 text-black font-weight-bold">
                                            <!-- <a class="text-primary mr-3"
                                                data-toggle="modal" data-target="#edit-profile-modal" href="#"><i
                                                    class="icofont-ui-edit"></i> EDIT</a> -->
                                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="orders-tab" data-toggle="tab" href="#currentOrders"
                                    role="tab" aria-controls="orders" aria-selected="true"><i
                                        class="icofont-food-cart"></i> My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab"
                                    aria-controls="orders" aria-selected="false"><i class="icofont-food-cart"></i> Order
                                    History</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i> Offers</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="favourites-tab" data-toggle="tab" href="#favourites" role="tab" aria-controls="favourites" aria-selected="false"><i class="icofont-heart"></i> Favourites</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab"
                                    aria-controls="addresses" aria-selected="false"><i
                                        class="icofont-location-pin"></i>My Addresses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab"
                                    aria-controls="payments" aria-selected="false"><i class="icofont-credit-card"></i>
                                    Payment Methods</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="" href="logout" role="tab"><i class="icofont-logout"></i> Log
                                    Out</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                        <div class="tab-content" id="myTabContent">
                            <!-- current orders start -->

                            <div class="tab-pane fade show active" id="currentOrders" role="tabpanel"
                                aria-labelledby="orders-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">My Orders</h4>
                                <?php foreach($user_current_orders as $current_order): ?>
                                <div class="bg-white card mb-4 order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src=<?=$current_order->products[0]->image_url?>
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span
                                                        class="float-right text-info"><?="$current_order->state on $current_order->date_ordered" ?>
                                                        <i class="icofont-clock-time text-info"></i></span>
                                                    <h6 class="mb-2">
                                                        <span
                                                            class="text-black"><?="$user->first_name $user->last_name" ?>
                                                        </span></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i>
                                                        <?="$user_selected_address->address, $user_selected_address->address_city, $user_selected_address->address_region" ?>
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER
                                                        #<?=$current_order->id?> <i class="icofont-clock-time ml-2"></i>
                                                        <?=$current_order->date_ordered?></p>
                                                    <p class="text-dark">
                                                        <?php foreach($current_order->products as $product): ?>
                                                        <span><?= "$product->name x $product->quantity, "?></span>
                                                        <?php endforeach;?>
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary"
                                                            href=<?="invoice?user=$user->id&order=$current_order->id" ?>><i
                                                                class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <a class="btn btn-sm btn-primary"
                                                            href=<?="trace?user=$user->id&order=$current_order->id" ?>><i
                                                                class="icofont-location-pin"></i> TRACK ORDER</a>
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span
                                                            class="text-black font-weight-bold"> Total Paid:</span> GHS
                                                        <?=$current_order->total_paid?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>

                            <!-- current orders end -->

                            <div class="tab-pane fade  " id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Past Orders</h4>
                                <?php foreach($user_past_orders as $past_order):?>
                                <div class="bg-white card mb-4 order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4 " src=<?=$past_order->products[0]->image_url?>
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">
                                                        <?="$past_order->state on $past_order->date_ordered" ?>
                                                        <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <span
                                                            class="text-black"><?="$user->first_name $user->last_name" ?>
                                                        </span></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i>
                                                        <?="$user_selected_address->address, $user_selected_address->address_city, $user_selected_address->address_region" ?>
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER
                                                        #<?=$past_order->id?> <i class="icofont-clock-time ml-2"></i>
                                                        <?=$past_order->date_ordered?></p>
                                                    <p class="text-dark">
                                                        <?php foreach($past_order->products as $product): ?>
                                                        <span><?= "$product->name x $product->quantity, "?></span>
                                                        <?php endforeach;?>
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary"
                                                            href=<?="invoice?user=$user->id&order=$past_order->id" ?>><i
                                                                class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <!-- <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a> -->
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span
                                                            class="text-black font-weight-bold"> Total Paid:</span> GHS
                                                        <?=$past_order->total_paid?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- <div class="tab-pane fade" id="offers" role="tabpanel" aria-labelledby="offers-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Offers</h4>
                                <div class="row mb-4 pb-2">
                                    <div class="col-md-6">
                                        <div class="card offer-card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title"><img src="img/bank/1.png"> OSAHANEAT50</h5>
                                                <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                                <p class="card-text">Use code OSAHANEAT50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $200</p>
                                                <a href="#" class="card-link">COPY CODE</a>
                                                <a href="#" class="card-link">KNOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card offer-card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title"><img src="img/bank/2.png"> EAT730</h5>
                                                <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                                <p class="card-text">Use code EAT730 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $600</p>
                                                <a href="#" class="card-link">COPY CODE</a>
                                                <a href="#" class="card-link">KNOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4 pb-2">
                                    <div class="col-md-6">
                                        <div class="card offer-card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title"><img src="img/bank/3.png"> SAHAN50</h5>
                                                <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                                <p class="card-text">Use code SAHAN50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $200</p>
                                                <a href="#" class="card-link">COPY CODE</a>
                                                <a href="#" class="card-link">KNOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card offer-card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title"><img src="img/bank/4.png"> GURDEEP50</h5>
                                                <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                                <p class="card-text">Use code GURDEEP50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $600</p>
                                                <a href="#" class="card-link">COPY CODE</a>
                                                <a href="#" class="card-link">KNOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card offer-card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title"><img src="img/bank/1.png"> OSAHANEAT50</h5>
                                                <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                                <p class="card-text">Use code OSAHANEAT50 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $200</p>
                                                <a href="#" class="card-link">COPY CODE</a>
                                                <a href="#" class="card-link">KNOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card offer-card shadow-sm">
                                            <div class="card-body">
                                                <h5 class="card-title"><img src="img/bank/2.png"> EAT730</h5>
                                                <h6 class="card-subtitle mb-2 text-block">Get 50% OFF on your first osahan eat order</h6>
                                                <p class="card-text">Use code EAT730 &amp; get 50% off on your first osahan order on Website and Mobile site. Maximum discount: $600</p>
                                                <a href="#" class="card-link">COPY CODE</a>
                                                <a href="#" class="card-link">KNOW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="tab-pane fade" id="favourites" role="tabpanel" aria-labelledby="favourites-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Favourites</h4>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="detail.html">
<img src="img/list/4.png" class="img-fluid item-img">
</a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="detail.html" class="text-black">Famous Dave's Bar-B-Que
</a>
                                                    </h6>
                                                    <p class="text-gray mb-3">Vegetarian • Indian • Pure veg</p>
                                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–30 min</span> <span class="float-right text-black-50"> $350 FOR TWO</span></p>
                                                </div>
                                                <div class="list-card-badge">
                                                    <span class="badge badge-danger">OFFER</span> <small> Use Coupon OSAHAN50</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="detail.html">
<img src="img/list/5.png" class="img-fluid item-img">
</a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="detail.html" class="text-black">Thai Famous Cuisine</a></h6>
                                                    <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 30–35 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                                </div>
                                                <div class="list-card-badge">
                                                    <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="detail.html">
<img src="img/list/6.png" class="img-fluid item-img">
</a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="detail.html" class="text-black">The osahan Restaurant
</a>
                                                    </h6>
                                                    <p class="text-gray mb-3">North • Hamburgers • Pure veg</p>
                                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $500 FOR TWO</span></p>
                                                </div>
                                                <div class="list-card-badge">
                                                    <span class="badge badge-danger">OFFER</span> <small>65% OSAHAN50</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="detail.html">
<img src="img/list/7.png" class="img-fluid item-img">
</a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="detail.html" class="text-black">Stan's Restaurant
</a>
                                                    </h6>
                                                    <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                                </div>
                                                <div class="list-card-badge">
                                                    <span class="badge badge-danger">OFFER</span> <small>65% Coupon OSAHAN50</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="detail.html">
<img src="img/list/8.png" class="img-fluid item-img">
</a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="detail.html" class="text-black">Polo Lounge
</a>
                                                    </h6>
                                                    <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                                </div>
                                                <div class="list-card-badge">
                                                    <span class="badge badge-danger">OFFER</span> <small> Coupon OSAHAN50</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                            <div class="list-card-image">
                                                <div class="star position-absolute"><span class="badge badge-success"><i class="icofont-star"></i> 3.1 (300+)</span></div>
                                                <div class="favourite-heart text-danger position-absolute"><a href="detail.html"><i class="icofont-heart"></i></a></div>
                                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                                <a href="detail.html">
<img src="img/list/9.png" class="img-fluid item-img">
</a>
                                            </div>
                                            <div class="p-3 position-relative">
                                                <div class="list-card-body">
                                                    <h6 class="mb-1"><a href="detail.html" class="text-black">Jack Fry's
</a>
                                                    </h6>
                                                    <p class="text-gray mb-3">North Indian • Indian • Pure veg</p>
                                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="icofont-wall-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> $250 FOR TWO</span></p>
                                                </div>
                                                <div class="list-card-badge">
                                                    <span class="badge badge-danger">OFFER</span> <small>65% </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center load-more">
                                        <button class="btn btn-primary" type="button" disabled>
<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
Loading...
</button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Payment Methods</h4>
                                <p class="mb-3 text-black font-weight-bold"><a class="text-info mr-3"
                                        data-toggle="modal" data-target="#add-payment-modal" href="#"><i
                                            class="icofont-ui-add"></i> ADD</a></p>
                                <div class="row">
                                    <?php foreach($user_payment_methods as $payment_method): ?>
                                    <div class="col-md-6">
                                        <div class="<?="bg-white border card payments-item mb-4 shadow-sm payment-border-toggle"?><?=$payment_method->selected_payment? ' border-primary':''?>"
                                            onclick="toggleBorder(this,<?=$payment_method->id?>,<?=$payment_method->customer_id?>)">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="<?=$payment_method->image_url ?>"
                                                            alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1"><?=$payment_method->phone_number ?></h6>
                                                            <p><?=$payment_method->name ?></p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal"
                                                                        data-target="#delete-payment-modal" ><span onclick='setDeletePaymentMethod(<?=$payment_method->id?>)'><i
                                                                            class="icofont-ui-delete"></i>
                                                                        DELETE</span></a>
                                                                </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Manage Addresses</h4>
                                <p class="mb-3 text-black font-weight-bold"><a class="text-info mr-3"
                                        data-toggle="modal" data-target="#add-address-modal" href="#"><i
                                            class="icofont-ui-add"></i> ADD</a></p>
                                <div class="row">
                                    <?php foreach($user_address as $address): ?>
                                    <div class="col-md-6">
                                        <div class="<?="bg-white card addresses-item mb-4 border address-border-toggle"?><?=$address->selected_address? ' border-primary':''?>"
                                            onclick="addressToggleBorder(this,<?=$address->id?>,<?=$address->customer_id?>)">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 text-secondary"><?= $address->address_city?>
                                                        </h6>
                                                        <p class="text-black">
                                                            <?="$address->address, $address->address_city, $address->address_region" ?>
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold">
                                                            <!-- <span><a
                                                                    class="text-primary mr-3" data-toggle="modal"
                                                                    data-target="#add-address-modal" href="#"><i
                                                                        class="icofont-ui-edit"></i> EDIT</a></span> -->
                                                            <span onclick="setDeleteAddress(<?=$address->id?>)"><a
                                                                    class="text-danger" data-toggle="modal"
                                                                    data-target="#delete-address-modal" href="#"><i
                                                                        class="icofont-ui-delete"></i> DELETE</a></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section pt-5 pb-5 text-center bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="m-0">Operate food store or restaurants? <a href="login.html">Work With Us</a></h5>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="footer pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 col-sm-12">
                    <h6 class="mb-3">Subscribe to our Newsletter</h6>
                    <form class="newsletter-form mb-1">
                        <div class="input-group">
                            <input type="text" placeholder="Please enter your email" class="form-control">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary">
Subscribe
</button>
                            </div>
                        </div>
                    </form>
                    <p><a class="text-info" href="register.html">Register now</a> to get updates on <a href="offers.html">Offers and Coupons</a></p>
                    <div class="app">
                        <p class="mb-2">DOWNLOAD APP</p>
                        <a href="#">
<img class="img-fluid" src="img/google.png">
</a>
                        <a href="#">
<img class="img-fluid" src="img/apple.png">
</a>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 mobile-none">
                </div>
                <div class="col-md-2 col-4 col-sm-4">
                    <h6 class="mb-3">About OE</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-4 col-sm-4">
                    <h6 class="mb-3">For Foodies</h6>
                    <ul>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Developers</a></li>
                        <li><a href="#">Blogger Help</a></li>
                        <li><a href="#">Verified Users</a></li>
                        <li><a href="#">Code of Conduct</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-4 col-sm-4">
                    <h6 class="mb-3">For Restaurants</h6>
                    <ul>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Add a Restaurant</a></li>
                        <li><a href="#">Claim your Listing</a></li>
                        <li><a href="#">For Businesses</a></li>
                        <li><a href="#">Owner Guidelines</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="footer-bottom-search pt-5 pb-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="text-black">POPULAR COUNTRIES</p>
                    <div class="search-links">
                        <a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a>                        | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a> | <a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a>                        | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a><a href="#">Australia</a>                        | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a> | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a>                        | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a> | <a href="#">Australia</a> | <a href="#">Brasil</a> | <a href="#">Canada</a> | <a href="#">Chile</a> | <a href="#">Czech Republic</a> | <a href="#">India</a>                        | <a href="#">Indonesia</a> | <a href="#">Ireland</a> | <a href="#">New Zealand</a> | <a href="#">United Kingdom</a> | <a href="#">Turkey</a> | <a href="#">Philippines</a> | <a href="#">Sri Lanka</a>
                    </div>
                    <p class="mt-4 text-black">POPULAR FOOD</p>
                    <div class="search-links">
                        <a href="#">Fast Food</a> | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a> |
                        <a
                            href="#">Fast Food</a> | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a><a href="#">Fast Food</a>                            | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a> | <a href="#">Fast Food</a>                            | <a href="#">Chinese</a> | <a href="#">Street Food</a> | <a href="#">Continental</a> | <a href="#">Mithai</a> | <a href="#">Cafe</a> | <a href="#">South Indian</a> | <a href="#">Punjabi Food</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="pt-4 pb-4 text-center">
        <div class="container">
            <p class="mt-0 mb-0">© Copyright 2020 Osahan Eat. All Rights Reserved</p>
            <small class="mt-0 mb-0"> Made with <i class="fas fa-heart heart-icon text-danger"></i> by
<a class="text-danger" target="_blank" href="https://www.instagram.com/iamgurdeeposahan/">Gurdeep Osahan</a> - <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask Bootstrap</a>
</small>
        </div>
    </footer> -->
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
    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="assets/user_account_assets/vendor/jquery/jquery-3.3.1.slim.min.js"
        type="838bed98cedc331a98e71976-text/javascript"></script>

    <script src="assets/user_account_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"
        type="838bed98cedc331a98e71976-text/javascript"></script>

    <script src="assets/user_account_assets/vendor/select2/js/select2.min.js"
        type="838bed98cedc331a98e71976-text/javascript"></script>

    <script src="assets/user_account_assets/js/custom.js" type="838bed98cedc331a98e71976-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="838bed98cedc331a98e71976-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"5ec19d563a0b0b78","r":1,"version":"2020.9.1","si":10}'></script>
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