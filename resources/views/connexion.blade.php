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
			<script src="/js/jquery-3.3.1.js"></script>
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

											<div><br><input id="connect" type="button" value="Se connecter" />
	                </div>
	            </form>
	        </div>
	        <div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
	            <form id="Inscription" name ="RegForm">
								{{ csrf_field() }}

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
                    <div><br><input id="register" type="button" value="S'inscrire" />
										</div>
	            </form>
	        </div>
        </div>
	</body>

	<footer class="footerConnexion">
		<p><a class="lien" href="http://google.com">Mentions légales</a><a class="barre"> | </a><a>BDE@viacesi.fr</a></p>
	</footer>

	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/cookie.js"></script>
	<script type="text/javascript" src="/js/Jquerycookie/jquery.cookie.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
			//form validation
			$("#register").on('click', function() {
					if (document.RegForm.Mail.value == "") {
							alert("Veuillez remplir toutes les cases!");
							document.RegForm.Mail.focus();
							return false;
					}
					if (document.RegForm.Nom.value == "") {
							alert("Veuillez remplir toutes les cases!");
							document.RegForm.Nom.focus();
							return false;
					}
					if (document.RegForm.Prenom.value == "") {
							alert("Veuillez remplir toutes les cases!");
							document.RegForm.Prenom.focus();
							return false;
					}
					if (document.RegForm.Centre.value == "") {
							alert("Veuillez remplir toutes les cases!");
							document.RegForm.Centre.focus();
							return false;
					}
					if (document.RegForm.Mdp.value == "") {
							alert("Veuillez remplir toutes les cases!");
							document.RegForm.Mdp.focus();
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
									window.location = "/";
							},
							error: function(xhr, resp, text) {
									console.log(xhr, resp, text);
									console.log('error');
							}
					})
			})
	});

	</script>
	<script src="/js/cookie.js"></script>
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
						//	console.log(json);
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
