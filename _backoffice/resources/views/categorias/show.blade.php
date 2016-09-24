@extends('layouts.master')

@section('content')

<h1>{{ $categoria->nombre }}</h1>
<p>{{ $categoria->caracteristicas }}</p>
<hr>

<a href="{{ route('categorias.index') }}" class="btn btn-info">Back to all Categorías</a>
<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Edit Categoría</a>

<div class="pull-right">
    <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger">Delete Categoría</a>
</div>

@stop