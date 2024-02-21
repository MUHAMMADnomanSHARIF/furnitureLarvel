@extends('frontend.layout.app')

@section('CoustomCSS')
    <style>
        body {
            /* Typography Declaration */
            color: #222222;
            font-size: 1em;
            font-family: "Open Sans", "Helvetica Neue", sans-serif;
        }

        .masthead-heading,
        .masthead-intro,
        .content-footer {
            text-align: center;
        }

        .masthead {
            padding: 11em 0;
            background-image: url("https://images.unsplash.com/photo-1512716679859-da19b4af9c38?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
            border-top: solid 2em #b69760;
        }

        .masthead-intro {
            /* Text Declarations */
            margin-bottom: 0.1em;
            font-family: "Gentium Book Basic," Georgia, serif;
            font-size: 4em;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .masthead-heading {
            /*Layout Declarations */
            margin-top: -0.2em;
            /* Typography Declarations */
            font-family: "Open Sans", "Helvetica Neue", sans-serif;
            font-weight: light;
            font-size: 1.5em;
            letter-spacing: -0.01em;
            text-transform: uppercase;
            color: #ffffff;
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

        .container_1 {
            max-width: 800px;
            margin: 0 auto;
        }

        .container_1 ul {
            list-style: none;
            padding: 0;
        }

        .container_1 ul li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
        }

        .container_1 ul li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            background-color: #007bff;
            /* Adjust the color as needed */
            border-radius: 50%;
        }

        .container_1 ul li:after {
            content: '';
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 100%;
            background-color: #ccc;
            /* Adjust the color as needed */
        }

        @media only screen and (max-width: 571px) {
            .masthead {
                padding: 5em 0;
            }

            .masthead-intro {
                font-size: 3em;
            }

            .masthead-heading {
                font-size: 0.5em;
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
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Delievery Information</li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <div class="container container_1 mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text center">Delivery page</h1>
                <p></p>
                <ul>
                    <li><a href="#">Place your order</a></li>
                    <li><a href="#">Product shipping and handling </a></li>
                    <li><a href="#">Track your order</a></li>
                    <li><a href="#">Share your delivery</a></li>
                    <li><a href="#">Product Assurance</a></li>
                    <li><a href="#">Contactless shipping</a></li>
                    <li><a href="#">Updates notification</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- About Skill Area Start -->

    <section class="introduction-section">
        <div class="container">
            <h2>Place your order</h2>
            <p>Furnimart is a platform that provides you the best quality furniture per your requirement. You need to order
                as per the delivery policy to have your favorite furniture delivered to your designated location. To place
                your order, you need to mention your information, such as name, location, phone number, etc. Our Customer
                Care Officer maintains the confidentiality of your personal information and payment card. They send your
                order to the warehouse for further processing and assure their shipment. We will also update you about your
                delivery location. Our experts are trained to handle and protect your parcel from damage.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Product shipping and handling</h2>
            <p>The shipping and handling process involves sending the product from the warehouse to the delivery office. Our
                experts handle the product with great care and mention all the information that helps the delivery person to
                reach your location. You will receive your product within working days, but the day is not confirmed.
                Products can arrive at your doorstep in 7 days. To track your product, we send you your product tracking
                number, which shows you the location of your parcel. We even notify you via email or text message when your
                product arrives.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Track your order</h2>
            <p>We cannot tell you the exact day of delivery, but we share the tracking number, which shows the location of
                your product. To reduce your wait, this tracking ID ensures your parcel is on its way to delivery. You can
                also estimate the delivery time. Many people forget about the parcel, but we remind you by notifications.
                After completing the packaging, the tracking ID of the product is obtained from the delivery office, when
                the product reaches the delivery office. They assign a delivery ID to the product, which helps you track
                your order, and the company also keeps it on record.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>
                Share your delivery info
            </h2>
            <p>You can share product delivery information with your partner. There is an option that allows you to share
                product location and information. This option helps you continue with your daily routine. If you are away
                from a directed location, you may share this information with loved ones who receive the product instead of
                you. You can also contact the delivery person and monitor the delivery person's route. This option maintains
                the security of the product
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Product Assurance</h2>
            <p>Our expert maintains product assurance to meet your expectations, but if you face any problem regarding the
                product, you can contact our customer care officer, who can solve the problem with the best possible
                solution. You can notify us directly if your product has been damaged in shipping, even if the product was
                not manufactured correctly or if something is missing from your order. We are here to solve your problem on
                your call. You can also complain to us if you receive the wrong product.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Contact-less delivery </h2>
            <p>Sometimes, it takes work for you to receive updates or notifications about product delivery. You can choose a
                contactless delivery option. In this option, you may not receive any calls or messages from us; your product
                is delivered directly to the location you direct. We know that many people are busy with their busy
                schedules and don't have time to receive notifications; for those, we offer contactless delivery. Our
                customer care officer ensures all delivery details before such delivery.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Update notification</h2>
            <p>You can receive notifications for product updates. These notifications share all the information related to
                the product and delivery. You can receive notifications in the form of messages. They help you assume the
                arrival of your parcel at the place you direct. These are gentle reminders to remind you about the product;
                you can create your own space for the product. You can ensure the product's safety and mention the best
                route for the product. Our Customer Care Officer is always ready to assist you in any matter.
            </p>
            <h6>We provide a smooth delivery service to meet your expectations.</h6>
        </div>
    </section>

    <!-- About Skill Area End -->
@endsection

@section('coustomJS')
@endsection
