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
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('site/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('site/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('site/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <section class="first">
        <div class="navbar navbar-expand-lg  bg-success text-light fs-6">
            <div class="container">
                <div class="row">
                    <div class="col-12">Free shipping for standard order over NPR 3,000</div>
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
        

        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="--bs-bg-opacity: .7;">

            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('style/image/cartplus.png') }}" 
                       style="height: 130px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'user.home' ? 'active ' : '' }}"
                                href="{{ route('userhome') }}">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'user.shop' ? 'active ' : '' }}"
                                href="{{ route('usershop') }}">Shop </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'user.features' ? 'active ' : '' }}"
                                href="{{ route('userfeatures') }}">Features </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'user.blog' ? 'active ' : '' }}"
                                href="{{ route('userblog') }}">Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'user.about' ? 'active ' : '' }}"
                                href="{{ route('userabout') }}">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ $activePage == 'user.contact' ? 'active ' : '' }}"
                                href="{{ route('usercontact') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="icons d-flex p-2">
                        <div class="icon"> <a href="#!" class="text-success"><i
                                    class="p-2 fa-solid fa-cart-shopping"></i></a></div>
                        <div class="icon"><a href="#!" class="text-success"><i class="p-2 fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
    </section>
      
        <section class="middlesection mb-3">
            @yield('middlesection')
        </section>
        
    
        <!-- Remove the container if you want to extend the Footer to full width. -->
        <div class="container bg-dark text-light">

            <footer class="text-center text-lg-start pt-4">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>category</b></h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white ">Women</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white">Men</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white">Shoes</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white">Watches</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>help</b></h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white">Track Order</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white"> Returns</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white"> Shipping</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-secondary hover-effect-white"> FAQs</a>
                                </li>

                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>get in touch</b></h5>
                            <p class="text-light">Any question? Let us know in store at Srijana Chowk, Pokhara or
                                call us on 9876543210</p>
                            <a href="#!" class="text-secondary hover-effect-white"><i
                                    class="fa-brands fa-facebook p-3"></i></a>
                            <a href="#!" class="text-secondary hover-effect-white"><i
                                    class="fa-brands fa-instagram p-3"></i></a>
                            <a href="#!" class="text-secondary hover-effect-white"><i
                                    class="fa-brands fa-pinterest-p p-3"></i></a>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <h5 class="text-uppercase mb-4"><b>newsletter</b></h5>

                            <div class=" form-white mb-4">
                                <form method="POST" action="{{route('postLettermail') }} " enctype="multipart/form-data"
                                    role="search">
                                    @csrf
                                    <input type="email" placeholder="yourmail@example.com" id="form5Example2"
                                        class="form-control" name="lettermail" /> <br>
                                    <button class="btn btn-outline-light m-3" type="submit">Summit</button>
                                </form>
                            </div>

                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3">
                    © 2023 Copyright:
                    <a class="text-white" href="https://parbeshtiwari.com/" target="_blank">Parbeshtiwari.com</a>
                </div>
                <!-- Copyright -->
            </footer>

        </div>
        <!-- End of .container -->
        
    
    <script src="{{asset('site/js/jquery.min.js')}}"></script>
    <script src="{{asset('site/js/popper.min.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.bundle.min.js')}}">
    </script>
    <script src="{{asset('site/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('site/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('site/js/jquery.mCustomScrollbar.concat.min.js')}}">
    </script>
    <script src="{{asset('site/js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{asset('site/js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
    </script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript">
    </script>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width =
            "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
    <script src="{{asset('style/js/jquery.js')}}"></script>
    <script src="{{ asset('style/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('style/fontawersome/all.js') }}"></script>

    <script src="{{ asset('style/js/script.js') }}"></script>
</body>

</html>