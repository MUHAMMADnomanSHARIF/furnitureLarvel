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


<<div class="container   mx-auto ">

    <div class="card text-white text-center align-center">
       <h1>Track Your Order</h1>
        <!-- Add class 'active' to progress -->
      <form  action="{{url('track')}}" method="post">
        @csrf
      <div class="mb-3 row mt-4">
            <div class="col-sm-3"></div>
    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-size: 15px; font-weight:bold;">Enter Your Ordder#</label>
    <div class="col-sm-6">
      <input type="text" placeholder="Your Order#" class="form-control" name="orderno" id="" style="width: 300px;">
      <button class="btn btn-sucess ">Sumbit</button>


    </div>
      </form>


    </div>
</div>

</body>

  </html>
