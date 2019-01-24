@extends('layout')
<html>
	@section('titre')
	<title>Évènements</title>
	@endsection

	@section('contenu')

		<div class="container blc container-fluid text-center">
			<div class="row ble1 menuTop">
				<h1>Évènements</h1>
			</div>
			<div class="row blc menuTop">
				<div class="col-lg-3 col-md-3 col-sm-12 ">
					<img src="img/party.jpg" width="200" height="200" alt="pile">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<h2 class="titreEvent">Soirée nouveau membre de l'équipe</h2>
					
					<h4>Ceci est la description trolololo</h4>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-md-6">
							<h4>12/12/19</h4>
						</div>
						<div class="col-lg-6 col-md-6 col-md-6">
							<h4>18<img src="img/like.png" width="20" height="20"></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row blc marginTopBot">
				<div class="col-lg-3 col-md-3 col-sm-12">
					<img src="img/party.jpg" width="200" height="200" alt="pile">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<h4>12/12/19</h4>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<h4>Soirée nouveau membre de l'équipe</h4>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h4>18<img src="img/like.png" width="20" height="20"></h4>
						</div>
					</div>
					<h4>Ceci est la description trololololoolololololololloololollololololo lololololollo lol lol olololollolol lo lolo l olo l ol ol ol o lo lo l o ol ol olololololo </h4>
				</div>
			</div>

		</div>

@endsection