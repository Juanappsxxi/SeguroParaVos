@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
<hr>

<a href="{{ route('categorias.index') }}" class="btn btn-info">View Categorías</a>
<a href="{{ route('categorias.create') }}" class="btn btn-primary">Add New Categoría</a>

@stop