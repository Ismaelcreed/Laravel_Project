@extends('layouts.base')
@section('content')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo2.css')}}">
@endpush
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
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
                    <h3>{{$product->nom}}</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{$product->nom}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> 

    <section>
        <div class="container">
            <div class="row gx-4 gy-5">
                <div class="col-lg-12 col-12">
                    <div class="details-items">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="{{asset('assets/images/fashion/product/back')}}/{{$product->image}}"
                                                    class="img-fluid blur-up lazyload" alt="{{$product->nom}}">
                                            </div>
                                            @if($product->images)
                                                @php
                                                    $images = explode(',',$product->images);
                                                @endphp
                                                @foreach($images as $image)    
                                                <div>
                                                    <img src="{{asset('assets/images/fashion/product/back')}}/{{$image}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                                @endforeach  
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="{{asset('assets/images/fashion/product/back')}}/{{$product->image}}"
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="{{$product->nom}}">
                                            </div>
                                            @if($product->images)
                                                @php
                                                    $images = explode(',',$product->images);
                                                @endphp
                                                @foreach($images as $image)   
                                                <div>
                                                    <img src="{{asset('assets/images/fashion/product/back')}}/{{$image}}" 
                                                        class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                                </div> 
                                                @endforeach  
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="cloth-details-size">
                                    <div class="product-count">
                                        <ul>
                                            <li>
                                                <img src="../assets/images/gif/fire.gif"
                                                    class="img-fluid blur-up lazyload" alt="image">
                                                <span class="lang">Commande reçus au moins de 24h</span>
                                            </li>
                                            <li>
                                                <img src="../assets/images/gif/person.gif"
                                                    class="img-fluid user_img blur-up lazyload" alt="image">
                                                <span class="p-counter">44</span>
                                                <span class="lang">vue en ce moment</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="details-image-concept">
                                        <h2>{{$product->nom}}</h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">Le meilleur</span>
                                        <span class="label-text">et pour toujours</span>
                                    </div>

                                    <h3 class="price-detail">
                                      @if($product->solde)
                                        Ar{{$product->solde}}   
                                        <del>Ar{{$product->prix_normal}}</del><span>
                                        {{round((($product->prix_normal - $product->solde)/$product->prix_normal)*100)}}
                                        % off</span>
                                      @else
                                            {{$product->prix_normal}}
                                      @endif
                                    </h3>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text">
                                            Choisissez votre pointure
                                        </h6>

                                        <h6 class="error-message">Votre pointure svp</h6>
                                        @php
                                            $pt = ['26-31','31-35','35-40','40-43','43-46'];
                                        @endphp
                                        @foreach($pt as $pointure)
                                        <div class="size-box">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">{{$pointure}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        @endforeach

                                        <h6 class="product-title product-title-2 d-block">Quantité</h6>

                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        onclick="updateQuantity()" data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" id="quantity"
                                                    class="form-control input-number" value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        onclick="updateQuantity()" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-buttons">
                                        <a href="javascript:void(0)" class="btn btn-solid">
                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                            <span>Vos likes</span>
                                        </a>
                                        <a href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('addtocart').submit()"                                            
                                            id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Ajouter dans panier</span>
                                            <form id="addtocart" method="post"
                                                action="{{route('cart.store')}}">
                                                @csrf
                                                <input  type="hidden" name="id" value="{{$product->id}}">
                                                <input type="hidden" name="quantity" id="qty" value="1">
                                            </form>
                                        </a>
                                    </div>

                                    <ul class="product-count shipping-order">
                                        <li>
                                            <img src="../assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                                alt="image">
                                            <span class="lang">Livraison partout et tarif abordable!</span>
                                        </li>
                                    </ul>

                                    <div class="mt-2 mt-md-3 border-product">
                                        <h6 class="product-title hurry-title d-block">
                                            @if($product->status_stock === 'stocker')
                                                Encore disponible
                                            @else
                                                N'est plus disponible
                                            @endif    
                                        </h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                        </div>
                                    </div>

                                    <div class="border-product">
                                        <h6 class="product-title d-block">Trouvez nous sur:</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
  
@endsection