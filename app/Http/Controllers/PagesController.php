<?php

namespace App\Http\Controllers;
use App\Produit;
use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    public function service () {
     return view('pages.service');
        }
        public function apropos () {
            return view('pages.apropos');
                }
        public function home () {
            $produits=DB::table('produits')
            ->paginate(1);
            
          return view('pages.home') ->with('produits',$produits);
                 }            
    public function show ($id) {
       /*$produit =DB::table('produits')
       ->where('id',$id)
       ->first();*/
       $produit=Produit::find($id);
       return view('pages.show')->with('produit',$produit);
                 }
        public function creer () {
                    return view('pages.creer');
                    }
         public function create (Request $request) {
                $this->validate($request,['product_prix'=>'required',
                           'product_description'=>'required']);
             $produit = New Produit();
             $produit->produit_prix = $request->product_prix;
             $produit->description = $request->product_description;
             $produit->save();
             
             session()->put(' message ' , ' le produit ' .$request->produit_prix. ' a ete insere avec succes ');
             return redirect('/creer');
                 }

}