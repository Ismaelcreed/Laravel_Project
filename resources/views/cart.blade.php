@extends('layouts.base')

@section('content')
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
                    <h3>Panier</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Votre panier</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-section section-b-space">
        <div class="container">
            
            @if($cartItems->Count()> 0)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <table class="table cart-table">
                            <thead>
                                <tr class="table-head">
                                    <th scope="col">profil</th>
                                    <th scope="col">chaussure</th>
                                    <th scope="col">prix</th>
                                    <th scope="col">quantité</th>
                                    <th scope="col">total</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cartItems as $articles)
                                <tr>
                                    <td>
                                        <a href="{{route('shop.product.details' , ['etiquette'=>$articles->model->etiquette])}}">
                                            <img src="{{asset('assets/images/fashion/product/back')}}/{{$articles->model->image}}" class="blur-up lazyloaded"
                                                alt="{{$articles->model->nom}}">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('shop.product.details' , ['etiquette'=> $articles->model->etiquette])}}">{{$articles->model->nom}}</a>
                                        <div class="mobile-cart-content row">
                                            <div class="col">
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <input type="text" name="quantity" class="form-control input-number"
                                                            value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h2>{{$articles->model->price}}Ar</h2>
                                            </div>
                                            <div class="col">
                                                <h2 class="td-color">
                                                    <a href="javascript:void(0)">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2>{{$articles->price}}Ar</h2>
                                    </td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity"
                                                    data-rowid="{{$articles->rowId}}"
                                                    class="form-control input-number"
                                                    value="{{$articles->qty}}"
                                                    onchange="updateQuantity(this)">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2 class="td-color">Ar{{$articles->subTotal()}}</h2>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="removeItemFromCart('{{$articles->rowId}}')">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 mt-md-5 mt-4">
                        <div class="row">
                            <div class="col-sm-7 col-5 order-1">
                                <div class="left-side-button text-end d-flex d-block justify-content-end">
                                    <a href="javascript:void(0)" onclick="clearCart()"
                                        class="text-decoration-underline theme-color d-block text-capitalize">Effacer ces articles</a>
                                </div>
                            </div>
                            <div class="col-sm-5 col-7">
                                <div class="left-side-button float-start">
                                    <a href="{{route('shop.index')}}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                        <i class="fas fa-arrow-left"></i> Retourner dans shop</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-checkout-section">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="promo-section">
                                    <form class="row g-3">
                                        <div class="col-7">
                                            <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-solid-default rounded btn">Utiliser un coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 ">
                                <div class="checkout-button">
                                    <a href="{{route('checkout')}}" class="btn btn-solid-default btn fw-bold">
                                        Décocher <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="cart-box">
                                    <div class="cart-box-details">
                                        <div class="total-details">
                                            <div class="top-details">
                                                <h3>Totals des articles</h3>
                                                <h6>Sub Total <span>Ar {{Cart::instance('cart')->subtotal()}}</span></h6>
                                                <h6>Redevance <span>Ar {{Cart::instance('cart')->tax()}}</span></h6>

                                                <h6>Total <span>Ar{{Cart::instance('cart')->total()}}</span></h6>
                                            </div>
                                            <div class="bottom-details">
                                                <a href="{{route('checkout')}}">Acheter les produits</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Panier vide pour le moment!</h2>
                            <h5 class="mt-3">Ajouter des articles</h5>
                            <a href="{{route('shop.index')}}" class="btn btn-warning mt-5">Revenir dans magasin</a>
                        </div>
                    </div>
            @endif
        </div>
    </section>
<form action="{{route('cart.update')}}" id="updateCartQty" method="POST">
    @csrf
    @method('put')
    <input type="hidden" id="rowId" name="rowId">
    <input type="hidden" id="quantity" name="quantity">
</form>

<form action="{{route('cart.remove')}}" method="POST" id="deleteFromCart">
    @csrf
    @method('delete')
    <input type="hidden" id="rowId_D" name="rowId">
</form>

<form action="{{route('cart.clear')}}" method="POST" id="clearCart">
    @csrf
    @method('delete')
</form>
@endsection

@push('scripts')
    <script>
        function updateQuantity(qty)
        {
            $('#rowId').val($(qty).data('rowid'));
            $('#quantity').val($(qty).val());
            $('#updateCartQty').submit();
        }
        function removeItemFromCart(rowId)
        {
            $('#rowId_D').val(rowId);
            $('#deleteFromCart').submit();
        }
        function clearCart()
        {
            $('#clearCart').submit();
        }
    </script>
@endpush