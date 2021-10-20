@extends('layouts/app')

@section('titre')
    Création
@endsection
@section('contenu')
        {!! From::open(['action'=>'ProductController@saveproduct','methode'=>'POST','class'=>'form-horizontal']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                {{From::label('','Product Price')}}
                {{From::number('product_prix','',['placeholder'=>'Product Price','class'=>'from-control'])}}
            </div>
            <div class="form-group">
                {{From::label('','Product description')}}
                {{From::textarea('product_description','',['id'=>'editor','placeholder'=>'Product description','class'=>'from-control'])}}
            </div>
            {{From::submit('Add Product',['class'=>'btn btn-primary'])}}
        {!!From::close() !!}
@endsection