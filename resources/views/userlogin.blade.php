<!doctype html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="/connection" enctype="multipart/form-data" method="POST">
        @csrf
        <h1> Enter Details to login</h1>
            <label>Email</label> <input type="text" name="email">
    
    
            <label>Password</label><input type="password" name="password">
        
        <button type="submit">Submit</button>
    </form>

    @if($errors->any())
        <h2>{{$errors->first()}}</h2>
    @endif
</body>

</html>