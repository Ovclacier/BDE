
                <h2> Show Product</h2>
                <a href="{{ route('products.index') }}"> Back</a>

                <strong>Name:</strong>
                {{ $products->name }}
                <strong>Details:</strong>
                {{ $products->description }}
          
            <form method="post" action="{{ route('cart.store') }}">
             @csrf
            <input type="text" value="{{ $products->name }}" name="datas" readonly>
            <input type="text" value="{{ $products->id }}" name="id_user" readonly>
          
            <button type="submit">Submit</button>
           </form>
        </div>
    </div>
