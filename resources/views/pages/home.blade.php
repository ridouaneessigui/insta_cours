@extends ('Layouts.app')

@section('titre')
    Home
@endsection

<?php
$produits = DB::table('produits')
                ->get();

?>
@section('contenu')
<div class="jumbotron">
    <h1>Welcome to the laravel 7.X project</h1>
 </div>
 <br>
    <h3>Produits
    </h3>
    @foreach ($produits as $produit)
        <div class="well">
            <h5>
                {{ $produit->produit_prix }}
            </h5>
            <h5>
                {{ $produit->created_at }}
            </h5>
            <h5>
                {{ $produit->updated_at }}
            </h5>
        </div>
    @endforeach
@endsection
