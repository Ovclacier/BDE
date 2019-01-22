<!doctype html>
<html>
<head>
<title>PROJECTS</title>
</head>
<body>
    <h1>Sign in to external Server</h1>
    <form method="POST" action="http://localhost:3000/auth/signin">
    {{csrf_field()}}
        <div>
            <input type="test" name="Name" placeholder="Ville de votre centre">
        </div>

        <div>
            <input name="Password" placeholder="Project Description">
        </div>

        <div>
            <button type="submit"> Create your Project </button>
        </div>
    </form>
</body>
</html>
