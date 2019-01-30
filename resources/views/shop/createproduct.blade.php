
@extends('layout')

	@section('title')
	<title>Ajouter Produit</title>
	@endsection

	@section('contenu')


		<div class="container container-fluid blc text-center">
			<div class="row ble1 menuTop">
				<h1>Ajouter un produit</h1>
			</div>

            <form action="{{route('produits.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
               
                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Name</label> <input type="text" name="Nom_article"></div>        

                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Image</label><input type="file" name="URL_image" id="image"></div>
               
                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Description</label> <input type="text" name="description"></div>

                    <div class="col-lg-3 col-md-3 col-sm-3"><label>Price</label> <input type="number" name="prix" step="0.01" min="0"></div>

                <div class="row marginTop25"><button type="submit">Submit</button></div>
            </form>
		</div>