<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('site.template')
    @php
    $activePage="user.shop";
    @endphp
    @section('middlesection')
    <div class="container position-relative">
        <div class="shopnav">
            <div class="row">
                <div class="col-6 d-flex">
                    <div class="text-secondary p-3 hover-effect-black">All Product</div>
                    <div class="text-secondary p-3 hover-effect-black">Women</div>
                    <div class="text-secondary p-3 hover-effect-black">Men</div>
                    <div class="text-secondary p-3 hover-effect-black">Bag</div>
                    <div class="text-secondary p-3 hover-effect-black">Shoes</div>
                    <div class="text-secondary p-3 hover-effect-black">Watches</div>
                </div>
            </div>
        </div>
    </div>
    @stop
</body>

</html>