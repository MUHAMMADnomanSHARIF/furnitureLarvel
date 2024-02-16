@extends('frontend.layout.app')

@section('CoustomCSS')
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        @media only screen and (max-width: 676px) {

            html,
            body {
                overflow-x: hidden;
            }
        }

        .cat-image {
            height: 130px;
            width: 130px;
        }

        .banner {
            position: relative;
            height: 70vh;
            /* Adjust the height as needed */
            background: url('{{ asset('images/banner.png') }}') center/cover fixed no-repeat;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            /* Adjust the text color */
            text-align: center;
            font-size: 24px;
            /* Adjust the font size */
        }
    </style>
@endsection

@section('content')
    <!-- Slider Area Start -->
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel carousel-style-dot">
            <div class="single-slide" style="background-image: url('assets/slider/1.png');">
                <div class="container">
                    <div class="slider-banner">
                        <h2>Timeless Versatile</h2>
                        <h3>Sofas</h3>
                        <p>Suitable for all Styles of interior</p>
                        <a href="shop.html" class="banner-btn">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="single-slide slide-two" style="background-image: url('assets/slider/3.png');">
                <div class="container">
                    <div class="slider-banner">
                        <h1>inimalist design</h1>
                        <h2>Lounge Chairs</h2>
                        <p>Lorem ipsum dolor sit amet,
                        </p>
                        <a href="shop.html" class="banner-btn">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="single-slide slide-three" style="background-image: url('assets/slider/8.png');">
                <div class="container">
                    <div class="slider-banner">

                        </p>
                        <a href="shop.html" class="banner-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <!-- Banner Area Start -->
    <!-- <div class="banner-area text-center pt-90">
                                <div class="container ">

                                        <div class="section-title">

                <h2><span>Categories</span></h2>
            </div> -->

         <!-- Banner Area Start -->
<!-- <div class="banner-area">
    <div class="container">
        <div class="row grid">
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/4.jpg" alt="">
                    <span class="banner-hover-text">Chair collection</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/5.jpg" alt="">
                   <span class="banner-hover-text">Lighting collection</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/6.jpg" alt="">
                    <span class="banner-hover-text">HOME ACCESSORIES</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/7.jpg" alt="">
                    <span class="banner-hover-text">Black Hanging Chair</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/9.jpg" alt="">
                    <span class="banner-hover-text">COFFEE &amp; SIDE TABLES</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/8.jpg" alt="">
                    <span class="banner-hover-text">sofa collection</span>
                </a>
            </div>
        </div>
    </div>
</div> -->
<!-- Banner Area End -->
    </div>
</div>
<!-- Banner Area End -->
 <!-- Category  Area Start -->
 <div class="section-title ">

<h2 align="center" class="mt-5 fs-1 fw-700"><span>Categories</span></h2>

</div>
<div class="container-fluid mb-3">
<div class="row justify-content-center">
    {{-- Adjusted classes to center one category if there's only one --}}
    @foreach ($childcategory as $child)
        <div class="col-md-{{ count($childcategory) === 1 ? '8' : '2' }} col-sm-6 col-6">
            <div class="card border-0" onclick="location.href='/product-by-child-category/{{ $child->id }}'">
                <div class="text-center">
                    <img src="{{ $child->getFirstMediaUrl('childCategory.image') }}"
                        class="rounded-circle cat-image" alt="cat-image">
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <h5 class="card-title">{{ $child->name }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>







<!-- Category  Area End -->


 <!-- Feature Product Area Start -->
 <div class="product-area text-cen ter pt-90">
    <div class="container">
        <div class="section-title">
            <span>new Items</span>
            <h2><span>Latest Product</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="product-carousel owl-carousel carousel-style-one">









                @foreach($product as $product)
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                             <a href="{{ url('product-detail/'.$product->name) }}">
                                            <img class="primary-image" src="{{$product->getFirstMediaUrl('product.image')}}" alt="">
                                        </a>
                                        <div class="product-hover">
                                        <button class="add-to-cart" data-product-id="{{ $product->id }}"   role="button"><i class="icon icon-FullShoppingCart"></i></button>
                                            <button class="add-to-wish" data-product-id="{{ $product->id }}"><i class="icon icon-Heart"></i></button>

                                            <a href="{{ url('product-detail/'.$product->name) }}"><i class="icon icon-Files"></i></a>
                                        </div>
                        </div>
                        <div class="product-text">

                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">{{$product->name}}</a></h4>
                            @if($product->discounted_price)
                            <div class="product-price"><span>${{$product->discounted_price}}</span><span class="prev-price">${{$product->price}}</span></div>
                            @else
                            <div class="product-price"><span>${{$product->price}}</span></div>
                            @endif


                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- Feature Product Area End -->

<div class="banner-area text-center pt-5 pt-md-5 pt-lg-90">
        <div class="container">
            <div class="section-title">
                <h2><span>Design</span></h2>
            </div>

            <!-- Banner Area Start -->
            <div class="banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 grid-item position-relative">
                            <!-- Image with link -->
                            <a class="banner-image" href="shop.html">
                                <img src="assets/slider/4.png" alt="">
                                <span class="banner-hover-text position-absolute w-100 text-center">Chair collection</span>
                            </a>

                            <!-- Centered text -->

                            <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                <h4>Heading</h4>
                                <p>Paragraph</p>
                            </div>

                        </div>


                        <div class="col-md-4 grid-item position-relative">
                            <!-- Image with link -->
                            <a class="banner-image" href="shop.html">
                                <img src="assets/slider/4.png" alt="">
                                <span class="banner-hover-text position-absolute w-100 text-center">Chair collection</span>
                            </a>

                            <!-- Centered text -->

                            <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                <h4>Heading</h4>
                                <p>Paragraph</p>
                            </div>

                        </div>
                        <div class="col-md-4 grid-item position-relative">
                            <!-- Image with link -->
                            <a class="banner-image" href="shop.html">
                                <img src="assets/slider/5.png" alt="">
                                <span class="banner-hover-text position-absolute w-100 text-center"> collection</span>
                            </a>

                            <!-- Centered text -->

                            <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                <h4>Heading</h4>
                                <p>Paragraph</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area End -->
        </div>
    </div>


    <!-- ========== Start Section ========== -->
    <section class="container mt-4">
        <!-- 1 -->
        <div class="row mx-auto icons-and-details">
            <div class="col-lg-4">
                <div class="d-flex gap-4 align-items-center">
                    <div class="home-icon"><i class="fa-solid fa-truck fa-2xl"></i></div>
                    <div class="home-text" style="font-size: 5px;">
                        <h6>Heading</h6>
                        <p class="lead h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex gap-4 align-items-center">
                    <div class="home-icon"><i class="fa-regular fa-handshake fa-2xl"></i></div>
                    <div class="home-text" style="font-size: 5px;">
                        <h6>Heading</h6>
                        <p class="lead h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex gap-4 align-items-center">
                    <div class="home-icon"><i class="fa-solid fa-truck fa-2xl"></i></div>
                    <div class="home-text" style="font-size: 5px;">
                        <h6>Heading</h6>
                        <p class="lead h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- 2 -->



    <!-- ========== End Section ========== -->

    <!-- Information Area Start -->




    <!-- Information Area End -->

    <!-- Banner Area Start -->
    <!-- <div class="banner-area">
                                <div class="container">
                                    <div class="row grid">
                                        <div class="col-md-3 grid-item">
                                            <a class="banner-image" href="shop.html">
                                                <img src="assets/img/banner/4.jpg" alt="">
                                                <span class="banner-hover-text">Chair collection</span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 grid-item">
                                            <a class="banner-image" href="shop.html">
                                                <img src="assets/img/banner/5.jpg" alt="">
                                               <span class="banner-hover-text">Lighting collection</span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 grid-item">
                                            <a class="banner-image" href="shop.html">
                                                <img src="assets/img/banner/6.jpg" alt="">
                                                <span class="banner-hover-text">HOME ACCESSORIES</span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 grid-item">
                                            <a class="banner-image" href="shop.html">
                                                <img src="assets/img/banner/7.jpg" alt="">
                                                <span class="banner-hover-text">Black Hanging Chair</span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 grid-item">
                                            <a class="banner-image" href="shop.html">
                                                <img src="assets/img/banner/9.jpg" alt="">
                                                <span class="banner-hover-text">COFFEE &amp; SIDE TABLES</span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 grid-item">
                                            <a class="banner-image" href="shop.html">
                                                <img src="assets/img/banner/8.jpg" alt="">
                                                <span class="banner-hover-text">sofa collection</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- Banner Area End -->
    </div>
    </div>
    <!-- Banner Area End -->
    <!-- Category  Area Start -->
    <div class="section-title ">

        <h2 align="center" class="mt-5 fs-1 fw-700"><span>Categories</span></h2>

    </div>
    <div class="container-fluid mb-3">
        <div class="row justify-content-center">
            {{-- Adjusted classes to center one category if there's only one --}}
            @foreach ($childcategory as $child)
                <div class="col-md-{{ count($childcategory) === 1 ? '8' : '2' }} col-sm-6 col-6">
                    <div class="card border-0" onclick="location.href='/product-by-child-category/{{ $child->id }}'">
                        <div class="text-center">
                            <img src="{{ $child->getFirstMediaUrl('childCategory.image') }}"
                                class="rounded-circle cat-image" alt="cat-image">
                        </div>
                        <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">{{ $child->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>







    <!-- Category  Area End -->


    <!-- Feature Product Area Start -->
    <div class="product-area text-cen ter pt-90">
        <div class="container">
            <div class="section-title">
                <span>new Items</span>
                <h2><span>Latest Product</span></h2>
            </div>
        </div>
        <div class="container">
            <div class="custom-row">
                <div class="product-carousel owl-carousel carousel-style-one">









                    @foreach ($product as $product)
                        <div class="custom-col">
                            <div class="product-item">
                                <span class="hot-sale">sale</span>
                                <div class="product-image-hover">
                                    <a href="{{ url('product-detail/' . $product->name) }}">
                                        <img class="primary-image" src="{{ $product->getFirstMediaUrl('product.image') }}"
                                            alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button class="add-to-cart" data-product-id="{{ $product->id }}" role="button"><i
                                                class="icon icon-FullShoppingCart"></i></button>
                                        <button class="add-to-wish" data-product-id="{{ $product->id }}"><i
                                                class="icon icon-Heart"></i></button>

                                        <a href="{{ url('product-detail/' . $product->name) }}"><i
                                                class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">

                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">{{ $product->name }}</a></h4>
                                    <div class="product-price"><span>${{ $product->discounted_price }}</span><span
                                            class="prev-price">${{ $product->price }}</span></div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Feature Product Area End -->

        <div class="banner-area text-center pt-5 pt-md-5 pt-lg-90">
            <div class="container">
                <div class="section-title">
                    <h2><span>Design</span></h2>
                </div>

                <!-- Banner Area Start -->
                <div class="banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 grid-item position-relative">
                                <!-- Image with link -->
                                <a class="banner-image" href="shop.html">
                                    <img src="assets/slider/6.png" alt="">
                                    <span class="banner-hover-text position-absolute w-100 text-center">Chair
                                        collection</span>
                                </a>

                                <!-- Centered text -->

                                <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                    <h4>Heading</h4>
                                    <p>Paragraph</p>
                                </div>

                            </div>


                            <div class="col-md-4 grid-item position-relative">
                                <!-- Image with link -->
                                <a class="banner-image" href="shop.html">
                                    <img src="assets/slider/4.png" alt="">
                                    <span class="banner-hover-text position-absolute w-100 text-center">Chair
                                        collection</span>
                                </a>

                                <!-- Centered text -->

                                <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                    <h4>Heading</h4>
                                    <p>Paragraph</p>
                                </div>

                            </div>
                            <div class="col-md-4 grid-item position-relative">
                                <!-- Image with link -->
                                <a class="banner-image" href="shop.html">
                                    <img src="assets/slider/5.png" alt="">
                                    <span class="banner-hover-text position-absolute w-100 text-center"> collection</span>
                                </a>

                                <!-- Centered text -->

                                <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                    <h4>Heading</h4>
                                    <p>Paragraph</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner Area End -->
            </div>
        </div>


        <!-- ========== Start Section ========== -->
        <section class="container mt-4">
            <!-- 1 -->
            <div class="row mx-auto icons-and-details">
                <div class="col-lg-4">
                    <div class="d-flex gap-4 align-items-center">
                        <div class="home-icon"><i class="fa-solid fa-truck fa-2xl"></i></div>
                        <div class="home-text" style="font-size: 5px;">
                            <h6>Heading</h6>
                            <p class="lead h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex gap-4 align-items-center">
                        <div class="home-icon"><i class="fa-regular fa-handshake fa-2xl"></i></div>
                        <div class="home-text" style="font-size: 5px;">
                            <h6>Heading</h6>
                            <p class="lead h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex gap-4 align-items-center">
                        <div class="home-icon"><i class="fa-solid fa-truck fa-2xl"></i></div>
                        <div class="home-text" style="font-size: 5px;">
                            <h6>Heading</h6>
                            <p class="lead h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- 2 -->



        <!-- ========== End Section ========== -->

        <!-- Information Area Start -->




        <!-- Information Area End -->

        <!-- Banner Area Start -->
        <div class="container-fluid my-5 p-0 m-0 banner">
            <!-- Banner Section -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-text">
                        <!-- Add your text here -->
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In ex magni blanditiis? Maxime, quidem ex?
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Testimonieal Section -->

        <div class="section-title ">
            <h2 align="center"><span>Testimonial</span></h2>
        </div>

        <div class=" container Testimonieal pb-3">

            <div class="  owl-carousel owl-theme row">
                <figure class="snip1533 item" data-merge="1">
                    <figcaption>
                        <blockquote>
                            <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
                        </blockquote>
                        <h3>Wisteria Ravenclaw</h3>
                        <h4>Google Inc.</h4>
                    </figcaption>
                </figure>
                <figure class="snip1533 item" data-merge="1">
                    <figcaption>
                        <blockquote>
                            <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
                        </blockquote>
                        <h3>Ursula Gurnmeister</h3>
                        <h4>Facebook</h4>
                    </figcaption>
                </figure>
                <figure class="snip1533 item" data-merge="1">
                    <figcaption>
                        <blockquote>
                            <p>The only skills I have the patience to learn are those that have no real application in life.
                            </p>
                        </blockquote>
                        <h3>Ingredia Nutrisha</h3>
                        <h4>Twitter</h4>
                    </figcaption>
                </figure>
            </div>
        </div>

        <!-- End Testimonieal Section -->



        <!-- ========== Start Section blogs ========== -->
        <div class="container">

            <div class="row text-center mb-4">
                <h2>Our Blogs</h2>
            </div>
            <div class="row">
                <!-- Blog 1 - Large Screen -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mx-auto">
                    <!-- Your blog content goes here -->
                    <img src="blog1.jpg" alt="" class="img-fluid mb-2">
                    <h2>Blog Title 1</h2>
                    <p>Blog content goes here...</p>
                    <a href="#" class="btn btn-primary">Read</a>
                </div>

            </div>
        </div>

        <!-- ========== End Section blogs ========== -->
    @endsection

    @section('coustomJS')
    @endsection
