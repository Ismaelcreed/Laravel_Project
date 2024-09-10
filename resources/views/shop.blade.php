@extends('layouts.base')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">

    <style>
        nav svg {
            height: 20px;
        }
        .product-box .product-details h5 {
            width: 100%; 
        }
    </style>
@endpush

@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shopping</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 category-side col-md-2">
                    
                </div>

                <div class="category-product col-lg-9 col-12 ratio_30">

                    <div class="row g-4">
                        <!-- label and featured section -->
                        <div class="col-md-12">
                            <ul class="short-name">


                            </ul>
                        </div>
                        <div class="col-12">
                            <div class="filter-options">
                                <div class="select-options">
                                </div>
                                <div class="grid-options d-sm-inline-block d-none">
                                    <ul class="d-flex">
                                        <li class="two-grid">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="three-grid d-md-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="grid-btn active d-lg-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn">
                                            <a href="javascript:void(0)">
                                                <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div
                        class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                        @foreach ($products as $product)     
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#">
                                            <img src="assets/images/fashion/product/back/{{$product->image}}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="#">
                                            <img src="assets/images/fashion/product/back/{{$product->image}}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn">
                                                    <i data-feather="shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('shop.product.details',['etiquette' => $product->etiquette])}}">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" onclick="addProducttoWishList({{$product->id}},'{{$product->nom}}', 1 ,{{$product->prix_normal}})" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">{{$product->category->nom}}</span>
                                       
                                    </div>
                                    <div class="main-price">
                                        <a href="{{route('shop.product.details',['etiquette' => $product->etiquette])}}" class="font-default">
                                            <h5 class="ms-0">{{$product->nom}}</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">{{$product->category->nom}}</span>
                                            <p class="font-light">{{$product->petit_desc}}</p>
                                        </div>
                                        <h3 class="theme-color">{{$product->prix_normal}}Ar</h3>
                                    <a href="{{route('shop.product.details',['etiquette' => $product->etiquette])}}" class="font-default">
                                        <button class="btn listing-content">Ajouter au chariot</button>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                   
                    

                </div>
            </div>
        </div>
    </section>
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Ne ratez pas les tendances</h2>
                        <h6 class="font-light">Nous vous envoyerons des notifications!
                            </h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Votre mail">
                            <button class="btn btn-solid-default" type="button">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    function addProducttoWishList(id,name,quantity,price){
        $.ajax({
            type: "POST",
            url: "{{route('wishlist.store')}}",
            data: {
                "_token" : "{{csrf_token()}}",
                id: id,
                nom: name,
                quantity: quantity,
                price: price
            },
            success: function(data){
                if(data.status == 200){
                    getCartWishlistCount();
                    $.notify({
                        icon:"fa fa-check",
                        title:'',
                        message: "Article adorée!"
                    });
                }
            }
        })
    }
    function getCartWishlistCount(){
        $.ajax({
            type:"GET",
            url:"{{route('shop.cart.wishlist.count')}}",
            success: function (data){
                if(data.status == 200){
                    $("#cart-count").html(data.cartCount);
                    $("#wishlist-count").html(data.wishlistCount);
                }
            }
        })
    }
</script>
@endpush