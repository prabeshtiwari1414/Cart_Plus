<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart Plus</title>
    <link rel="icon" href="{{ asset('style/image/cartplus.png') }}" />
    <link rel="stylesheet" href="{{ asset('style/fontawersome/all.css') }}" />
    <link rel="stylesheet" href="{{asset('style/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
</head>

<body>
    <div class="upper_nav bg-success position-relative">
        <div class="container bg-success text-light">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6 ">
                            <div class="location "><span><i
                                        class="fa-solid fa-location-dot fa-flip"></i>Pokhara-8,Srijana Chowk</span>
                            </div>

                        </div>
                        <div class="col-6 t">
                            <div class="tele "><span><i class="fa-solid fa-phone fa-bounce"></i>+977 061-538358</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6 ms-auto">
                    <div class=" d-flex justify-content-center align-items-center position-absolute top-0 end-0">
                        <section class="">
                            <a href="{{ route('register') }}">
                                <button type="button" class="btn btn-outline-light btn-rounded me-3 my-3 hover-success">
                                    Sign up!
                                </button>
                            </a>
                        </section>
                        <section class="">
                            <a href="{{ route('login') }}"><button type="button"
                                    class="btn btn-outline-light btn-rounded me-3 my-3">
                                    Login
                                </button></a>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('style/image/cartplus.png') }}" alt="Logo"
                    height="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.home') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.about') }}">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('user.gallery') }}">
                            Gallery
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </section>
    <section class="second">
        @yield('middlesection')
    </section>
    <section class="third">
        <!-- Remove the container if you want to extend the Footer to full width. -->

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Cart_Plus</h5>
                            <a href="#!"><img src="{{ asset('style/image/cartplus.png') }}" height="75%" alt="Logo"></a>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Support</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Payment</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Shipping</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Cancellation & Returns</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">FAQ</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Services</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Men's Clothing</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Woman's Clothing</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Kid's Clothing</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Other Different Clothes
                                        (According to your order)</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">head office</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white text-decoration-none"><i
                                            class="fa-solid fa-location-dot "></i> Pokhara-8,Srijana Chowk</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none"><i
                                            class="fa-solid fa-tty "></i> +977 061-538358</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none"><i
                                            class="fa-solid fa-phone "></i> 9876543210</a>
                                </li>

                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">office location</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="https://www.google.com/maps/@28.2111605,83.9811568,21z?entry=ttu"
                                        target="_blank" class="text-white text-decoration-none">Pokhara</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Kathmandu(Opening soon)</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Butwal(Opening soon)</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white text-decoration-none">Nepaljung(Opening soon)</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Social media -->
                <section class="mb-4 text-center">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="#">prabeshhtiwari.com.np</a> <span>All Right Reserved | Design by
                    Cart_Plus</span>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <!-- End of .container -->
    </section>
    <script src="{{asset('style/js/jquery.js')}}"></script>
    <script src="{{ asset('style/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('style/fontawersome/all.js') }}"></script>

    <script src="{{ asset('style/js/script.js') }}"></script>
</body>

</html>