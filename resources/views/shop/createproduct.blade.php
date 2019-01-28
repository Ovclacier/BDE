<!doctype html>
<html>



<body>
            <form action="/products" method="POST" enctype="multipart/form-data">

                @csrf
                <h1> Enter Details to create a product</h1>
               
                    <label>Name</label> <input type="text" name="name">          

                    <label>Image</label><input type="file" name="image" id="image">
               
                    <label>Description</label> <input type="text" name="description">

                    <label>Price</label> <input type="number" name="price">

                <button type="submit">Submit</button>
            </form>

      
</body>

</html>