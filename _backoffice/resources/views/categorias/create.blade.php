@extends('layouts.master')

@section('content')

<h1><span class="glyphicon glyphicon-plus"></span> Crear categoria</h1>
<p class="lead">Completa el formulario para agregar una categoría.</p>

<hr>

@include('partials.alerts.errors')
@include('partials.alerts.success-message')

{!! Form::open([
    'route' => 'categorias.store'
]) !!}

	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="{{ route('categorias.index') }}" class="btn btn-info">
				<span class="glyphicon glyphicon-chevron-left"></span>
				Atrás
			</a>

			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>
				Guardar Categoría
			</button>
		</div>

		<div class="panel-body">
			<div class="form-group">
			    {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label']) !!}
			    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('caracteristicas', 'Características:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('caracteristicas', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('icono', 'Ícono:', ['class' => 'control-label']) !!}
			    {!! Form::text('icono', null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="panel-footer">
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>
				Guardar Categoría
			</button>
			<!-- {!! Form::submit('Guardar Categoría', ['class' => 'btn btn-primary']) !!} -->
		</div>
	</div>

{!! Form::close() !!}

@stop