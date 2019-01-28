<!doctype html>
<html>



<body>
            <form action="/img" method="POST" enctype="multipart/form-data">

                @csrf
                <h1> Enter Details to create a product</h1>        

                    <label>Image</label><input type="file" name="image" id="image">
 
                <button type="submit">Submit</button>
            </form>

      
</body>

</html>