<!doctype html>
<html>



<body>
    <div>
        <div>
            <form action="/products" enctype="multipart/form-data" method="POST">

                @csrf
                <h1> Enter Details to create a product</h1>
                <div>
                    <label>Name</label> <input type="text" name="name">
                </div>

                <div>
                    <label>Description</label> <input type="text" name="description">
                </div>

                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>