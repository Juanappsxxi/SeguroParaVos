@extends('layouts.master')

@section('content')

<h1>Seguro deseas eliminar la categoría "{{ $categoria->nombre }}?"</h1>
<p>Esta acción eliminará por completo la categoría, estás seguro?</a></p>
<hr>

<div class="row">
    <div class="col-md-6">
        <a href="{{ route('categorias.index') }}" class="btn btn-info">Back to all Categorías</a>
        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Edit Categoría</a>
    </div>
    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['categorias.destroy', $categoria->id]
        ]) !!}
            {!! Form::submit('Delete this Categoría?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop