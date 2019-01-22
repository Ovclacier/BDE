<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="fr" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BDE Connexion</title>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	 	<link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
	 	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
		<script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.js') }}"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>

	<body>

	@include('header')


		<div class = "container-fluid container blc text-center">
			<h1>Les produits du moments</h1>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="pile"></a>
				<div>Pile AA</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="pile"></a>
				<div>Pile AAA</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="pile"></a>
				<div>Pile AAAAAAAAAAAA</div>
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
		@include('includes.footer')
	</body>
