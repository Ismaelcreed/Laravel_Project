
@extends('layouts.base')
@section('contents')
    <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nom" class="form-control" placeholder="Nom">
        </div>
        <div class="col">
            <input type="text" name="etiquette" class="form-control" placeholder="Etiquette">
        </div>
    </div> 
    
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="petit_desc" class="form-control" placeholder="Petit description">
        </div>
        <div class="col">
            <input type="text" name="description" class="form-control" placeholder="Description">
        </div>
    </div> 
    
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="solde" class="form-control" placeholder="Solde">
        </div>
        <div class="col">
            <input type="text" name="status" class="form-control" placeholder="Status">
        </div>
    </div> 

    <div class="row mb-3">
        <div class="col">
            <div class="qty-box">
                <div class="input-group">
                        <input type="number" name="quantity" class="form-control input-number" value="1">
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-danger">Enregistrer</button>
            </div>
        </div>
    </div>
    </form>
@endsection