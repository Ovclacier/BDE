@extends('HéritageTest')
<html>
	@section('titre')
	<title>Inscription/Connexion</title>
	@endsection

	@section('contenu')
		<br><br><br><br><br>
		<div class = "container-fluid container text-center">
			<div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
					<form id="Connexion">
		                <h2 class="titreEvent">Connexion</h2>
		                <div class="formContainer">
	                    <div><input type="text" name="mail" placeholder="Mail"></div>
	                    <div><input type="password" name="pwd" placeholder="Mot de passe"></div>

		                    <div><br><button form="Connexion">Connexion</button></div>
		                </div>
		            </form>
	        </div>
	        <div class="col-lg-1 col-md-0 col-sm-0"></div>
			<div class="col-lg-4 col-md-12 col-sm-12 wrapper">
				<div class="container-fluid container"></div>
		            <form id="Inscription">
		                <h2 class="titreEvent">S'inscrire</h2>
		                <div class="row">
		                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="mail" placeholder="Mail"></div>
		                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="password" name="pwd" placeholder="Mot de passe"></div>
		                </div>
		                <div class="row">
		                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="nom" placeholder="Nom"></div>
		                    <div class="col-lg-6 col-md-12 col-sm-12"><input class="logInput blackInput" type="text" name="prénom" placeholder="Prénom"></div>
		                </div>
					    <div class="inForm">Localisation :</div>
					    <form>
					    <select name="place">
					    <option>Strasbourg</option>
					    <option>Paris</option>
					    <option>Poitou-Charentes</option>
					    <option>San Fransisco</option>
					    <option>Tokyo</option>
					    </select>
					    </form>
	                    <div><br><button form="Inscription">S'inscrire</button></div>
		            </form>
		        </div>
            </div>
        </div>
	    

</html>
@endsection