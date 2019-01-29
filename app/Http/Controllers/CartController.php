<?php

namespace App\Http\Controllers;

use App\Cart_storage;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $carts = Cart_storage::all()->where('user_id','=',auth()->user()->id);
  
        return view('shop.cart.cartdetails',compact('carts'));
    }

    public function cartValidation()
    {
        $carts = Cart_storage::all()->where();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = Cart_storage::Create(
            ['user_id' => auth()->user()->id],
            ['cart_data' => $request->cart_data],
            ['quantity' => $request->quantity]
        // if (Cart::all()->where('id_user','=','auth()->user()->id'))
        // {
        //     return redirect()->route('cart.update');
        // }else{
        $cart->save();

        // $carts = Cart::all();
       
        // return view('cart.cartdetails', ['carts' => $carts]);
        $carts = Cart_storage::all()->where('user_id','=','auth()->user()->id');
  
        return redirect()->route('cart.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_storage $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_storage $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart_storage $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_storage $cart)
    {
        //
    }
}
