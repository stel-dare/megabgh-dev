<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>Megabgh | Order Confirmation</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link href="assets/user_account_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/vendor/select2/css/select2.min.css" rel="stylesheet">

    <link href="assets/user_account_assets/css/osahan.css" rel="stylesheet">
</head>

<body>
   
    <section class="breadcrumb-osahan pt-5 pb-5 bg-dark position-relative text-center">
        <h1 class="text-white">Order Confirmation</h1>
        <h6 class="text-white-50">Order #<?=$order->id?></h6>
    </section>
    <section class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="p-5 osahan-invoice bg-white shadow-sm">
                        <div class="row mb-5 pb-3 ">
                            <div class="col-md-8 col-10">
                                <h3 class="mt-0">Thanks for choosing <strong class="text-secondary">MEGABGH</strong>. Here are your order details: </h3>
                            </div>
                            <div class="col-md-4 col-2 pl-0 text-right">
                                <p class="mb-4 mt-2">
                                    <span class="text-primary font-weight-bold" style="cursor:pointer" onclick="window.print()"><i class="icofont-print"></i> PRINT</span>
                                </p>
                                <img alt="logo" src="assets/img/favicon.ico">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-1 text-black">Order No: <strong>#<?=$order->id?></strong></p>
                                <p class="mb-1">Order placed at: <strong><?=$order->date_ordered?></strong></p>
                                <!-- <p class="mb-1">Order delivered at: <strong>12/11/2018, 07:18 PM</strong></p> -->
                                <p class="mb-1">Order Status: <strong class="text-success"><?=$order->state?></strong></p>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-1 text-black">Delivery To:</p>
                                <p class="mb-1 text-primary"><strong><?="$user->first_name $user->last_name" ?></strong></p>
                                <p class="mb-1"><?="$user_selected_address->address, $user_selected_address->address_city, $user_selected_address->address_region" ?>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <p class="mb-1">Ordered from:</p>
                                <h6 class="mb-1 text-black"><strong>Megab Online Shop</strong></h6>
                                <p class="mb-1">(233) 20 140 8571, gakbentil@yahoo.co.uk, Accra</p>
                                <table class="table mt-3 mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-black font-weight-bold" scope="col">Item Name</th>
                                            <th class="text-right text-black font-weight-bold" scope="col">Quantity</th>
                                            <th class="text-right text-black font-weight-bold" scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($order->products as $product):?>
                                        <tr>
                                            <td><?=$product->name?></td>
                                            <td class="text-right"><?=$product->quantity?></td>
                                            <td class="text-right">GHS <?=$product->price?></td>
                                        </tr>
                                    <?php endforeach; ?>    
                                        <tr>
                                            <td class="text-right" colspan="2">Item Total:</td>
                                            <td class="text-right"> GHS <?=$order->total_paid?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="text-right" colspan="2">GST:</td>
                                            <td class="text-right"> $9.6</td>
                                        </tr> -->
                                        <tr>
                                            <td class="text-right" colspan="2">Delivery Charges:</td>
                                            <td class="text-right"> GHS 0.00</td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="text-right" colspan="2">Discount Applied (GURDEEP50):</td>
                                            <td class="text-right"> $141.97</td>
                                        </tr> -->
                                        <tr>
                                            <td class="text-right" colspan="2">
                                                <h6 class="text-success">Grand Total:</h6>
                                            </td>
                                            <td class="text-right">
                                                <h6 class="text-success"> GHS <?=$order->total_paid?></h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    <script src="assets/user_account_assets/vendor/jquery/jquery-3.3.1.slim.min.js" type="e80d571881595dac4a7a43c8-text/javascript"></script>

    <script src="assets/user_account_assets/vendor/bootstrap/js/bootstrap.bundle.min.js" type="e80d571881595dac4a7a43c8-text/javascript"></script>

    <script src="assets/user_account_assets/vendor/select2/js/select2.min.js" type="e80d571881595dac4a7a43c8-text/javascript"></script>

    <script src="assets/user_account_assets/js/custom.js" type="e80d571881595dac4a7a43c8-text/javascript"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="e80d571881595dac4a7a43c8-|49" defer=""></script>
</body>

</html>