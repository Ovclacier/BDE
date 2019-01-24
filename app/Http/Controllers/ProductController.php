<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Cart_storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart_storage::all();
        $products = Product::paginate(2);
        return view('shop.viewproducts', ['products' => $products],
                                        ['carts' => $carts]
    );
    }

   

    public function addItem(Request $request)
    {
        $products = Product::paginate(2);
        $carts = Cart_storage::firstOrCreate([
            'user_id' => $request->user_id],
            ['cart_data' => $request->cart_data]);
        $carts->save();
        
        return view('shop.viewproducts', ['products' => $products],
                                        ['carts' => $carts]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = explode('/', $request->image->store('public/images'));
        $product = Product::firstOrCreate([
            'name' => $request->name],
            ['image' => $test[2],
                'description' => $request->description,
                'price' => $request->price,
                'count' => $request->count,
            ]);
        $product->save();
        //$products = Product::all();
        $products = DB::table('products')->paginate(2);
        return view('shop.viewproducts', ['products' => $products],
                                        ['carts' => $carts]
    );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

}
