<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Categorie;
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
        $produits = Produit::paginate(5);
        $categories = Categorie::all();
        $bestProduits = DB::select(' SELECT s.id_produit, SUM(quantity) as Quantite, produits.Nom_article as Nom_article, produits.URL_image as URL_image FROM commandes as s LEFT JOIN produits ON s.id_produit = produits.id group by id_produit ORDER BY Quantite DESC LIMIT 0,3');
  
        return view('boutique', ['produits' => $produits,'bestProduits' => $bestProduits, 'categories' => $categories])
            ->with('i', (request()->input('page', 1)-1)*2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('shop.createproduct', ['categories' => $categories]);
    }

    public function triCategorie($id)
    {
        $triProduits = Produit::where('id_categorie', $id)->paginate(5);
        $categories = Categorie::all();
        $bestProduits = DB::select(' SELECT s.id_produit, SUM(quantity) as Quantite, produits.Nom_article as Nom_article, produits.URL_image as URL_image FROM commandes as s LEFT JOIN produits ON s.id_produit = produits.id group by id_produit ORDER BY Quantite DESC LIMIT 0,3');


  
        return view('boutique', ['produits' => $triProduits,
                                'bestProduits' => $bestProduits, 
                                'categories' => $categories])
                    ->with('i', (request()->input('page', 1)-1)*2);
    }
    public function stores(Request $request)
    {
        
       $link = $request->url_image->store('images','public');
       $test = explode('/', $link);

        $produit = Produit::firstOrCreate(
            ['Nom_article' => $request->Nom_article],
            ['description' => $request->description,
            'price' => $request->price,
            'url_image' => $test[1]]
        );
        //$test = explode('/', $request->image);

        
        $produit->save();
       
  
        return redirect()->route('produits.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $test = explode('/', $request->URL_image->store('images','public'));

        $produit = Produit::firstOrCreate(
            ['Nom_article' => $request->Nom_article],
            ['description' => $request->description,
            'price' => $request->price,
            'url_image' => $test[1]]
        );
        //$test = explode('/', $request->image);

        
        $produit->save();
       
  
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id_produit)
    {
        
        $produits = Produit::find($id_produit);
       
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


