@extends('layouts.base')
@section('content')
<section class="pt-0 poster-section">
        <div class="poster-image slider-for custome-arrow classic-arrow">
            <div>
                <img src="assets/images/furniture-images/poster/kito.jpg" class="img-fluid blur-up lazyload" alt="">
            </div>
            <div>
                <img src="assets/images/furniture-images/poster/kito1.jpg" class="img-fluid blur-up lazyload" alt="">
            </div>
            <div>
                <img src="assets/images/furniture-images/poster/kito2.jpg" class="img-fluid blur-up lazyload" alt="">
            </div>
        </div>
        <div class="slider-nav image-show">
            <div>
                <div class="poster-img">
                    <img src="assets/images/furniture-images/poster/t2.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>
            <div>
                <div class="poster-img">
                    <img src="assets/images/furniture-images/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>

            </div>
            <div>
                <div class="poster-img">
                    <img src="assets/images/furniture-images/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-side-contain">
            <div class="banner-left">
                <h4>Solde <span class="theme-color">35% Off</span></h4>
                <h1>Nouveau tendances <span>chaussures</span></h1>
                <p>ACHETER UN ET PRENEZ UN <span class="theme-color">GRATUIT</span></p>
               
            </div>
        </div>
    </section>
    <section class="ratio2_1 banner-style-2">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="" class="banner-img">
                            <img src="{{asset('assets/images/fashion/banner/Enfant.JPG')}}" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">26% <span>OFF</span></span>
                        </div>
                        <a href="" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Chaussure enfant</h2>
                                <span>Achetez un et prenez un</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="" class="banner-img">
                            <img src="{{asset('assets/images/fashion/banner/Femme.JPG')}}" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">50% <span>OFF</span></span>
                        </div>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Tendance femme</h2>
                                <span>Bonus de 50%</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img">
                            <img src="{{asset('assets/images/fashion/banner/Homme.JPG')}}" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">36% <span>OFF</span></span>
                        </div>
                        <a href="" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Tendance homme</h2>
                                <span>ACHETEZ ET PRENEZ EN UN</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <section class="ratio_asos overflow-hidden">
        <div class="container p-sm-0">
          
            <style>
                .r-price {
                    display: flex;
                    flex-direction: row;
                    gap: 20px;
                }

                .r-price .main-price {
                    width: 100%;
                }

                .r-price .rating {
                    padding-left: auto;
                }

                .product-style-3.product-style-chair .product-title {
                    text-align: left;
                    width: 100%;
                }

                @media (max-width:600px) {

                    .product-box p,
                    .product-box a {
                        text-align: left;
                    }

                    .product-style-3.product-style-chair .main-price {
                        text-align: right !important;
                    }
                }
            </style>
           
        </div>
    </section>

    <!-- category section start -->
    <section class="category-section ratio_40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-center">
                        <h2>Nos Categories</h2>
                        <h5 class="text-color">Nos collections</h5>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-2 col-lg-3">
                    <div class="category-wrap category-padding category-block theme-bg-color">
                        <div>
                            <h2 class="light-text">Top</h2>
                            <h2 class="top-spacing">Nos meilleurs</h2>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-lg-9">
                    <div class="category-wrapper category-slider1 white-arrow category-arrow">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{asset('assets/images/fashion/category/1.JPG')}}" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Chaussures</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{asset('assets/images/fashion/category/2.JPG')}}" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Homme</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{asset('assets/images/fashion/category/3.JPG')}}" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Femme</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{asset('assets/images/fashion/category/4.JPG')}}" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Enfant</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{asset('assets/images/fashion/category/5.JPG')}}" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Scandale</h3>
                                    <span class="text-dark">Fashion</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->


    <section class="product-slider overflow-hidden">
        <div>
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Les plus populaires</h2>
                            <h5 class="theme-color">Nos Collections</h5>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Recents</h2>
                            <h5 class="theme-color">Nos Collections</h5>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="title-3 pb-4 title-border">
                            <h2>Etonnant </h2>
                            <h5 class="theme-color">Nos Collections</h5>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .products-c .bg-size {
            background-position: center 0 !important;
        }
    </style>

    
@endsection