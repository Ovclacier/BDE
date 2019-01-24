<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.js') }}"></script>
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
  		<li><a class="texte" href="https://google.fr">Boutique</a></li>
          <li><a class="texte" href="https://google.fr">Boite à idées</a></li>
          <li><a class="texte" href="https://google.fr">Events</a></li>
        </ul>
        <ul class=" nav navbar-nav navbar-right">
          <li><a class="texte" href="localhost">Connexion/Inscription</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('contenu')

  <footer>
    <p><a class="lien" href="http://google.com">Mentions légales</a><a class="barre"> | </a><a>BDE@viacesi.fr</a></p>
  </footer>
</body>
</html>
