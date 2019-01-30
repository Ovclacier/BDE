
@extends('layout')

@section('title')
<title>Création produit</title>
@endsection

	@section('contenu')



		<div class="container container-fluid blc text-center">
			<div class="row ble1 menuTop">
				<h1>Ajouter un produit</h1>
			</div>

            <form method="post" action="{{ route('produits.stores') }}"  enctype="multipart/form-data">

                @csrf
               		<div class="marginTop25">
	                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Name</label> <input type="text" name="Nom_article"></div>            
	                	<div class="col-lg-3 col-md-3 col-sm-3"><label>Price</label> <input type="number" name="price"></div>
	                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Description</label><input type="text" name="description"></div> 
	                    <div class="col-lg-3 col-md-3 col-sm-3">
	                    	<label>Categorie</label><select name="categorie">
	                   		@foreach( $categories as $categorie)
	                    		<option>{{ $categorie->categorie }}</option>
	                   		@endforeach</select>
	                   	</div> 
					</div>
                   	<div class="row"><label>Image</label><input type="file" name="url_image"></div>

                    



                <button type="submit">Submit</button>
            </form>
		</div>

