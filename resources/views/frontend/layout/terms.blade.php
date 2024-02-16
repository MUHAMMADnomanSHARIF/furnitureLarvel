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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Term And Conditions</li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <div class="container container_1 mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text center">Term and condition</h1>
                <p></p>
                <ul>
                    <li><a href="#">Account terms</a></li>
                    <li><a href="#">Online policy</a></li>
                    <li><a href="#">Product policy</a></li>
                    <li><a href="#">Service policy</a></li>
                    <li><a href="#">Delivery policy</a></li>
                    <li><a href="#">Cancellation policy</a></li>
                    <li><a href="#">Return and replacement.</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- About Skill Area Start -->

    <section class="introduction-section">
        <div class="container">
            <h2>Account term</h2>
            <p>Creating your account is the first requirement to be part of our circle or to place any order. This account
                helps the person to place orders and connect with our customer care. Our staff provide complete guidance and
                help the person to find the best furniture for their space. We have highly trained professionals who answer
                your urgent call. Moreover, the account requires your personal information, such as name, location, address,
                and city. This information will be kept confidential and only shared with the Customer Care Officer where
                required. The process of signing up for your account is straightforward.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Online policy</h2>
            <p>After creating an account, the policy of online shopping is straightforward. Firstly, users need to accept
                all the terms in which violence is not allowed, whether verbal or technical. Users cannot transfer any
                harmful virus or effects to the website. Customers cannot verbally abuse the customer care officer, and even
                the customer care officer cannot abuse the customer. In case of any issue, the company will manage the
                problem and respond thoughtfully to resolve the issue. The next thing is to strictly ensure that our product
                is not misused or used for illegal purposes.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Product policy</h2>
            <p>The product policy is apparent, and all the details about the product are listed on the page. For more
                information, our customer care officer is available 24/7. Additional delivery charges and delivery periods
                are also mentioned. The graphical display of our products fully matches reality. Due to different devices
                and a poor internet connection, people may experience slight differences. We strictly adhere to the product
                specifications the person selected on the page, such as product color or size. We also take care of the
                number of furniture you need. We maintain the quality of the product and safety standards in this policy.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Purchase Policy</h2>
            <p>The purchase policy is simple: to purchase the product, the person needs to follow the instructions as they
                need to share their information about where they received the product. Our delivery person is also connected
                with the buyer. The purchase slip and delivery location is also shared with the person to track their parcel
                or record the purchase. We offer different ways for that person to purchase the product. It depends on the
                person and how they prefer to pay. We offer online payment through bank account and cash-on-delivery
                options. Product price and delivery charges are mentioned separately.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Service policy</h2>
            <p>In the service policy, we deal with the problems that the user may face while purchasing and searching for
                products. If a person encounters any problem on the service page or with the service officer, you can
                complain to us through email and chat box. We assure quick response and issue resolution. This policy is
                designed to maintain the quality of service; people can also complain to us if they experience any defect or
                damage in the product even if they receive a product that is delayed or receive an incorrect product. If the
                customer officer does not give you a proper reply, you can quickly mention your problem through this policy.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Delivery policy</h2>
            <p>Delivery policy cares about delivering the product safely at one time. After dispatching the product from the
                warehouse, we send it to the delivery office. We have shared the product tracking details, which help the
                person to monitor the parcel. If the person does not receive the parcel on time, they can contact our
                customer care officer. If the product is not delivered to the person, they can claim the company about the
                product. There is no fixed day for product delivery; it takes at least 2 to 5 working days. Case-on-delivery
                service is also available when the product arrives at your doorstep.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Cancellation policy</h2>
            <p>In case of cancellation of an order, all sub-delivery charges are non-refundable. If the order is canceled
                before dispatch, the person will not incur further charges. Still, if the person withdraws the order after
                it has been dispatched from the warehouse, then the person will have to bear some amount due to cancellation
                charges. The company will not take late charges if the order is not delivered on time. Re-delivery or
                cancellation charges may apply on failed deliveries. The product can be delivered any day of the week
                between 7 am and 10 pm.
            </p>

        </div>
    </section>
    <section class="introduction-section">
        <div class="container">
            <h2>Return and replacement policy </h2>
            <p>The return policy is apparent; one can return the product without damage within 14 days of delivery. After 14
                days of delivery, a person can not return the product. We also offer to exchange it with other products, but
                it is not refundable. If a damaged product is sent to anyone, the company will bear the loss and replace it
                with a better product. The company is not responsible for damage in case of shopping. In case of product
                damage or any defect, the replacement policy is active for 30 days from delivery.
            </p>
            <h6>
                Further, copyright of product and website data is not allowed; no person can use the data, such as content
                and image, and no company can use the company name.
            </h6>
        </div>
    </section>

    <!-- About Skill Area End -->
@endsection

@section('coustomJS')
@endsection
