@extends('layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/bootstrap-iconpicker.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/iconset/iconset-fontawesome-4.3.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-iconpicker.min.js') }}"></script>
@endpush

@section('content')

<h1><span class="glyphicon glyphicon-plus"></span> Crear seguro</h1>
<p class="lead">Completa el formulario para agregar un seguro.</p>

<hr>

@include('partials.alerts.errors')
@include('partials.alerts.success-message')

{!! Form::open([
    'route' => 'seguros.store'
]) !!}

	<div class="panel panel-default">
		<div class="panel-heading">
			<a href="{{ route('seguros.index') }}" class="btn btn-info">
				<span class="glyphicon glyphicon-chevron-left"></span>
				Atrás
			</a>

			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>
				Guardar
			</button>
		</div>

		<div class="panel-body">
			<div class="form-group">
			    {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label']) !!}
			    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
			</div>

			<div class="row">
				<div class="col-md-3 form-group">
					{!! FORM::label('categoria', 'Categoria:', ['class' => 'control-label']) !!}
					<select id="categoria"
					 name="categoria"
					 data-live-search="true"
					 class="selectpicker">
						<option value="null">Selecciona categoría...</option>
						<optgroup label="Categorías">
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="col-md-3 form-group">
					{!! FORM::label('pertenencia', 'Dependencia:', ['class' => 'control-label']) !!}
					<select name="pertenencia"
					 id="pertenencia"
					 data-live-search="true"
					 class="selectpicker">
					 	<option value="null">Selecciona seguro</option>
					 	@foreach ($categorias as $categoria)
					 	<optgroup label="{{ $categoria->nombre }}">
					 		@foreach ($seguros as $seguro)
					 			@if ($categoria->id == $seguro->categoria)
					 			<option value="{{ $seguro->id }}">{{ $seguro->nombre }}</option>
					 			@endif
					 		@endforeach
					 	</optgroup>
					 	@endforeach
					 </select>
				</div>
				<div class="col-md-3 form-group">
					{!! FORM::label('valor', 'Valor:', ['class' => 'control-label']) !!}
					<div class="input-group">
						<span class="input-group-addon currency">$</span>
						{!! FORM::number('valor', 0, ['class' => 'form-control']) !!}
						<span class="input-group-addon percent">%</span>
					</div>
				</div>
				<div class="col-md-3 form-group">
					<label>Valor en %: </label>
	            	<input type="checkbox" class="bool" id="porcentaje" name="porcentaje">
	                <label for="porcentaje">&nbsp;</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 form-group">
					{!! FORM::label('pago', 'Recurrencia de pago:', ['class' => 'control-label']) !!}
					<select name="pago"
					 id="pago"
					 class="selectpicker">
					 	<option value="null">Selecciona recurrencia</option>
					 	<option value="mensual">Mensual</option>
					 	<option value="anual">Anual</option>
					 </select>
				</div>

				<div class="col-md-3 form-group">
					{!! FORM::label('unidad_cobertura', 'Cobertura:', ['class' => 'control-label']) !!}
					<div class="row">
						<div class="col-xs-6">
							<input type="number" value="0" class="form-control" name="valor_cobertura" id="valor_cobertura">
						</div>
						<br><br>
						<div class="col-xs-6">
							<strong class="unidad-cobertura"></strong>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<select name="unidad_cobertura"
							 id="unidad_cobertura"
							 class="selectpicker">
							 	<option value="null">Selecciona cobertura</option>
							 	<option value="mensual">Meses</option>
							 	<option value="anual">Años</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-3 form-group">
					{!! FORM::label('aseguradora', 'Aseguradora:', ['class' => 'control-label']) !!}
					<select name="aseguradora"
					 id="aseguradora"
					 class="selectpicker">
					 	<option value="null">Selecciona aseguradora</option>
					 	<option value="mapfre">Mapfre</option>
					 	<option value="uruguay-asistencia">Uruguay Asistencia</option>
					</select>
				</div>
			</div>

			<div class="form-group">
			    <label>Estado: </label>
            	<input type="checkbox" id="estado" name="estado">
                <label for="estado">&nbsp;</label>
			</div>
		</div>

		<div class="panel-footer">
			<button type="submit" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>
				Guardar
			</button>
		</div>
	</div>

{!! Form::close() !!}

@stop