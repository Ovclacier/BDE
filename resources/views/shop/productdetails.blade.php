@extends('layout')

    @section('title')
    <title>Produit sélectionné</title>
    @endsection
    






@section('contenu')
    <div class="MarginTop25">
        <h2> Show Product</h2>
        <a href="{{ route('produits.index') }}"> Back</a>

        <strong>Name:</strong>
        {{ $produits->Nom_produit }}
        <strong>Details:</strong>
        {{ $produits->description }}
      
        <form method="post" action="{{ route('cart.store') }}">
         @csrf
        <input type="text" value="{{ $produits->Nom_produit }}" name="datas" readonly>
        <input type="text" value="{{ $produits->id }}" name="id_user" readonly>
      
        <button type="submit">Submit</button>
       </form>
    </div>
@endsection
