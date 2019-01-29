
<h2>Shopping Cart</h2>
    <table>
        <tr>
                                         
            <th>data</th>
            <th>id user</th>
            <th>quantité</th>
            <th>état</th>
            <th>Action</th>
        </tr>
        @foreach ($carts as $cart)
        <tr>
            <td>{{ $cart->id}}</td>
            <td>{{ $cart->url_image }}</td>
            
            <td>oui</td>
            
            <td>
                <form action="{{ route('cart.index') }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
 
      
