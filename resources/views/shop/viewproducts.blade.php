
<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>View Products | Product Store</title>
        <!-- Styles etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
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
                                
                                <td class="inner-table"><img src="storage/images/{{$product->image}}" height=100px width=100px/></td>
                                <td class="inner-table"><input value="{{$product->description}}" readonly></td>
                                <td class="inner-table"><input value="{{ $product->count }}" readonly></td>
                                <td class="inner-table"><input value="{{ $product->price }}" readonly></td>
                                <td style="display:none;">{{ $product->id }}</td>
                            </tr>
                        @endforeach
                       </section>
                       {{ $products->links() }}
                    </tbody>
                </table>
            </div>
        </div>

    </body>
    </html>