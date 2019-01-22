<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="fr" />
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

  @yield('navbar')

  @yield('contenu')

  @yield('footer')
</body>
</html>
