<!doctype html>
<html>
<body>
            <form action="/users" enctype="multipart/form-data" method="POST">

                @csrf
                <h1> Enter Details to sign in</h1>
                    <label>Name</label> <input type="text" name="name">     
                    <label>Email</label> <input type="text" name="email">
                    <label>Password</label><input type="password" name="password"> 
                    <label>Confirm</label><input type="password" name="password_confirm">
                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>