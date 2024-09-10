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
                    <h3>Payement</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Payement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class="section-b-space">
        <div class="container"> 
            <div class="row g-4">
                <div class="col-lg-8">
                    <form class="needs-validation" method="POST" action="{{route('checkout.store')}}" id="payement-form">
                        <input type="hidden" name="_token" value="CVH6XgdFhoUV6OBdiTIlT2bviIidpb0qD6U1Vf68">
                        
                        <div id="shippingAddress" class="row g-4 mt-5">
                            <h3 class="mb-3 theme-color">Adresse pour la livraison</h3>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="s_name" name="s_name"
                                    placeholder="Votre nom complet">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="s_phone" name="s_phone"
                                    placeholder="Votre numéro téléphone">
                            </div>
                            <div class="col-md-6">
                                <label for="locality" class="form-label">Localisation</label>
                                <input type="text" class="form-control" id="s_locality" name="s_locality"
                                    placeholder="Localisation">
                            </div>
                            <div class="col-md-6">
                                <label for="landmark" class="form-label">Repère</label>
                                <input type="text" class="form-control" id="s_landmark" name="s_landmark"
                                    placeholder="repère">
                            </div>

                            <div class="col-md-12">
                                <label for="address" class="form-label">Adresse</label>
                                <textarea class="form-control" id="s_address" name="s_address"></textarea>

                            </div>

                            <div class="col-md-3">
                                <label for="country" class="form-label">Province</label>
                                <select class="form-select custome-form-select" id="s_country" name="s_country">
                                    <option>Antananarivo</option>
                                    <option>Fianarantsoa</option>
                                    <option>Antsirabe</option>
                                    <option>Tamatave</option>
                                    <option>Toliara</option>
                                    <option>Mahajanga</option>
                                </select>
                            </div>
                           
                        </div>

                        <div class="form-check ps-0 mt-3 custome-form-check">
                            <input class="checkbox_animated check-it" type="checkbox" name="saveAddress"
                                id="saveAddress">
                            <label class="form-check-label checkout-label" for="saveAddress">Enregistrer pour une autre fois
                               </label>
                        </div>

                        <hr class="my-lg-5 my-4">
                        <div id="card-element" class="col-md-6"></div>
                        </div>
                        <button class="btn btn-solid-default col-md-6" type="submit" id="submit-button">Envoyer</button>
                    </form>
                </div>
        
            @if($items->count())
            <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">
                        </h3>
                        <ul class="list-group mb-3">

                            <li class="list-group-item d-flex justify-content-between lh-condensed active">
                                <div class="text-dark">
                                    <h6 class="my-0">Taxe</h6>
                                    <small></small>
                                </div>
                                <span>Ar {{Cart::instance('cart')->tax()}}</span>
                            </li>
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total en Ar</span>
                                <strong>Ar {{Cart::instance('cart')->subtotal()}}</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
            <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Votre carte<span
                                class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">0</span>
                        </h3>
                        <ul class="list-group mb-3">

                            <li class="list-group-item d-flex justify-content-between lh-condensed active">
                                <div class="text-dark">
                                    <h6 class="my-0">Taxe</h6>
                                    <small></small>
                                </div>
                                <span>O Ar</span>
                            </li>
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total en Ar</span>
                                <strong>0 Ar</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif      
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script scr="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe("pk_test_51PCRXHBMvvEpxVTs1mYnGq18MP6wbtRWIWfQCV5yE50amBVBS4lrHNVUl7JOlEAQdGX87Pd00o2uf80jaFB0CPLX00IsHUKFlu");
    var elements = stripe.elements();
    const cardElement = elements.create('card',{
        classes : {
            base: 'StripeElement bg-white w-1/2 p-2 my-2 rounded-lg'
        }
    });
    
    cardElement.mount('#card-element');

    const cardButton = document.getElementById('submit-button')

    cardButton.addEventListener('click',async(e) =>{
        e.preventDefault();
        const {payementMethod , error} = await stripe.createPaymentMethod('card',cardElement); 
        if(error){
            $.ajax({
            type:"GET",
            url:"{{route('checkout')}}",
            message:"Echec au processus!"
        })
        }
        else{
           return null;
        }
    });








    var form = document.getElementById('payement-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.confirmCardPayment(clientSecret, {
            payment_method: {
                card: card,
            }
        }).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Traitez la confirmation du paiement ici, par exemple, soumettez le formulaire
                form.submit();
            }
        });
    });
</script>
@endpush