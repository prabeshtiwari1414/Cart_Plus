<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cart Plus</title>
        <link rel="icon" href="{{ asset('style/image/cartplus.png') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('style/fontawersome/all.css') }}"
        />
        <link rel="stylesheet" href="{{asset('style/bootstrap/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('style/css/style.css') }}">
    </head>
    <body>
      <section class="first">header <img src="{{ asset('style/image/cartplus.png') }}" alt="logo"></section>
      <section class="second">
        @yield('xyz')
      </section>
      <section class="third">footer</section>
        <script src ="{{asset('style/js/jquery.js')}}"></script>
        <script src="{{ asset('style/bootstrap/bootstrap.js') }}"></script>

<script src="{{ asset('style/fontawersome/all.js') }}"></script>

<script src="{{ asset('style/js/script.js') }}"></script>
    </body>
</html>
