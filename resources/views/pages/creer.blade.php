@extends('layouts/app')

@section('titre')
    Création
@endsection
@section('contenu')
        {!! Form::open(['action'=>'PagesController@saveproduct','methode'=>'POST','class'=>'form-horizontal']) !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                {{Form::label('','Product Price')}}
                {{Form::number('product_prix','',['placeholder'=>'Product Price','class'=>'from-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('','Product description')}}
                {{Form::textarea('product_description','',['id'=>'editor','placeholder'=>'Product description','class'=>'from-control'])}}
            </div>
            {{Form::submit('Add Product',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection
