<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>

<body>

    <h1>Here's a list of available products</h1>
    <table>
        <thead align="center">
            <td>Name</td>
            <td>Image</td>
            <td>Description</td>
            <td>Count</td>
            <td>Price</td>
        </thead>
        <tbody align="center">
            <section id="content">
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>

                    <td class="inner-table"><img src="storage/images/{{$product->image}}" height=100px width=100px />
                    </td>
                    <td class="inner-table">{{ $product->description }}</td>
                    <td class="inner-table">{{ $product->count }}</td>
                    <td class="inner-table">{{ $product->price }}</td>
                    <td>
                        <form  method="post" action="{{ route('products.addItem') }}">
                            <input style="display:none;" type="text" value="2" name="user_id" id="user_id">
                            <input style="display:none;" type="text" value="{{ $product->id }}" name="cart_data" id="cart_data">
                            <a href="{{ url('add-to-cart/'.$product->id) }}" role="button">Add to cart</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </section>
            {{ $products->links() }}
            
        </tbody>
    </table>
    @foreach ( $carts as $cart )
        {{ $cart->cart_data }}
    @endforeach
</body>
</html>