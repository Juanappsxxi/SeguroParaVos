@extends('layouts.master')

@section('content')

<h1><span class="glyphicon glyphicon-pencil"></span> Editando categoría "{{ $categoria->nombre }}"</h1>
<p class="lead">Edita esta categoría o vuelve a la lista. <a href="{{ route('categorias.index') }}">Volver a la lista.</a></p>

<hr>

@include('partials.alerts.errors')
@include('partials.alerts.success-message')

{!! Form::model($categoria, [
    'method' => 'PATCH',
    'route' => ['categorias.update', $categoria->id]
]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('categorias.index') }}" class="btn btn-info">
                <span class="glyphicon glyphicon-chevron-left"></span>
                Atrás
            </a>

            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span>
                Guardar cambios
            </button>
            
            <div class="pull-right">
                <a href="{{ route('categorias.delete', $categoria->id) }}" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span>
                    Delete Categoría
                </a>
            </div>
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
                Guardar cambios
            </button>
            <!-- {!! Form::submit('Guardar Categoría', ['class' => 'btn btn-primary']) !!} -->
        </div>
    </div>

{!! Form::close() !!}

@stop