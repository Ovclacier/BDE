
<h2>Shopping Cart</h2>
    <table>
        <tr>
                                         
            <th>datas</th>
            <th>id user</th>
            <th>quantité</th>
            <th>état</th>
            <th>Action</th>
        </tr>
        @foreach ($carts as $cart)
        <tr>
           
            <td>{{ $cart->datas }}</td>
            <td>{{ $cart->id_user }}</td>
            <td>{{ $cart->quantité }}</td>
            <td>{{ $cart->état }}</td>
            <td>
                <form action="{{ route('cart.destroy',$cart->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
 
      
