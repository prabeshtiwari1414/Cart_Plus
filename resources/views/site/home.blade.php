<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cart Plus || Home</title>
        <link rel="icon" href="{{ asset('style/image/cartplus.png') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('style/fontawersome/all.css') }}"
        />
        <link rel="stylesheet" href="{{asset('style/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    </head>
    <body>
      <nav class="upper_nav d-flex ">
        <div class="upper_nav_contains d-flex justify-content-between">
        <div class="location "><span><i class="fa-solid fa-location-dot fa-flip"></i>Pokhara-8,Srijana Chowk</span></div>
        <div class="tele "><span><i class="fa-solid fa-phone fa-bounce"></i>+977 061-538358</span></div>
        <div class="icons d-flex ">
          <div class="facebook icon"><span><i class="fa-brands fa-facebook" ></i></span></div>
          <div class="instagram icon"><span><i class="fa-brands fa-instagram" ></i></span></div>
          <div class="linkedin icon"><span><i class="fa-brands fa-linkedin" ></i></span></div>
          <div class="cart icon"><span><i class="fa-solid fa-cart-shopping" ></i></span></div>
        </div>
        </div>
      </nav>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('style/image/cartplus.png') }}" alt="Logo" height="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home </a>
              
              </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
        </ul>
         <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
@yield('xyz')
        <script src ="{{asset('style/js/jquery.js')}}"></script>
        <script src="{{ asset('style/bootstrap/bootstrap.js') }}"></script>

<script src="{{ asset('style/fontawersome/all.js') }}"></script>

<script src="{{ asset('style/js/script.js') }}"></script>
    </body>
</html>
