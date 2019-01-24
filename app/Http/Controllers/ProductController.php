<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
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
        $products = Product::paginate(2);
        return view('shop.viewproducts', ['products' => $products]);
    }

    public function cart()
    {
        return view('shop.cart');
    }

    public function addItem($id)
    {
        
    
 

        // $product = Product::find($id);

        // if (!$product) {

        //     abort(404);

        // }

        // $cart = session()->get('cart');

        // // if cart is empty then this the first product
        // if (!$cart) {

        //     $cart = [
        //         $id => [
        //             "name" => $product->name,
        //             "quantity" => 1,
        //             "price" => $product->price,
        //             "photo" => $product->photo,
        //         ],
        //     ];

        //     session()->put('cart', $cart);

        //     return redirect()->back()->with('success', 'Product added to cart successfully!');
        // }

        // // if item not exist in cart then add to cart with quantity = 1
        // $cart[$id] = [
        //     "name" => $product->name,
        //     "quantity" => 1,
        //     "price" => $product->price,
        //     "photo" => $product->photo,
        // ];

        // // if cart not empty then check if this product exist then increment quantity
        // if (isset($cart[$id])) {

        //     $cart[$id]['quantity']++;

        //     session()->put('cart', $cart);

        //     return redirect()->back()->with('success', 'Product added to cart successfully!');

        // }

        // session()->put('cart', $cart);

        // return redirect()->back()->with('success', 'Product added to cart successfully!');
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
        $products = DB::table('products')->simplePaginate(2);
        return view('shop.viewproducts', ['products' => $products]);

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
