@extends('frontend.layout.app')

@section('CoustomCSS')
    <style>
        .contact-page input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            border: none;
            border-bottom: 2px solid rgb(128, 126, 126);
            background: transparent;
            outline: none;
            width: 100%;
            text-transform: capitalize;
            padding: 1rem 0.4rem;
        }

        .aside {

            animation: animateClr 5s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
            background-size: 400%;
        }

        @keyframes animateClr {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .random i:not([name="logo-codepen"]) {
            border: 1px solid currentColor;
            border-radius: 20%;
            padding: 1rem;
        }

        /* Add responsive styling using media queries */

        @media only screen and (max-width: 992px) {

            html,
            body {
                overflow-x: hidden;
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
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb Area End -->
    <!-- Contact Area Start -->
    <div class="container mt-5 border-1 contact-page">
        <div class="bg-dark">
            <div class="row">

                <div class="col-lg-8 col-md-12 p-5 bg-white rounded-3">

                    <form class="row mb-3">
                        <div class="col-md-6 p-3">
                            <input required placeholder="first name" type="text" name="" id="" />
                        </div>
                        <div class="col-md-6 p-3">
                            <input required placeholder="last name" type="text" name="" id="" />
                        </div>
                        <div class="col-md-6 p-3">
                            <input required placeholder="E-mail" type="email" name="" id="" />
                        </div>
                        <div class="col-md-6 p-3">
                            <input required placeholder="phone" type="tel" name="" id="" />
                        </div>
                        <div class="col-md">
                            <textarea required name="" placeholder="write your message" id="" cols="30" rows="1"></textarea>
                        </div>
                        <div class="text-end mt-4">
                            <button id="" class="banner-btn" type="submit" name="subscribe">Contact Us </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
                    <div class="mb-5">
                        <h2 class="text-white">Contact Information</h2>
                        <p class="">
                            <small>
                                Fill out the from and we will get back to you whitin 24 hours
                            </small>
                        </p>
                    </div>
                    <div class="d-flex flex-column px-0 random">
                        <ul class="m-0 p-0">
                            <li class="d-flex justify-content-start align-items-center mb-4">
                                <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <span>+447916312844</span>
                            </li>
                            <li class="d-flex align-items-center r mb-4">
                                <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <span>Help@contact.com</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-4">
                                <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                </span>
                                <span>10-16 tiller road, canary wharf, E14 8PX
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.9275599087728!2d-0.027370024667446546!3d51.49619681152333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1703149601143!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Contact Area End -->
@endsection

@section('coustomJS')
@endsection
