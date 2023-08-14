
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
    <div class="container">
        
        <div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-sm-6">
                    <div class="product_box">
                        <h4 class="bursh_text text-success">{{$product->product_title}}</h4>
                        <p class="lorem_text">{{$product->product_details}} </p>
                        <img src="{{ asset('site/uploads/product/'.$product->photo) }}" >

                        <div class="bg-success btn_main">
                            <div class="buy_bt">
                                <ul>
                                    <li><a href="#" class="p-2">Add Cart </a>

                                    </li>
                                    <li><a href="#" class="p-2">Buy Now</a></li>
                                </ul>
                            </div>
                            <h3 class="price_text">Price <br>Rs.{{$product->product_cost}}</h3>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    
    @endsection