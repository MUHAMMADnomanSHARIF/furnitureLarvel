@extends('frontend.layout.app')

@section('CoustomCSS')
    <style>
        .masthead-heading,
        .masthead-intro,
        .content-footer {
            text-align: center;
        }

        .masthead {
            height: 100%;
            padding: 20em 0;
            background-image: url("assets/frontend/img/banner/about.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;

        }



        .masthead-heading {
            /*Layout Declarations */
            margin-top: -0.2em;
            /* Typography Declarations */
            font-family: "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: light;
            font-size: 4em;
            letter-spacing: -0.01em;
            text-transform: uppercase;
            color: #101010;
        }

        /* Text Declarations for Sections */

        .introduction-section>p,
        .location-section>p,
        .content-footer>p,
        .questions-section>p {
            font-weight: 300;
            letter-spacing: 0.05em;
        }

        /* Section Styling */

        .introduction-section,
        .location-section,
        .questions-section {
            max-width: 50em;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2em;
        }

        .questions-section>h2 {
            /*Typography Declarations */
            font-family: "Gentium Book Basic", Georgia, serif;
            font-size: 1.1 em;
            font-weight: bold;
            color: #222222;
        }

        /* Footer Styling */


        @media only screen and (max-width: 571px) {
            .masthead {
                padding: 5em 0;
            }


            .masthead-heading {
                font-size: 3em;
            }

            .container {
                padding: 0 3em;
            }

        }
    </style>
@endsection

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-dark">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- About Skill Area Start -->
    <header class="masthead">

        <h1 class="masthead-heading">About Us</h1>
    </header>
    <section class="introduction-section">
        <div class="container">
            <h2>Step ahead toward your dreamy world</h2>
            <p>Welcome to the world of beautiful furniture; Furnimart is the best furniture supplier that offers you
                fantastic furniture for your living room. We know that everyone wants to make their space functional and
                aesthetic. We provide the best furniture that helps you stay relaxed and sleep soundly. We transform your
                living area or bedroom into a beautiful one. We offer you the best living room furniture to fulfill your
                desire and decorate your area. We design your space with beautiful furniture like luxurious beds,
                comfortable sofas, and supportive wardrobes. To make your life easier, we offer comfortable mattresses.
            </p>

        </div>
    </section>

    <section class="location-section">
        <div class="container">
            <h2>Transform your dream into reality</h2>
            <p>We train our experts who can design the room as per your wish. We turn the idea of your mind into a reality
                with beautiful colors and unique designs. We make the furniture of your ideas. Share your dream idea about
                the interior of your room, and they will follow your instructions and act accordingly. Our experts design
                beautiful furniture with your desired material or in your favorite color to meet your needs. We transform
                your living room into a place where you can release all your stress and tension. May this place become a
                piece of peace, excitement, and comfort for you and your family.</p>
        </div>
    </section>

    <section class="questions-section">
        <div class="container">

            <h2>WHY CHOOSE US</h2>
            <p>We aim to provide you with the best quality content at an affordable price that meets the needs of the
                individual. We design furniture according to your desires and demands. The main goal is to provide a place
                to de-stress and recharge your energies for the next day. We also offer a mattress that aligns you while you
                sleep and protects you from back and muscle pain. We make it easy to assemble your furniture to make it more
                reliable. We offer you a variety of beds, sofas, and wardrobes that help you organize your room accessories
                with a restful sleep.</p>
        </div>
    </section>
    <section class="questions-section">
        <div class="container">

            <h2>Design a space for your family and kids </h2>
            <p>We value family and understand the importance of their comfort. We design your home with comfortable
                furniture that brings joy and comfort to your family. We create every corner of your home with beautiful,
                comfortable sofas. Also, design a space for your children that ensures their safety and fun. We offer you a
                bunk bed for your kids, providing ample sleeping space. In addition, we offer different beds to suit your
                space requirements. We care about your physical and mental health, we provide the best bed frame that
                maintains your posture during sleep and protects you from muscle pain.</p>
        </div>
    </section>

    <section class="service-grid pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center mb-4">
                    <div class="service-title">
                        <h3>Act of assistance </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4>Design your space</h4>
                        <p>We design your space with our best furniture to make it beautiful and comfortable for sleeping
                            and living.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="far fa-chart-bar"></i>
                        </div>
                        <h4>Professional staff</h4>
                        <p>We provide the best professionals to guide you and help you choose the best furniture for your
                            space.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4>Fast delivery</h4>
                        <p>We ensure timely product delivery so you can organize your space faster and take the stress out
                            of furniture.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>A diverse range of product</h4>
                        <p>We offer you a variety of furniture, such as beds, sofas, and wardrobes, to help you organize
                            space.</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <h4>Discount</h4>
                        <p>We offer discounts and additional offers that add more products to your desired product range.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <h4>Affordable</h4>
                        <p>We care about your financial stress, that's why we offer you the best products that suit your
                            budget.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="introduction-section">
        <div class="container">
            <h2>Supremacy of furnimart</h2>
            <p>Furnimart offers the best beds, sofas, wardrobes and accessories to make your life easier. Our experts are
                highly trained in selecting and guiding you to choose the best furniture for your space. They decorate every
                corner of your space with beautiful furniture colors. Our aim is not only to illustrate the area but also to
                maintain your health. We design the best bed frame that helps you adjust easily and provides you with
                storage space to manage the room accessories. We also offer comfortable mattresses that complete your
                furniture set. Our experts are always available to help you; you only need to make a call. So what are you
                waiting for? Contact us to design your area with the best furniture.
            </p>

        </div>
    </section>
    <!-- About Skill Area End -->
@endsection

@section('coustomJS')
@endsection
