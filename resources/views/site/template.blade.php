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
    <section class="first">
        <div class="navbar navbar-expand-lg  bg-success text-light fs-6">
            <div class="container">
                <div class="row">
                    <div class="col-12">Free shipping for standard order over NPR 15,000</div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-3 border-end border-start" style="text-align: center;"><a href="#!"
                                class="text-decoration-none text-light">Help
                                & FAQs</a></div>
                        <div class="col-3 border-end border-start" style="text-align: center;"> <a href="#!"
                                class="text-decoration-none text-light">My
                                Account</a></div>
                        <div class="col-3 border-end border-start" style="text-align: center;"><a href="#!"
                                class="text-decoration-none text-light">EN</a></div>
                        <div class="col-3 border-end border-start" style="text-align: center;"><a href="#!"
                                class="text-decoration-none text-light">NPR</a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="--bs-bg-opacity: .7;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('style/image/cartplus.png') }}" alt="Logo"
                        height="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
    <section class="third bg-dark text-light">
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="container my-">

            <footer class="text-center text-lg-start pt-4">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>category</b></h5>

                            <ul class="list-unstyled mb-4">
                                <li>
                                    <a href="#!" class="text-light">Women</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-light">Men</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-light">Shoes</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-light">Watches</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>help</b></h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!" class="text-light">Track Order</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-light"> Returns</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-light"> Shipping</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-light"> FAQs</a>
                                </li>

                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>get in touch</b></h5>
                            <p>Any question? Let us know in store at Srijana Chowk, Pokhara or call us on 9876543210</p>
                            <a href="#!" class="text-light"><i class="fa-brands fa-facebook p-3"></i></a>
                            <a href="#!" class="text-light"><i class="fa-brands fa-instagram p-3"></i></a>
                            <a href="#!" class="text-light"><i class="fa-brands fa-pinterest-p p-3"></i></a>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>newsletter</b></h5>

                            <div class=" form-white mb-4">
                                <input type="email" placeholder="yourmail@example.com" id="form5Example2"
                                    class="form-control" />
                                <form class="d-flex" role="search">
                                    <button class="btn btn-outline-light m-3" type="submit">Summit</button>
                                </form>
                            </div>

                            <button type="submit" class="btn btn-outline-white btn-block">Subscribe</button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3">
                    © 2023 Copyright:
                    <a class="text-white" href="https://parbeshtiwari.com/">Parbeshtiwari.com</a>
                </div>
                <!-- Copyright -->
            </footer>

        </div>
        <!-- End of .container -->
    </section>
    <script src="{{asset('style/js/jquery.js')}}"></script>
    <script src="{{ asset('style/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('style/fontawersome/all.js') }}"></script>

    <script src="{{ asset('style/js/script.js') }}"></script>
</body>

</html>