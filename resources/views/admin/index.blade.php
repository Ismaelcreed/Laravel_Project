@extends('layouts.base')
@section('content')
<div class="d-flex align-items-center justify-content-between">
    <a href="{{route('products.create')}}" class="btn btn-danger">Commencez</a>
</div>
<div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Photo</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Etiquette</th>
                                <th scope="col">Petit description</th>
                                <th scope="col">Description</th>
                                <th scope="col">Solde</th>
                                <th scope="col">Status</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <a href="../product/details.html">
                                        <img src="../assets/images/fashion/product/front/24.jpg" class="blur-up lazyloaded"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="../product/details.html">A Porro
                                        Voluptatibus Dolores</a>
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
                                            <h2>$18</h2>
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
                                    <h2>$18</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity"
                                                data-rowid="ba02b0dddb000b25445168300c65386d"
                                                class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color">$18.00</h2>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a href="../product/details.html">
                                        <img src="../assets/images/fashion/product/front/7.jpg" class="blur-up lazyloaded"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="../product/details.html">Et
                                        Voluptatem Repellendus Pariatur</a>
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
                                            <h2>$8</h2>
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
                                    <h2>$8</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity"
                                                data-rowid="8eb747b95b9862e9d83031beb9938720"
                                                class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color">$8.00</h2>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                

             
            </div>
        </div>
@endsection