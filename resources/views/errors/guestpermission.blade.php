<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

	<h1>You must login to access this page <br/>
        <a href="{{ route('products.index') }}">Shopping</a>
        <a href="{{ route('connection.connect') }}">Login</a>
        <a href="{{ route('users.create') }}">Sign In</a>
        <a href="{{ url('/') }}">Menu</a>
    </h1>

</body>
</html>