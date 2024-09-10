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
                    <h3>Les postes d'articles que vous avez likés</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Les postes likés</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class="wish-list-section section-b-space">
        <div class="container">
            @if($items->count() > 0)
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table cart-table wishlist-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">profil</th>
                                <th scope="col">nom</th>
                                <th scope="col">tarif</th>
                                <th scope="col">validité</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $article)
                        <tr>
                                <td>
                                    <a href="{{route('shop.product.details' , ['etiquette'=> $article->model->etiquette])}}">
                                        <img src="{{asset('assets/images/fashion/product/back/')}}/{{$article->model->image}}"
                                            class=" blur-up lazyload" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('shop.product.details' , ['etiquette'=> $article->model->etiquette])}}" class="font-light">{{$article->model->nom}}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <p>En stocke</p>
                                        </div>
                                        <div class="col">
                                            <p class="fw-bold">{{$article->model->prix_normal}}Ar</p>
                                        </div>
                                        <div class="col">
                                            <h2 class="td-color">
                                                <a href="javascript:void(0)" class="icon">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </h2>
                                            <h2 class="td-color">
                                                <a href="cart.php" class="icon">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-bold">{{$article->model->prix_normal}}Ar</p>
                                </td>
                                <td>
                                    @if($article->model->status_stock === 'stocker')
                                     <p>Encore dispo</p>
                                     @else
                                     <p>Plus disponible</p>
                                    @endif
                                    
                                </td>
                                <td>
                                
                                    <a href="javascript:void(0)" class="icon" onclick="removeFromWishlist('{{$article->rowId}}')">
                                        <i class="fas fa-times"></i>
                                    </a>
                                
                                </td>
                            </tr>  
                        @endforeach                             
                        </tbody>
                    </table>
                </div>
            </div>
           <div class="row">
            <div class="col-md-12 text-end">
                <a href="javascript:void(0)" onclick="clearWishlist()">Effacer mes likes</a>
            </div>
           </div> 
            @else
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Vous n'avez pas liké aucun poste!</h2>
                    <h5 class="mt-3">Ajouter des articles maintenant!</h5>
                    <a href="{{route('shop.index')}}" class="btn btn-warning mt-5">Allez dans le shop maintenant</a>
                </div>
            </div>
            @endif
        </div>
    </section>

    <form action="{{route('wishlist.remove')}}" method="POST" id="deleteFromWishlist">
        @csrf
        @method('delete')
        <input type="hidden" id="rowId" name="rowId">
    </form>

    <form action="{{route('wishlist.clear')}}" method="POST" id="clearWishlist">
        @csrf
        @method('delete')
    </form>

@endsection

@push('scripts')
    <script>
        function removeFromWishlist(rowId){
            $("#rowId").val(rowId);
            $("#deleteFromWishlist").submit();
        }
        function clearWishlist(){
            $("#clearWishlist").submit();
        }
    </script>
@endpush