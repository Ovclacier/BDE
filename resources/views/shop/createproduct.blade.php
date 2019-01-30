



<body>
            <form enctype="multipart/form-data" action="{{ route('produits.stores') }}" method="POST">

                @csrf 
                <h1> Enter Details to create a product</h1>
               
                    <label>Name</label> <input type="text" name="name">          

                    <label>Image</label><input type="file" name="image">
                    <input type="file" name="oiu">
                    <label>Description</label> <input type="text" name="description">

                    <label>Price</label> <input type="number" name="price">

                <button type="submit">Submit</button>
            </form>

      
</body>
