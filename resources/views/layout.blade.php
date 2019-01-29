<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
@yield('title')

</head>
<body>

  <nav class="navbar navbar-fixed-top back">
    <div class="container-fluid-bis">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img class="logo" alt="logo du cesi" src="https://cdn.discordapp.com/attachments/533281182180442114/536851376052109313/logo.png">
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class=" nav navbar-nav">
  		<li><a class="texte" href="{{ route('produits.index') }}">Boutique</a></li>
          <li><a class="texte" href="Idees">Boite à idées</a></li>
          <li><a class="texte" href="{{ route('events.index') }}">Events</a></li>
        </ul>
        <ul class=" nav navbar-nav navbar-right">
          <li><a class="texte" href="Connexion">Connexion/Inscription</a></li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('contenu')

  <footer>
    <p><a class="lien" href="/BDE/public/mentions">Mentions légales</a><a class="barre"> | </a><a>BDE@viacesi.fr</a></p>
  </footer>
</body>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "transparent",
      "text": "#f1d600",
      "border": "#f1d600"
    }
  },
  "showLink": false,
  "type": "opt-in",
  "content": {
    "message": "Nous utilisons des cookies pour améliorer votre expérience sur notre site",
    "dismiss": "Non.",
    "allow": "J'accepte"
  }
})});
</script>
</html>
