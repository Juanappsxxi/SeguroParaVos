@extends('layouts.master')

@section('content')

<h1>Edita categoría: "{{ $categoria->nombre }}"</h1>
<p>Edita esta categoría o vuelve a la lista. <a href="{{ route('categorias.index') }}">Volver a Categorías</a></p>
<hr>

<a href="{{ route('categorias.index') }}" class="btn btn-info">Back to all Categorías</a>

<div class="pull-right">
    <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger">Delete Categoría</a>
</div>

<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($categoria, [
    'method' => 'PATCH',
    'route' => ['categorias.update', $categoria->id]
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

{!! Form::submit('Guardar Categoría', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<hr>

@stop