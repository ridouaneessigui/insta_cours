@extends ('Layouts.app')

@section('titre')
    Home
@endsection
{{--
<?php
$produits = DB::table('produits')
                ->get();

?>
--}}
@section('contenu')
<div class="jumbotron">
    <h1>Welcome to the laravel 7.X project</h1>
 </div>
 <br>
    <h3>Produits
    </h3>
    @foreach ($produits as $produit)
        <div class="well">
            <h5> <a href="/show/{{$produit->id}}">
                {{ $produit->produit_prix }}</a>
            </h5>
            <h6>
                {{ $produit->created_at }}
            </h6>
            <h6>
                {{ $produit->updated_at }}
            </h6>
        </div>
    @endforeach
    {{$produits->links()}}
@endsection
