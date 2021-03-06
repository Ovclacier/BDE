@extends('layout')

	@section('title')
	<title>Boutique</title>
	@endsection
	






	@section('contenu')

	<div>
		<div class = "container-fluid container blc text-center">
			<div class="row ble1 menuTop">
				<h1>Les produits du moments</h1>
			</div>
			<div class="adm">
				@foreach($bestProduits as $key => $bestproduit)
					<div @if ($key < 2) class="col-lg-4 col-md-6 col-sm-12" @else class="col-lg-4 col-md-12 col-sm-12" @endif>
						<a href="{{$bestproduit->URL_image}}"><img src="{{$bestproduit->URL_image}}" width="300" height="300" alt="pile"></a>
						<div class="adm">{{$bestproduit->Nom_article}}</div>
					</div>
				@endforeach
			</div>


		</div>

		<div class="container-fluid container blc text-center ">
		
			<div class="row ble1">
				<h2>Liste produit</h2>
			</div>
			<div class="row blc">
				<div class="col-lg-3 col-mg-12 col-sm-12 ble2 text-left marginMenu fontSizeMenu"style="min-height: 100%;">
					<div class="marginTop25">Catégories :</div>
					<ul>
						@foreach($categories as $categorie)
						<li><a href="{{route('produits.triCategorie',$categorie->id)}}" class="linkNoir">{{$categorie->categorie}}</a></li>
						@endforeach
					</ul>
				</div>
			
				<div class="col-lg-9 col-mg-12 col-sm-12 blc">
					@foreach($produits as $produit)
						<div class="row marginTop25">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<a href="http://www.google.fr"><img src="{{$produit->url_image}}" width="200" height="200" alt="pile"></a>
							</div>
							<div class="col-lg-9 col-md-6 col-sm-6">
								<div class="titreProduit row">{{$produit->Nom_article}}</div>
								<div class="row">
									<div class ="col-lg-8 col-md-8 col-sm-8">{{$produit->description}}</div>
									<div class="col-lg-4 col-md-4 col-sm-4">{{$produit->prix}} €</div>
									<div class="row">
										@if(auth()->guest() == false)
											<a href="{{route('produits.show',$produit->id)}}"><button>Voir détails produit</button></a>
										@endif
									</div>
								</div>
							</div>
						</div>
					@endforeach
					{!! $produits->links() !!}
				</div>
			</div>
</div>
				
@endsection

