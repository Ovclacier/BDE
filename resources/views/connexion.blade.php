<!DOCTYPE html>
<html>
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
	</head>
	<body class="bckConnexion">
		<br><br><br><br><br>
		<div class = "container-fluid container text-center">
			<div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
				<form id="Connexion" name="CxForm">
	                <h2 class="titreEvent">Connexion</h2>
	                <div class="formContainer">
	                    <div><input type="text" name="Mail" placeholder="Mail"></div>
	                    <div><input type="password" name="Mdp" placeholder="Mot de passe"></div>

	                    <div><br><button id="connect" form="">Connexion</button></div>
	                </div>
	            </form>
	        </div>
	        <div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
	            <form id="Inscription" name="RegForm" method="post">
	                <h2 class="titreEvent">S'inscrire</h2>
	                <div class="row">
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="Mail" placeholder="Mail"></div>
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="password" name="Mdp" placeholder="Mot de passe"></div>
	                </div>
	                <div class="row">
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="Nom" placeholder="Nom"></div>
	                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="Prenom" placeholder="Prénom"></div>
	                </div>
	                <br>
				    <div class="inForm">Localisation :</div>
				    <select name="Centre">
					    <option>Strasbourg</option>
					    <option>Paris</option>
					    <option>Poitou-Charentes</option>
					    <option>San Fransisco</option>
					    <option>Tokyo</option>
				    </select>
						<p> <input type="checkbox" id="check_form" name="" value="">
						</p>
                    <div><br><button id="register" form="">S'inscrire</button></div>
	            </form>
	        </div>
        </div>
	</body>

	<footer class="footerConnexion">
		<p><a class="lien" href="/BDE/public/mentions">Mentions légales</a><a class="barre"> | </a><a>BDE@viacesi.fr</a></p>
	</footer>
		<script type="text/javascript" src="{{asset(' /js/Jquerycookie/jquery.cookie.js ')}}"></script>
		<script type="text/javascript">
		$(document).ready(function() {


				//form validation
				$("#register").on('click', function() {
					console.log($("#check_form").is(":checked"));
						if (document.RegForm.Mail.value == "" || document.RegForm.Nom.value == "" || document.RegForm.Prenom.value == "" || document.RegForm.Centre.value == "" || document.RegForm.Mdp.value == "") {
								alert("Veuillez remplir toutes les cases!");
								document.RegForm.Mail.focus();
								return false;
						}

						if ($("#check_form").is(":checked") == false) {
							alert("please check the box");
							return false;
						}
						//send data to API
						$.ajax({
								url: 'http://localhost:3000/api/users',
								type: 'POST',
								dataType: 'json',
								//contentType: "application/json",
								data: $('#Inscription').serializeArray(),
								success: function(json) {
										//    alert("success");
										//console.log("success");
										//console.log(json);
										alert("inscription confirmée. Vous allez être redirigé vers la page d'accueil");
								//		window.location = "/";
								},
								error: function(xhr, resp, text) {
										console.log(xhr, resp, text);
										console.log('error');
								}
						})
				})
		});

		</script>
		<script src="{{ asset('/js/cookie.js') }}"></script>
		<script type="text/javascript">
		$(document).ready(function() {
				//form validation
				$("#connect").on('click', function() {
						if (document.CxForm.Mail.value == "") {
								alert("Veuillez remplir toutes les cases!");
								document.CxForm.Mail.focus();
								return false;
						}
						if (document.CxForm.Mdp.value == "") {
								alert("Veuillez remplir toutes les cases!");
								document.CxForm.Mdp.focus();
								return false;
						}
						//send user Mail and password to nodeJS API
						$.ajax({
							url: 'http://localhost:3000/api/users/login', //API url
							type: 'POST',
							dataType: 'json',
							data: $("#Connexion").serializeArray(), //dara from connexion form
							success: function(json) {
								console.log('success');
								console.log(json);
								setCookie("UserId", json.data.id, 365);
								if(json.data.Grade > 1) {
									//console.log(json.token);
									//set jsonwebtoken to allow access to API
									setCookie("token", json.token, 7);
								} else {
									eraseCookie("token");
								}
								//var test = listCookies();
								//console.log(test);
								//alert("Vous êtes bien connectés. Vous allez être redirigé(e).")
								//window.location = "/";

							}
						})
					})
				});

		</script>


</html>
