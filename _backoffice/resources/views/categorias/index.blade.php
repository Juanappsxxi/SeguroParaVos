@extends('layouts.master')

@section('content')

<h1>Categorías guardadas</h1>
<p class="lead">Aquí están todas las categorías guardadas. <a href="{{ route('categorias.create') }}">Agregar una?</a></p>
<hr>

@foreach($categorias as $categoria)
    <h3>{{ $categoria->nombre }}</h3>
    <p>{{ $categoria->caracteristicas}}</p>
    <p>
        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">View Categoría</a>
        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Edit Categoría</a>
        <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger">Delete Categoría</a>
    </p>
    <hr>
@endforeach

@stop