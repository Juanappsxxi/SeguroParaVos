@extends('layouts.master')

@section('content')

<h1><span class="glyphicon glyphicon-home"></span> Resumen Back Office</h1>
<p class="lead">Administració de la base de datos</p>

<hr>

<div class="list-group">
	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-plus"></span>
			</a>
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Categorías</a></h4>
		<p class="list-group-item-text">Lista, agrega, edita o elimina categorías del sitio...</p>
	</div>

	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-plus"></span>
			</a>
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Seguros</a></h4>
		<p class="list-group-item-text">Lista, agrega, edita o elimina seguros del sitio...</p>
	</div>

	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-plus"></span>
			</a>
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Atributos</a></h4>
		<p class="list-group-item-text">Lista, agrega, edita o elimina atributos de los seguros, puedes hacerlo directo en cada seguro para evitar errores...</p>
	</div>

	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Pólizas</a></h4>
		<p class="list-group-item-text">Lista las pólizas contratadas a través del sitio web...</p>
	</div>

	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Usuarios</a></h4>
		<p class="list-group-item-text">Lista los usuarios potenciales que han contratado pólizas a través del sitio...</p>
	</div>

	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-plus"></span>
			</a>
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Aseguradoras</a></h4>
		<p class="list-group-item-text">Lista, agrega, edita o elimina las empresas aseguradoras con las que trabajas...</p>
	</div>

	<div class="list-group-item">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-plus"></span>
			</a>
			<a class="btn btn-default" href="#">
				<span class="glyphicon glyphicon-th-list"></span>
			</a>
		</div>
		<h4 class="list-group-item-heading"><a href="#">Formas de Pago</a></h4>
		<p class="list-group-item-text">Lista, agrega, edita o elimina las formas de pago con las que trabajas...</p>
	</div>
</div>
<!-- <a href="{{ route('categorias.index') }}" class="btn btn-info">View Categorías</a>
<a href="{{ route('categorias.create') }}" class="btn btn-primary">Add New Categoría</a> -->

@stop