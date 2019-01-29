<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Produit;
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
        
        $carts = Commande::where('user_id',auth()->user()->id)->get();
        foreach($carts as $cart){
            $produits[] = $cart->id_produit;
        }
        foreach($produits as $produit){
            $image[] = Produit::where('id', $produit);
        }
        return $image;
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

    public function stores(Request $request)
    {
        $idproduit = $request->id_produit;
        $cart = Commande::Create(
            ['user_id' => auth()->user()->id,
            'id_produit' => $idproduit,
            'quantity' => $request->quantity]);
        $cart->save();
        
  
        return redirect()->route('cart.index');
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
            ['quantity' => $request->quantity]);
       
        $cart->save();

        
  
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
