@extends('layout')

    @section('title')
    <title>{{ $produits->Nom_article }}</title>
    @endsection
   
@section('contenu')
    <div class="container container-fluid blc">
        <div class="row ble1 menuTop text-center">
            <h1>{{ $produits->Nom_article }}</h1>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 marginTop25"><a class="back" href="{{ route('produits.index') }}"> Back</a></div>
        <div class="col-lg-10 col-md-10 col-sm-10 text-center marginTop25"><img src="{{$produits->url_image}}" width="300" height="300"></div>
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-12 text-center marginTop25">
            Details: <br>{{ $produits->description }} {{ $id = $produits->id }} {{$id}}
        </div>
        <div class="row">
            <form method="post" action="{{ route('cart.stores') }}" enctype="multipart/form-data">
             @csrf
                <div class="col-lg-4 col-md-4 col-sm-4"></div>
                <div class="col-lg-2 col-md-2 col-sm-2 text-center marginTop25">Quantité :</div>
                <div class="col-lg-2 col-md-2 col-sm-2 text-center marginTop25"><input type="number" name="quantity" value="1" min="1" step="1"></div>
                <div class="col-lg-4 col-md-4 col-sm-4"></div>

                <div class="col-lg-12 text-center"><input type="hidden" value="{{ $id }}" name="id_produit" readonly>
                
                <button type="submit">Ajouter au panier</button></div>
            </form>
        </div>
    </div>
@endsection
