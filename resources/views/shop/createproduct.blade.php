
@extends('layout')

	@section('contenu')


		<div class="container container-fluid blc text-center">
			<div class="row ble1 menuTop">
				<h1>Ajouter un produit</h1>
			</div>

            <form method="post" action="{{ route('produits.stores') }}" enctype="multipart/form-data">

                @csrf
               
                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Name</label> <input type="text" name="Nom_article"></div>        

                @csrf 
                <h1> Enter Details to create a product</h1>
               
                    <label>Name</label> <input type="text" name="Nom_article">          

                    <label>Image</label><input type="file" name="url_image">
                    
                    <label>Description</label> <input type="text" name="description">

                    <label>Categorie</label><select name="categorie">
                    @foreach( $categories as $categorie)
                    <option>{{ $categorie->categorie }}</option>
                    @endforeach</select>

                    <label>Price</label> <input type="number" name="price">



                <button type="submit">Submit</button>
            </form>
		</div>

