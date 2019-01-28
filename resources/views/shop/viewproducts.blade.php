
    <h2>Shop</h2>
    <a href="{{ route('products.create') }}"> Create New Product</a>
    <table>
        <tr>
            <th>No</th>                             
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        <a href="{{ route('cart.index') }}">Cart</a>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a href="{{ route('products.show',$product->id) }}">Show</a>
                    <a href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
