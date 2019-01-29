<!DOCTYPE html>
<html lang=fr>
	<head>
		<title>Inscription/Connexion</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		  <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
		  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
		  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
		  <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
		  <script src="{{ asset('/js/bootstrap.js') }}"></script>
		  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
			<style media="screen">
			form .error {
				font-size: 10px;
			}

			</style>
	</head>
	<body class="bckConnexion">
		<br><br><br><br><br>
		<div class = "container-fluid container text-center">
			<div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
				<form action="{{route('connection.connectAttempt')}}" enctype="multipart/form-data" method="POST">
        		@csrf
	                <h2 class="titreEvent">Connexion</h2>
	                <div class="formContainer">
	                    <div><input type="text" name="email" placeholder="Mail" required></div>
	                    <div><input type="password" name="password" placeholder="Mot de passe" required></div>
	                    <button type="submit">Connexion</button>
	                </div>
	           		
  				</form>
	        </div>
	        <div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
	            <form action="{{route('users.store')}}" enctype="multipart/form-data" method="POST">
                @csrf

	                <h2 class="titreEvent">S'inscrire</h2>
	                <div class="row">
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="email" placeholder="Mail" required></div>
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="password" name="password" placeholder="Mot de passe" required></div>
	                </div>
	                <div class="row">
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="nom" placeholder="Nom" required></div>
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="prenom" placeholder="Prénom" required></div>
	                </div>
	                <br>
				    <div class="inForm">Localisation :</div>
				    <select name="centre">
					    <option>Strasbourg</option>
					    <option>Paris</option>
					    <option>Poitou-Charentes</option>
					    <option>San Fransisco</option>
					    <option>Tokyo</option>
				    </select>
						<div class="col-lg-6 col-md-12 col-sm-12">
											<input type="checkbox" id="check_form"></div>
											<div class="col-lg-6 col-md-12 col-sm-12" style="font-size:10px">
											J'accepte les <a href="CGU" style="color:blue">conditions d'utilisation</a>
											</div>

                    <button type="submit">S'inscrire</button>
            	</form>
	        </div>
        </div>
	</body>
	<footer class="footerConnexion">
		<p><a class="lien" href="/BDE/public/mentions">Mentions légales</a><a class="barre"> | </a><a>BDE@viacesi.fr</a></p>
	</footer>
</html> 
