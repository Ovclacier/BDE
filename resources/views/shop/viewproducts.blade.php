
    <h2>Shop</h2>
    <a href="{{ route('produits.create') }}"> Create New Produit</a>
    <table>
        <tr>
            <th>No</th>                             
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        <a href="{{ route('cart.index') }}">Cart</a>
        @foreach ($produits as $produit)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produit->name }}</td>
            <td>{{ $produit->description }}</td>
            <td>
                <form action="{{ route('produits.destroy',$produit->id) }}" method="POST">
                    <a href="{{ route('produits.show',$produit->id) }}">Show</a>
                    <a href="{{ route('produits.edit',$produit->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $produits->links() !!}
      
