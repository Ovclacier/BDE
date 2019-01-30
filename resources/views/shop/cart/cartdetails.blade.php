@extends('layout')

    @section('title')
    <title>Panier</title>
    @endsection
    






    @section('contenu')
    <div class="container container-fluid blc text-center">
        <div class="row ble1 menuTop"><h1>Panier</h1></div>
        <div class="row">
            <div class="col-lg-2 col-md-2"></div>
            <div class="field-label col-lg-3 col-md-3 MarginTop25 titreCart">Nom</div>
            <div class="field-label col-lg-2 col-md-2 MarginTop25 titreCart">Preview</div>
            <div class="field-label col-lg-3 col-md-3 MarginTop25 titreCart">Quantité</div>
            <div class="col-lg-2 col-md-2"></div>
        </div>
        @foreach ($carts as $index => $cart)
            <div class="row MarginTop10 MarginTop10">
                <div class="col-lg-2 col-md-2"></div>
                <div class="field-label col-lg-3 col-md-3">{{ $cart->Nom_article}}</div>
                <div class="field-label col-lg-2 col-md-2"><a href="{{ $cart->url_image }}"><img src="{{ $cart->url_image }}" width="50" height="50"></a></div>      
                <div class="field-label col-lg-3 col-md-3">
                     {{ $produits[$index]->quantity }}
                </div>
                <div class="col-lg-2 col-md-2"></div>
                
            </div>
            @endforeach
    </div>
 
