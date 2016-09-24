@extends('layouts.master')

@section('content')

<h1>{{ $categoria->nombre }}</h1>

<hr>

@include('partials.alerts.errors')
@include('partials.alerts.success-message')

<div class="panel panel-default">
	<div class="panel-heading">
		<a href="{{ route('categorias.index') }}" class="btn btn-info">
			<span class="glyphicon glyphicon-chevron-left"></span>
			Atrás
		</a>

		<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-info">
			<span class="glyphicon glyphicon-pencil"></span>
			Editar
		</a>

		<div class="pull-right">
            <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove"></span>
                Delete Categoría
            </a>
        </div>
	</div>

	<div class="panel-body">
		<p>{{ $categoria->caracteristicas }}</p>
	</div>
</div>

@stop