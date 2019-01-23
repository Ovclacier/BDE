@extends('layouts.app')

@section('content')
<!doctype html>
@if(checkPermission(['superadmin']))
<a href="/"><button>Access All Users</button></a>
@endif


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
                                <td class="inner-table">{{$product->description}}</td>
                                <td class="inner-table">{{ $product->count }}</td>
                                <td class="inner-table">{{ $product->price }}</td>
                                <td class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </td>
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
    @endsection