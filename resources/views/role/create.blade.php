@extends('app')
@section('css')
  <link href="{{ URL::asset('css/button.css') }}" rel='stylesheet' type='text/css' />
@endsection
@section('content')
@include('shared.title', array('titulo' => 'Crear Rol'))

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{url('/role/postCreate')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Descripcion</label>
							<div class="col-md-6">
								<input type="description" class="form-control" name="description" value="{{ old('description') }}">
							</div>
						</div>

						 <div class="col">
			                <div class="form-group">
			                    <label for="name">ACCIONES :</label>
			                </div>
			            </div>

						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas</label>
							<div class="input-group-text">
							<input type="checkbox"  aria-label="Checkbox for following text input" name="1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Materias Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="2">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas uso de Docentes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="3">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas uso efectivo salas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="4">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="5">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Sala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="6">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Sala Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="7">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Carrera Semestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="8">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Us Por Semestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="9">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="14">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Agregar Horas Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="15">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="16">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso ControlLaboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="17">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="18">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="41">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Generar Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="19">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Guias</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="20">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Horario</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="21">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Laboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="22">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Materia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="23">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Periodo</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="24">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Registrar Guia Anterior</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="25">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reportes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="26">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Eventos Ocasionales</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="27">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Guias Carreras</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="28">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Guias Entregadas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="29">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Guias Pendientes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="30">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Hoja de Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="31">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Horario Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="32">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Horarios</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="33">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Informe Suficiencia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="34">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Materias Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="35">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Notas Por Sala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="36">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Observaciones por Sala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="37">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Uso Por Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="38">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Uso Por Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="39">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Uso Por Docente Resumen</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="40">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu Proceso Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="41">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu Administrador</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="42">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu Administrador roles</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="43">
							</div>
						</div>
						<div class="form-group row">	
							<label class="col-md-5 control-label">Menu Administrador usuarios</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="44">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="button1">
									Register
								</button>
								<a href="{{url('role')}}" class="button2">Cancelar</a>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
