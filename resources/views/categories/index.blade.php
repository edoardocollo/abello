@extends('layouts.app')

@section('content')
<h1>INDEX CATEGORIE</h1>
<a href="{{route('categories.create')}}">
  <button type="button" name="button" class="btn btn-success">CREA UNA NUOVA CATEGORIA</button>
</a>

@endsection
