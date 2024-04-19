<!doctype html>
<html lang="en">

<head>

    @php
        $allSettings = app('GlobalHelper')->getSettings();

    @endphp

    @foreach ($allSettings as $setting)
        <!-- Display other columns as needed -->
    @endforeach

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <title>{{ $setting['application_name'] }}</title>

    <meta name="description" content="{{ $setting['short_description'] }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="{{ $setting['gsc'] }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" src="{{ asset('images/logo.png') }}">

    <!-- all css here -->
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/ie7.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/bundle.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/frontend/css/responsive.css') }}">
    <link href=" {{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />




    @yield('CoustomCSS')

    <style>
        :root {
            --nav-background: linear-gradient({{ app('GlobalHelper')->hexToRgb($setting['color_one']) }},
                    {{ app('GlobalHelper')->hexToRgb($setting['color_two']) }});

                    --section-background: linear-gradient({{ app('GlobalHelper')->hexToRgb($setting['color_three']) }},
                    {{ app('GlobalHelper')->hexToRgb($setting['color_four']) }});
        }

        /* Styling for the Cart container */
        .cart-container {
            position: relative;
            display: inline-block;
            /* margin: 20px; */
        }

        /* Styling for the Cart icon */
        .cart-icon {
            font-size: 24px;
            cursor: pointer;
        }

        /* Styling for the dropdown */
        .dropdown-menu {
            width: auto;
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--nav-background);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            min-width: auto;
            z-index: 1;
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0s 0.3s;

        }

        /* Styling for the dropdown items */
        .dropdown-item {
            padding: 8px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        /* Show the dropdown on hover */
        .cart-container:hover .dropdown-menu {
            display: block;

        }

        .custom-input-width {
            width: 30px;
            /* Adjust the width according to your design */
        }

        #cart {
            display: none;
            /* Hide the cart icon by default */
            position: relative;
            cursor: pointer;
        }

        /* Style for the dropdown */
        .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 1;
        }

        /* Style for the items in the dropdown */
        .dropdown-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .dropdown-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        /* Media query for mobile view */
        @media (min-width: 768px) and (max-width: 991px) {
            .dropdown-menu {

                position: absolute;
                top: 100%;
                left: -90px;

            }
        }

        /* Media query for mobile view */
        @media (max-width: 768px) {
            #cart {
                display: inline-block;
                /* Show the cart icon in mobile view */
            }
        }

        @media (max-width: 320px) {
            .icon-text {
                display: hidden !important;
                /* Show the cart icon in mobile view */
            }
        }
    </style>


</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Header Area Start -->
    <header class="header-area bg-ash">


        <!-- Mainmenu Area Start -->

        <!-- Header Middle Area Start -->
        <div class="header-middle-area ">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <!-- Logo and Search Bar for Desktop View -->
                    <!-- Logo and Search Bar for Desktop View -->
                    <div class="col-lg-8 col-md-8 col-12 text-center d-md-flex justify-content-around">
                        <div class="logo">
                            <a href="{{ Route('web.index') }}" class="logo"><img
                                    src="{{ asset('images/logo.png') }}" alt="logo"></a>
                        </div>
                        <!-- Add your search bar HTML here -->
                        <form action="{{ url('/search/products') }}" method="get" class="header-search d-flex">
                            <input type="text" name="query" placeholder="Search for item..." class="w-100">
                            <button type="submit"><i class="icon icon-Search"></i></button>
                        </form>

                        <div id="cart" class="addcart">
                            <!-- Cart icon -->

                            @include('frontend.layout.cart')
                        </div>




                    </div>


                    <!-- ========== Start Section ========== -->

                    <!-- ========== End Section ========== -->


                    <!-- Desktop Icons -->
                    <div class="col-lg-4 col-md-4 mt-2 text-center d-none d-md-flex justify-content-center">
                        <div class="cart-box-wrapper me-3 cart-container cart-box-wrapper addcart"
                            data-toggle="dropdown">
                            @include('frontend.layout.cart')
                            <!-- Dropdown content -->



                        </div>
                        <div class="cart-box-wrapper me-3 cart-container" data-toggle="dropdown" id="addwish">

                            @include('frontend.layout.wish')

                        </div>
                        <div class="cart-box-wrapper me-3 cart-container" data-toggle="dropdown">
                            <span class="icon"><i class="fa-solid fa-user"></i></span>
                            @auth
                                <span class="icon-text">{{ Auth::user()->name }}</span>
                            @else
                                <span class="icon-text">Login</span>
                            @endauth

                            <!-- Dropdown content -->
                            <div class="dropdown-menu">
                                @auth
                                    <!-- If the user is logged in, show a logout link -->
                                    <form action="{{ route('auth.logout') }}" method="GET">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                @else
                                    <!-- If the user is not logged in, show login/register links -->
                                    <a href="{{ route('auth.login') }}" class="dropdown-item">Login</a>
                                    <a href="{{ route('auth.register') }}" class="dropdown-item">Register</a>
                                @endauth
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>


        <!--Header Middle Area End -->

        <div class="mainmenu-area header-sticky display-none">
            <div class="container">
                <div class="menu-wrapper">
                    <div class="main-menu">
                        <nav>
                            <ul>

                                <li class="{{ Request::route()->getName() == 'web.index' ? 'active' : '' }}"><a
                                        href="{{ url('') }}">Home</a></li>

                                <li
                                    class="megamenu {{ Request::route()->getName() == 'web.allcategories' ? 'active' : '' }} ">
                                    <a href="{{ url('/allcategories') }}">Categories</a>
                                    <ul  class="d-flex flex-row right col-md-12  text-wrap">
                                        @foreach (\App\Models\ParentCategory::take(7)->get() as $parent)
                                            <li   class="d-inine">
                                                <ul >
                                                    <li class="col-md-2"  onclick="location.href='/product-by-category/{{ $parent->name }}'"
                                                        style="cursor: pointer;">{{ $parent->name }}</li>


                                                    @foreach (\App\Models\ChildCategory::where(['parent_category_id' => $parent->id])->take(10)->get() as $child)
                                                        <li><a
                                                                href="/product-by-child-category/{{ $child->id }}">{{ $child->name }}</a>
                                                        </li>
                                                    @endforeach
                                                    <li><a class="text-lowercase" href="#">more</a></li>
                                                </ul>
                                            </li>
                                        @endforeach



                                    </ul>


                                </li>
                                <li class="{{ Request::route()->getName() == 'web.shop' ? 'active' : '' }}"><a
                                        href="{{ url('/shop') }}">Shop</a></li>
                                <li class="{{ Request::route()->getName() == 'web.about' ? 'active' : '' }}"><a
                                        class="{{ Request::route()->getName() == 'web.about' ? 'active' : '' }}"
                                        href="{{ url('/about') }}">About Us</a></li>
                                <li class="{{ Request::route()->getName() == 'web.blog' ? 'active' : '' }}"><a href="{{ url('/blog') }}">Blog</a></li>
                                <li class="{{ Request::route()->getName() == 'web.contact' ? 'active' : '' }}"><a href="{{ url('/Contact-Us') }}">Contact</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mainmenu Area End -->
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area container">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li><a href="{{ url('') }}">HOME</a></li>
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                        <li><a href="{{ url('/allcategories') }}">Categories</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/Contact-Us') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
    </header>
    <!-- Header Area End -->

    @yield('content')



    <!-- Footer Area Start -->
    <footer class="footer-area bg-ash overflow-x-hidden">
        <div class="footer-top pt-3 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="single-footer-widget">

                            <div class="logo">
                                <a href="{{ Route('web.index') }}" class="logo"><img
                                        src="{{ asset('images/logo.png') }}" alt="logo"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer-widget">
                            <h4>ABOUT US</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="{{ route('web.privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('web.terms') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('web.faq') }}">FAQ Section</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="single-footer-widget">
                            <h4>INFORMATION</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Your Orders</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer-widget">
                            <h4>my account</h4>
                            <ul class="footer-widget-list">
                                <li><a href="{{ url('/check-out') }}">Checkout</a></li>
                                @auth
                                Welcome, {{ Auth::user()->name }} |
                                <a href="{{ route('auth.logout') }}"
                               >Logout
                                </a>
                                @else
                            <!-- User is not authenticated, display a login link -->
                            <a class="text-white" href="{{ url('/auth/login') }}">Login</a>
                        @endauth

                                <li><a href="#">Order status</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h4>sign up newsletter</h4>
                            <p class="text-light">Be the first to hear about new trending and offers and see how youve
                                helped</p>
                            <div class="newsletter-form mc_embed_signup">
                            <div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alertModalLabel">Subscription Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="alertMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="frameModalTopInfoDemo" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
                                <form
                                    action="{{url('/newsletter')}}"
                                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                    class="validate"  novalidate>
                                    @csrf
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="email" class="email"
                                            id="email" placeholder="Enter your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text"
                                                name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1"
                                                value=""></div>
                                        <button id="mc-embedded-subscribe" type="submit"
                                            name="subscribe">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-light">
                        <span class="text-light">Copyright &copy; 2023<a href="{{ url('/index') }}"
                                class="text-light">I furniture</a>. All rights reserved.</span>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="social-link text-light">
                            <a href="{{ $setting['short_description'] }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $setting['facebook_link'] }}"><i class="fab fa-facebook"></i></a>
                            <a href="{{ $setting['instagram_link'] }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <!-- all js here -->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src=" {{ asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ion.rangeSlider.min.js') }}"></script>
    <script>

    // JavaScript to handle the modal display
    @if(session('alert'))
        $(document).ready(function() {
            // Set the alert message text
            $('#alertMessage').text("{{ session('alert') }}");

            // Show the modal
            $('#alertModal').modal('show');

        });
        $('#frameModalTopInfoDemo').on('click', function () {
            // Hide the modal when the close button inside the modal is clicked
            $('#frameModalTopInfoDemo').modal('hide');
            $('#alertMessage').text('');

        });
    @endif

        $(document).ready(function() {

            $('.increment-btn').click(function(e) {
                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });
            $('.decrement-btn').click(function(e) {
                e.preventDefault();
                var
                    decre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

        });
        $(document).on('click', '.remove-from-wish', function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('delete-wish') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        updatewish(response.wishSection);
                    }
                });
            }

            function updatewish(wishHtml) {
                // Update the cart section with the new HTML content
                $('#addwish').html(wishHtml);
            }




        });


        $(document).on('click', '.remove-from-cart', function(e) {

            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('delete-cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {

                        updatecart(response.cartSection);
                        updateaddCart(response.updatecar);




                    }


                });
            }

            function updatecart(cartHtml) {
                // Update the cart section with the new HTML content
                $('.addcart').html(cartHtml);

            }

            function updateaddCart(carthtml) {
                // Update the cart section with the new HTML content
                $('#addcart1').html(carthtml);
            }

        });

        $(document).ready(function() {
            $('#product').submit(function(e) {
                e.preventDefault();

                // Serialize the form data
                var formData = $('#product').serialize();

                // Log the serialized data to the consol
                $.ajaxSetup({
                    type: 'POST',
                    url: "/add-to-cart",
                    data: formData,
                    async: true,
                    dataType: 'json',
                    beforeSend: function() {
                        // You can add any code here to be executed before the request is sent
                    },
                    complete: function() {
                        // You can add any code here to be executed after the request is completed
                    }
                });

                $.post()
                    .done(function(response) {
                        if (response.redirect) {
                            // Handle redirect
                            window.location.href = response.redirect;
                        } else {
                            // Update the cart section with the new HTML content
                            updateCart(response.cartSection);
                            // Other actions...
                        }
                    })
                    .fail(function() {
                        console.log('failed');
                    });
            });

            function updateCart(cartHtml) {
                // Update the cart section with the new HTML content
                $('.addcart').html(cartHtml);
            }
        });

        $(document).ready(function() {
            $('.add-to-wish').on('click', function() {
                var productId = $(this).data('product-id');
                console.log('Product ID:', productId); // Add this line


                $.ajax({
                    type: 'POST', // Use POST method
                    url: '{{ route('web.addtowish', ['productId' => ':productId']) }}'.replace(
                        ':productId', productId),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Check the console for the response
                        if (response.redirect) {
                            // Handle redirect
                            updateCart(response.wishSection);
                        } else {
                            // Update the cart section with the new HTML content
                            updateCart(response.wishSection);
                            // Other actions...
                        }


                        // Show the cart message

                    },
                    error: function(error) {
                        // Check the console for errors
                        console.error('Error adding to cart:', error);
                    }
                });
            });

            function updateCart(wishHtml) {
                // Update the cart section with the new HTML content
                $('#addwish').html(wishHtml);
            }


        });
    </script>


    <script>
        // JavaScript to handle the hover effect
        const cartIcon = document.getElementById('cart');
        const dropdown = document.querySelector('.dropdown');

        cartIcon.addEventListener('mouseenter', () => {
            dropdown.style.display = 'block';
        });

        cartIcon.addEventListener('mouseleave', () => {
            dropdown.style.display = 'none';
        });
    </script>
    @yield('coustomJS')


</body>

</html>
