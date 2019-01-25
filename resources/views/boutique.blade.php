<!DOCTYPE html>
@extends('layout')
<html>
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
						<a href="http://www.google.fr"><img src="{{$bestproduit->URL_image}}" width="200" height="200" alt="pile"></a>
						<div class="adm">{{$bestproduit->Nom_article}}</div>
					</div>
				@endforeach
			</div>


		</div>

		<div class="container-fluid container blc text-center ">
		
			<div class="row ble1">
				<h2>Liste produit</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-mg-12 col-sm-12 ble2 text-left marginMenu fontSizeMenu">
					<h3 class="text-center">Coucou</h3>
					<div>Catégories :</div>
					<ul>
						<li>Pile</li>
						<li>Paire de pile</li>
						<li>Pile de rechange</li>
						<li>Pile de montre</li>
					</ul>
				</div>
			
				<div class="col-lg-9 col-mg-12 col-sm-12 blc">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
						<div>Pile AA</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
						<div>Pile AAA</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
						<div>Pile AAAAAAAAAAAA</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
						<div>Pile B</div>
					</div>
				</div>
			</div>
</div>
				
@endsection