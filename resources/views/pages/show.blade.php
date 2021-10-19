@extends ('Layouts.app')

@section('titre')
    DETAILs
@endsection
@section('contenu')
 <br>
    <h3>Produits
    </h3>
    <div class="well">
        <h5>
            {{ $produit->produit_prix }}
        </h5>
        <h6>
            {{ $produit->description }}
        </h6>
    </div>
@endsection