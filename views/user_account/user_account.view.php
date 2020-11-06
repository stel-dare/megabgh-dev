<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>Megabgh | My Account</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="user_account_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="user_account_assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">

    <link href="user_account_assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <link href="user_account_assets/vendor/select2/css/select2.min.css" rel="stylesheet">

    <link href="user_account_assets/css/osahan.css" rel="stylesheet">
</head>

<body>

    <div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile" aria-hidden="true">
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
                                <input type="text" value="+91 85680-79956" class="form-control" placeholder="Enter Phone number">
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
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
</button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">UPDATE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-address-modal" tabindex="-1" role="dialog" aria-labelledby="add-address" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-address">Add Delivery Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Delivery Area</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Delivery Area">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icofont-ui-pointer"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Complete Address
</label>
                                <input type="text" class="form-control" placeholder="Complete Address e.g. house number, street name, landmark">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Delivery Instructions
</label>
                                <input type="text" class="form-control" placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall">
                            </div>
                            <div class="form-group mb-0 col-md-12">
                                <label for="inputPassword4">Nickname
</label>
                                <div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
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
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
</button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-address-modal" tabindex="-1" role="dialog" aria-labelledby="delete-address" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-address">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 text-black">Are you sure you want to delete this xxxxx?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn d-flex w-50 text-center justify-content-center btn-outline-primary" data-dismiss="modal">CANCEL
</button><button type="button" class="btn d-flex w-50 text-center justify-content-center btn-primary">DELETE</button>
                </div>
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
                                    <img class="mb-3 rounded-pill shadow-sm mt-1" src="img/user/4.png" alt="gurdeep singh osahan">
                                    <div class="osahan-user-media-body">
                                        <h6 class="mb-2">Gurdeep Singh</h6>
                                        <p class="mb-1">+91 85680-79956</p>
                                        <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9df4fcf0f2eefcf5fcf3ddfaf0fcf4f1b3fef2f0">[email&#160;protected]</a></p>
                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#edit-profile-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="orders-tab" data-toggle="tab" href="#currentOrders" role="tab" aria-controls="orders" aria-selected="true"><i class="icofont-food-cart"></i> My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="icofont-food-cart"></i> Order History</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="offers-tab" data-toggle="tab" href="#offers" role="tab" aria-controls="offers" aria-selected="false"><i class="icofont-sale-discount"></i> Offers</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="favourites-tab" data-toggle="tab" href="#favourites" role="tab" aria-controls="favourites" aria-selected="false"><i class="icofont-heart"></i> Favourites</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="addresses-tab" data-toggle="tab" href="#addresses" role="tab" aria-controls="addresses" aria-selected="false"><i class="icofont-location-pin"></i>My  Addresses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false"><i class="icofont-credit-card"></i> Payment Methods</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="" data-toggle="tab" href="" role="tab" aria-controls="" aria-selected="false"><i class="icofont-logout"></i> Log Out</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                        <div class="tab-content" id="myTabContent">
                            <!-- current orders start -->

                            <div class="tab-pane fade show active" id="currentOrders" role="tabpanel" aria-labelledby="orders-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">My Orders</h4>
                                <div class="bg-white card mb-4 order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src="img/3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <a href="detail.html" class="text-black">Gus's World Famous Fried Chicken
</a></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 730 S Mendenhall Rd, Memphis, TN 38117, USA
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                                    <p class="text-dark">Veg Masala Roll x 1, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-location-pin"></i> TRACK ORDER</a>
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $300
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white card mb-4 order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src="img/4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <a href="detail.html" class="text-black">Jimmy's Famous American Tavern
</a></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1733 Ocean Ave, Santa Monica, CA 90401, USA
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                                    <p class="text-dark">Veg Masala Roll x 5, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-location-pin"></i> TRACK ORDER</a>
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $500
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white card  order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src="img/5.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <a href="detail.html" class="text-black">The Famous Restaurant
</a></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 953 S Main St, Centerville, OH 45459, USA
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                                    <p class="text-dark">Veg Masala Roll x 5, Veg Penne Pasta in Red Sauce x 1
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-location-pin"></i> TRACK ORDER</a>
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $420
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- current orders end -->

                            <div class="tab-pane fade  " id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Past Orders</h4>
                                <div class="bg-white card mb-4 order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src="img/3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <a href="detail.html" class="text-black">Gus's World Famous Fried Chicken
</a></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 730 S Mendenhall Rd, Memphis, TN 38117, USA
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                                    <p class="text-dark">Veg Masala Roll x 1, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <!-- <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a> -->
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $300
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white card mb-4 order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src="img/4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <a href="detail.html" class="text-black">Jimmy's Famous American Tavern
</a></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 1733 Ocean Ave, Santa Monica, CA 90401, USA
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                                    <p class="text-dark">Veg Masala Roll x 5, Veg Burger x 1, Veg Penne Pasta in Red Sauce x 1
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <!-- <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a> -->
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $500
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="bg-white card  order-list shadow-sm">
                                    <div class="gold-members p-4">
                                        <a href="#">
                                            <div class="media">
                                                <img class="mr-4" src="img/5.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <span class="float-right text-info">Delivered on Mon, Nov 12, 7:18 PM <i class="icofont-check-circled text-success"></i></span>
                                                    <h6 class="mb-2">
                                                        <a href="detail.html" class="text-black">The Famous Restaurant
</a></h6>
                                                    <p class="text-gray mb-1"><i class="icofont-location-arrow"></i> 953 S Main St, Centerville, OH 45459, USA
                                                    </p>
                                                    <p class="text-gray mb-3"><i class="icofont-list"></i> ORDER #25102589748 <i class="icofont-clock-time ml-2"></i> Mon, Nov 12, 6:26 PM</p>
                                                    <p class="text-dark">Veg Masala Roll x 5, Veg Penne Pasta in Red Sauce x 1
                                                    </p>
                                                    <hr>
                                                    <div class="float-right">
                                                        <a class="btn btn-sm btn-outline-primary" href="#"><i class="icofont-info-circle"></i> VIEW DETAILS</a>
                                                        <!-- <a class="btn btn-sm btn-primary" href="detail.html"><i class="icofont-refresh"></i> REORDER</a> -->
                                                    </div>
                                                    <p class="mb-0 text-black text-primary pt-2"><span class="text-black font-weight-bold"> Total Paid:</span> $420
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
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
                                <h4 class="font-weight-bold mt-0 mb-4">Payments</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/1.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/2.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2 pb-2">
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/3.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/4.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/5.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/6.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2">
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/1.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p class="text-black">VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card payments-item shadow-sm">
                                            <div class="gold-members p-4">
                                                <a href="#">
                                                    <div class="media">
                                                        <img class="mr-3" src="img/bank/2.png" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            <h6 class="mb-1">6070-XXXXXXXX-0666</h6>
                                                            <p>VALID TILL 10/2025</p>
                                                            <p class="mb-0 text-black font-weight-bold">
                                                                <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal" href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="addresses" role="tabpanel" aria-labelledby="addresses-tab">
                                <h4 class="font-weight-bold mt-0 mb-4">Manage Addresses</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-4 border border-primary shadow">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-ui-home icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 text-secondary">Home</h6>
                                                        <p class="text-black">Osahan House, Jawaddi Kalan, Ludhiana, Punjab 141002, India
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal"
                                                                href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-4 shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-briefcase icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Work</h6>
                                                        <p>NCC, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal"
                                                                href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-2 pb-2">
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-4  shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Other</h6>
                                                        <p>Delhi Bypass Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal"
                                                                href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-4  shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Other</h6>
                                                        <p>MT, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal"
                                                                href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Other</h6>
                                                        <p>GNE Rd, Jawaddi Taksal, Ludhiana, Punjab 141002, India
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal"
                                                                href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-3"><i class="icofont-location-pin icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Other</h6>
                                                        <p>GTTT, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab 141002, India
                                                        </p>
                                                        <p class="mb-0 text-black font-weight-bold"><a class="text-primary mr-3" data-toggle="modal" data-target="#add-address-modal" href="#"><i class="icofont-ui-edit"></i> EDIT</a> <a class="text-danger" data-toggle="modal" data-target="#delete-address-modal"
                                                                href="#"><i class="icofont-ui-delete"></i> DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="user_account_assets/vendor/jquery/jquery-3.3.1.slim.min.js" type="838bed98cedc331a98e71976-text/javascript"></script>

    <script src="user_account_assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="838bed98cedc331a98e71976-text/javascript"></script>

    <script src="user_account_assets/vendor/select2/js/select2.min.js" type="838bed98cedc331a98e71976-text/javascript"></script>

    <script src="user_account_assets/js/custom.js" type="838bed98cedc331a98e71976-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="838bed98cedc331a98e71976-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"5ec19d563a0b0b78","r":1,"version":"2020.9.1","si":10}'></script>
</body>

</html>