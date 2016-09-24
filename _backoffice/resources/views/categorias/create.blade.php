@extends('layouts.master')

@section('content')

<h1>Crear categoria</h1>
<p>Completa el formulario para agregar una categoría.</p>
<hr>

<a href="{{ route('categorias.index') }}" class="btn btn-info">Back to all Categorías</a>

<hr>

@include('partials.alerts.errors')
@include('partials.alerts.success-message')

{!! Form::open([
    'route' => 'categorias.store'
]) !!}

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

{!! Form::submit('Crear Categoría', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<hr>

@stop