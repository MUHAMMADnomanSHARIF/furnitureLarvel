<html>
    <head>
        <title>Furnimart</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Furni Mart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->


		<!-- all css here -->

    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/ie7.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/bundle.css') }}">

    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/responsive.css') }}">


    </head>

<style>
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #ADBCC1;
    background-repeat: no-repeat;
}

.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px;
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important;
}

/*Icon progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px;
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff;
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1;
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar li:nth-child(2):after, #progressbar li:nth-child(3):after {
    left: -50%;
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%;
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #651FFF;
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c";
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}

.icon-content {
    padding-bottom: 20px;
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%;
    }
}
</style>
    </head>
  <body>
  <div>
  <header class="header-area bg-ash" style="background-color: #ADBCC1;">
            <!--Header Top Area Start -->

            <!--Header Top Area End -->
            <!--Header Middle Area Start -->
            <div class="header-middle-area bg-ash pb-3 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 d-inline">
                            <div class="logo">
                                <a href="{{ Route('web.index') }}"><img src="{{ asset('images/logo.png') }}" alt="FFurniMart" width="60px" height="60px"></a>
                                <span class="text-center fs-3  ">FurniMart</span>
                            </div>
                        </div>
                        <span class="col-md-2"></span>
                        <h2 class=" text-center order_nav text-white  " style="  padding:20px 0px 0px 20px;font-weight:bold;">FurniMart</h2>



                    </div>
                </div>
            </div>
            <!--Header Middle Area End -->

  </div>


<<div class="container px-1 px-md-4 py-5 mx-auto">




    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>ORDER <span class="text-primary font-weight-bold">#{{$order['order_no']}}</span></h5>
            </div>


            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival <span>{{ $formattedDate }}</span></p>
            </div>
            <div class="col-12 pt-2 fs-4">
                <h4>Order details</h4>
                <p style="font-size: 14px; font-weight:bold;">{!! $order->product_detail !!}</p>
            </div>
        </div>

        <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
            <ul id="progressbar" class="text-center">
                <li class="active step0"></li>
                <li class="active step0"></li>
                <li class="active step0"></li>
                <li class="step0"></li>
            </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content">
                <img class="icon" src="{{asset('images/user_images/order_proceed.png')}}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Processed</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <img class="icon" src="{{asset('images/user_images/order_shipd.png')}}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Shipped</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <img class="icon" src="{{asset('images/user_images/order_inroute.png')}}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>En Route</p>
                </div>
            </div>
            <div class="row d-flex icon-content">
                <img class="icon" src="{{asset('images/user_images/order_deliverd.png')}}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Arrived</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

  </html>
