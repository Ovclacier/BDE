
<h2>Shopping Cart</h2>
    <table>
        <tr>
                                         
            <th>data</th>
            <th>id user</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($carts as $cart)
        <tr>
           
            <td>{{ $cart->cart_data }}</td>
            <td>{{ $cart->user_id }}</td>
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
  
 
      
