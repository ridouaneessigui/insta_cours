@extends ('Layouts.app')

@section('titre')
    DETAILs
@endsection
@section('contenu')
<div class="jumbotron">
    <h1>Welcome to the laravel 7.X project</h1>
 </div>
 <br>
    <h3>Produits
    </h3>
    <div class="well">
        <h5> <a href="/show/{{$produit->id}}">
            {{ $produit->produit_prix }}</a>
        </h5>
        <h6>
            {{ $produit->description }}
        </h6>
    </div>
@endsection