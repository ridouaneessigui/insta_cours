@extends('layouts/app')

@section('titre')
    Création
@endsection
@section('contenu')
        <form action="{{url('/saveproduct')}}"
            method="POST" class="for-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" name="product_prix" placeholder="Product Price" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <textarea name="product_description" placeholder="Product Description" class="form-control" id="editor" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Create" class="btn btn-primary">
        </form>

@endsection