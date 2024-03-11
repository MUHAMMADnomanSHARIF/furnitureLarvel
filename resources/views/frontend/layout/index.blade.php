@extends('frontend.layout.app')

@section('CoustomCSS')
    <style>
        html,
        body {
            overflow-x: hidden;
        }


        @media only screen and (max-width: 676px) {

            .slider-banner h2,
            h3,
            p {
                color: black;
            }


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
            font-size: 28px;
            font-weight: 600;
            /* Adjust the font size */
        }

        .icons-and-details .style {
            border: 1px solid black;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            box-shadow: 2px 2px 5px;

        }


        @media only screen and (max-width: 676px) {
            .banner-text {

                position: absolute;
                width: 100%;
                top: 50%;
                left: 50%;

                color: black;
                /* Adjust the text color */

                font-size: 20px;
                font-weight: 700;
                /* Adjust the font size */
            }
        }

        /* Default styles for larger screens */
    </style>
@endsection

@section('content')
    <!-- Slider Area Start -->
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel carousel-style-dot">
            <div class="single-slide" style="background-image: url('assets/slider/1.png');">
                <div class="container">
                    <div class="slider-banner">
                        <h2>Beautify your living space</h2>
                        <h3>Sofas</h3>
                        <p>Decor your area with a lavish sofa</p>
                        <a href="shop.html" class="banner-btn">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="single-slide slide-two" style="background-image: url('assets/slider/3.png');">
                <div class="container">
                    <div class="slider-banner">
                        <h2>Elevant the living style</h2>
                        <h2>Lounge Chairs</h2>
                        <p>Increase the elegance with lounge chairs
                        </p>
                        <a href="shop.html" class="banner-btn">Shop now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Banner Area End -->

    <!-- Banner Area End -->
    <!-- Category  Area Start -->





    <!-- Banner Area End -->

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









                    @foreach ($product as $products)
                        <div class="custom-col">
                            <div class="product-item">
                                <span class="hot-sale">sale</span>
                                <div class="product-image-hover">
                                    <a href="{{ url('/product-detail' . $products->name) }}">
                                        <img class="primary-image" src="{{ $products->getFirstMediaUrl('product.image') }}"
                                            alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button class="add-to-cart" data-product-id="{{ $products->id }}" role="button"><i
                                                class="icon icon-FullShoppingCart"></i></button>
                                        <button class="add-to-wish" data-product-id="{{ $products->id }}"><i
                                                class="icon icon-Heart"></i></button>

                                        <a href="{{ url('product-detail/' . $products->name) }}"><i
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
                                    <h4><a href="shop.html">{{ $products->name }}</a></h4>
                                    <div class="product-price"><span>${{ $products->discounted_price }}</span><span
                                            class="prev-price">${{ $products->price }}</span></div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                                <span class="banner-hover-text position-absolute w-100 text-center">Bed
                                    collection</span>
                            </a>

                            <!-- Centered text -->

                            <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                <h4>Luxurious bed</h4>
                                <p>Organize your room with our beds</p>
                            </div>

                        </div>


                        <div class="col-md-4 grid-item position-relative">
                            <!-- Image with link -->
                            <a class="banner-image" href="shop.html">
                                <img src="assets/slider/4.png" alt="">
                                <span class="banner-hover-text position-absolute w-100 text-center">Sofa
                                    collection</span>
                            </a>

                            <!-- Centered text -->

                            <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                <h4>Alluring sofa</h4>
                                <p>Furnish your area with cozy sofas.</p>
                            </div>

                        </div>
                        <div class="col-md-4 grid-item position-relative">
                            <!-- Image with link -->
                            <a class="banner-image" href="shop.html">
                                <img src="assets/slider/5.png" alt="">
                                <span class="banner-hover-text position-absolute w-100 text-center">Wardrobe
                                    collection</span>
                            </a>

                            <!-- Centered text -->

                            <div class="position-absolute w-100 text-start text-black bottom-50 ms-5">

                                <h4>Astonish wardrobe</h4>
                                <p>Manage your luggage with a classy wardrobe</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Area End -->
        </div>
    </div>




    <!-- Banner Area Start -->
    <div class="container-fluid my-5 p-0 m-0 banner">
        <!-- Banner Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text">
                    <!-- Add your text here -->
                    Furnimart is a furniture hub that provides a diverse range of furniture that meets customers'
                    requirements. We offer the best quality beds, sofas, wardrobes, and mattresses to meet your needs.
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-container">
                    <!-- First Paragraph -->
                    <div>

                        <p>
                            We provide the best quality beds in various designs and offer divan beds with a strong base and
                            storage. We manufacture different sizes of beds, such as single and double divan beds. Our goal
                            is
                            to make your life easier, so to organize your living room accessories, we recommend ottoman beds
                            that provide you with a beautiful structured bed with a wide range of storage underneath. We
                            customize your furniture according to your instructions and requirements. We offer you gorgeous
                            wardrobes that help you organize your accessories. To make your space more aesthetic, we provide
                            high-gloss wardrobes that enhance the look
                        </p>
                    </div>

                    <!-- Second Paragraph -->
                    <div class="mt-4">

                        <p>
                            To meet your child's needs and take your stress out of the nursery, we offer a versatile quality
                            bunk
                            bed that provides a safe place for your children to sleep peacefully. We made a bunk bed with
                            stainless steel, which lightens the weight of the bed. We customize the bed with your favorite
                            material. If you like a wooden bed, we make it with the best quality wood, and if you want metal
                            material, we make it with high-quality metal. Our main aim is to provide you with the best
                            services.
                            We cover and furnish the furniture with your favorite color.
                        </p>
                    </div>
                    <div class="mt-4">

                        <p>
                            To enhance your comfort, we offer a mattress that perfectly matches your bed frame and gives you
                            a restful sleep. We design the best bed frame that protects you from back and muscle pain. We
                            also
                            offer a crushed velvet bed that gives you a soothing effect, helps you de-stress throughout the
                            day,
                            and restores energy for the next day. We also customize the leather bed to give your room a
                            royal
                            look. To complete your furniture, we offer a beautiful sofa set that gives you a place to sit.
                            Our
                            experts aim to provide you with furniture that meets your expectations of furniture.

                        </p>
                    </div>

                    <!-- Read More Button -->
                    <div class="text-center mt-4">
                        <a href="" class="banner-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonieal Section -->

    <div class="section-title mt-4 ">
        <h2 align="center"><span>Testimonial</span></h2>
    </div>

    <div class=" container Testimonieal pb-3">

        <div class="  owl-carousel owl-theme row">
            <figure class="snip1533 item" data-merge="1">
                <figcaption>
                    <blockquote>
                        <p>I highly recommend it. I received the same product as I see in the picture. good quality
                            products.</p>
                    </blockquote>
                    <h3>Mia wright</h3>
                    <h4>Google Inc.</h4>
                </figcaption>
            </figure>
            <figure class="snip1533 item" data-merge="1">
                <figcaption>
                    <blockquote>
                        <p>The product arrived on time at the location as directed. Thanks for the perfect installation.
                        </p>
                    </blockquote>
                    <h3>Jacob kim</h3>
                    <h4>Facebook</h4>
                </figcaption>
            </figure>
            <figure class="snip1533 item" data-merge="1">
                <figcaption>
                    <blockquote>
                        <p>Excellent customer service; I received the exact product I was instructed to make.
                        </p>
                    </blockquote>
                    <h3>Emily cooper</h3>
                    <h4>Twitter</h4>
                </figcaption>
            </figure>
        </div>
    </div>

    <!-- End Testimonieal Section -->


<!-- Blog Area Start -->
<div class="blog-area pb-85">
    <div class="container text-center">
        <div class="section-title">
            <span>Latest New</span>
            <h2><span>FROM OUR BLOG</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="blog-carousel owl-carousel">
                @foreach($blogs as $blog)
                <?php
                    $date = $blog->created_at; // Your date from the database

                    // Extract the day and month from the date
                    $day = date("d ", strtotime($date)); // Format the date as "21 February"
                    $month = date("M ", strtotime($date));
                   ?>
                <div class="custom-col">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="/blog-detail/{{$blog->id}}">
                                <img src="{{$blog->getFirstMediaUrl('blog.image')}}" alt="" height="200px" width>
                                <span><?php echo $day; ?> <span><?php echo $month; ?></span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h5><a href="/blog-detail/{{$blog->id}}">{{$blog->title}}</a></h5>
                            <p>{{$blog->description}}</p>
                            <a href="/blog-detail/{{$blog->id}}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

    <!-- ========== Start Section cards ========== -->


    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-truck fa-2x me-3"></i>
                        <div>
                            <h5 class="card-title">Free delivery</h5>
                            <p class="card-text">Free delivery throughout the UK</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-check-circle fa-2x me-3"></i>
                        <div>
                            <h5 class="card-title">Quality standards</h5>
                            <p class="card-text">We offer the best quality products</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">

                    <div class="card-body d-flex align-items-center">
                        <i class="fas fa-shopping-cart fa-2x me-3"></i>
                        <div>
                            <h5 class="card-title">Easy to purchase</h5>
                            <p class="card-text">We offer the best products at affordable prices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== End Section cards ========== -->
@endsection

@section('coustomJS')
@endsection
