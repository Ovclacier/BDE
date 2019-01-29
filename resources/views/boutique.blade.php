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
			<div class="row blc">
				<div class="col-lg-3 col-mg-12 col-sm-12 ble2 text-left marginMenu fontSizeMenu"style="min-height: 100%;">
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
					<?php print_r($produits) ?>
					@foreach($produits as $produit)
						<div class="row marginTop25">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<a href="http://www.google.fr"><img src="{{$produit->URL_image}}" width="200" height="200" alt="pile"></a>
							</div>
							<div class="col-lg-9 col-md-6 col-sm-6">
								<div class="titreProduit row">{{$produit->Nom_article}}</div>
								<div class="row">
									<div class ="col-lg-8 col-md-8 col-sm-8">{{$produit->description}}</div>
									<div class="col-lg-4 col-md-4 col-sm-4">{{$produit->prix}} €</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
</div>
				
@endsection