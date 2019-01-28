<!DOCTYPE html>
@extends('layout')
<html>
	@section('titre')
	<title>Evenement</title>

	
	@section('contenu')

	<div>
	<div class="container-fluid container blc text-center">
	<div class="row ble1 menuTop">
				<h1>Fiche de l'idée</h1>
			</div>
</div>
		<div class="container container-fluid blc centerImg">
			<div class="col-lg-3 col-md-4 col-sm-12">
				<img src="img/idea.jpg" width="200" height="200">
			</div>
			<div class="col-lg-9 col-md-8 col-sm-12 descIdee">
				Description : Lorem ipsum dolor sit amet, essent conclusionemque no nec, cum eros ipsum iuvaret eu. In qui partem placerat, nullam salutatus an pri, ei eos harum adipisci. No munere oblique qui. Et wisi vocibus admodum cum.
				Lorem ipsum dolor sit amet, essent conclusionemque no nec, cum eros ipsum iuvaret eu. In qui partem placerat, nullam salutatus an pri, ei eos harum adipisci. No munere oblique qui. Et wisi vocibus admodum cum.
				Lorem ipsum dolor sit amet, essent conclusionemque no nec, cum eros ipsum iuvaret eu. In qui partem placerat, nullam salutatus an pri, ei eos harum adipisci. No munere oblique qui. Et wisi vocibus admodum cum.
				Lorem ipsum dolor sit amet, essent conclusionemque no nec, cum eros ipsum iuvaret eu. In qui partem placerat, nullam salutatus an pri, ei eos harum adipisci. No munere oblique qui. Et wisi vocibus admodum cum.
			</div>
		</div>



	</div>

		<div class="container-fluid container blc text-center ">
		
			<div class="row ble1">
				<h2>Photos</h2>
			</div>
			<div class="row">
			
				<div class="col-lg-12 col-mg-12 col-sm-12 blc">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" width="200" height="200" alt="pile"></a>
							
						</div>
					</div>
				</div>
			</div>
			</div>
</div>
				
@endsection