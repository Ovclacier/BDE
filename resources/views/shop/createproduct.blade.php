



<body>
            <form method="post" action="{{ route('produits.stores') }}" enctype="multipart/form-data">

                @csrf 
                <h1> Enter Details to create a product</h1>
               
                    <label>Name</label> <input type="text" name="Nom_article">          

                    <label>Image</label><input type="file" name="url_image">
                    
                    <label>Description</label> <input type="text" name="description">

                    <label>Categorie</label><select name="categorie">
                    @foreach( $categories as $categorie)
                    <option>{{ $categorie->categorie }}</option>
                    @endforeach

                    <label>Price</label> <input type="number" name="price">



                <button type="submit">Submit</button>
            </form>

      
</body>
