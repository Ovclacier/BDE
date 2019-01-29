<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::paginate(2);
        $bestProduits = DB::select(' SELECT s.id_produit, SUM(quantite) as Quantite, produits.Nom_article as Nom_article, produits.URL_image as URL_image FROM selectcom as s LEFT JOIN produits ON s.id_produit = produits.id_produit group by id_produit ORDER BY Quantite DESC LIMIT 0,3');
  
        return view('boutique', compact('Produits','bestProduits'))
            ->with('i', (request()->input('page', 1)-1)*2);
        // $produits = Produit::all();
        // return view('shop.viewproducts', ['produits' => $produits]);
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
        $test = explode('/', $request->URL_image->store('images','public'));

        $produit = Produits::firstOrCreate(
            ['Nom_article' => $request->Nom_article],
            ['description' => $request->description,
            'price' => $request->price,
            'URL_image' => $test[1] ]
        );
        //$test = explode('/', $request->image);

        
        $produit->save();
        $produits = Produit::paginate(2);
  
        return redirect()->route('produits.index',compact('produits'))
            ->with('i', (request()->input('page', 1)-1)*2);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $produits = Produits::find($id);
       
        return view('shop.productdetails', ['produits' => $produits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produits $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produits $produit)
    {
        //
    }
}