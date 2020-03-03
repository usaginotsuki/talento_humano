@extends('app')
@section('css')
  <link href="{{ URL::asset('css/button.css') }}" rel='stylesheet' type='text/css' />
@endsection
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Rol'))

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{url('/role/update')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" id="id" value="{{ $role->id }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $role->name }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Descripcion</label>
							<div class="col-md-6">
								<input type="description" class="form-control" name="description" value="{{ $role->description }}">
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
							<input type="checkbox"  aria-label="Checkbox for following text input" name="1" 
							@if($role->hasAccion(1))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas MateriasCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="2"
							@if($role->hasAccion(2))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso DeDocentes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="3"
							@if($role->hasAccion(3))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas uso Efectivo Salas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="4"
							@if($role->hasAccion(4))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="5"
							@if($role->hasAccion(5))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Sala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="6"
							@if($role->hasAccion(6))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Sala Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="7"
							@if($role->hasAccion(7))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Carrera Semestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="8"
							@if($role->hasAccion(8))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu estadisticas Uso Por Semestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="9"
							@if($role->hasAccion(9))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="14"
							@if($role->hasAccion(14))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Agregar Horas Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="15"
							@if($role->hasAccion(15))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="16"
							@if($role->hasAccion(16))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Control Laboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="17"
							@if($role->hasAccion(17))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="18"
							@if($role->hasAccion(18))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="41"
							@if($role->hasAccion(41))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Generar Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="19"
							@if($role->hasAccion(19))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Guias</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="20"
							@if($role->hasAccion(20))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Horario</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="21"
							@if($role->hasAccion(21))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Laboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="22"
							@if($role->hasAccion(22))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Materia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="23"
							@if($role->hasAccion(23))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Periodo</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="24"
							@if($role->hasAccion(24))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu proceso Registrar Guia Anterior</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="25"
							@if($role->hasAccion(25))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reportes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="26"
							@if($role->hasAccion(26))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Eventos Ocasionales</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="27"
							@if($role->hasAccion(27))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Guias Carreras</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="28"
							@if($role->hasAccion(28))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Guias Entregadas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="29"
							@if($role->hasAccion(29))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Guias Pendientes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="30"
							@if($role->hasAccion(30))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Hoja De Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="31"
							@if($role->hasAccion(31))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Horario Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="32"
							@if($role->hasAccion(32))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Horarios</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="33"
							@if($role->hasAccion(33))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Informe Suficiencia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="34"
							@if($role->hasAccion(34))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Materias Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="35"
							@if($role->hasAccion(35))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Notas Por Sala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="36"
							@if($role->hasAccion(36))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Observaciones Por Sala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="37"
							@if($role->hasAccion(37))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Uso Por Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="38"
							@if($role->hasAccion(38))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Uso Por Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="39"
							@if($role->hasAccion(39))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu reporte Uso Por Docente Resumen</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="40"
							@if($role->hasAccion(40))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu Administrador</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="42"
							@if($role->hasAccion(42))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu Administrador roles</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="43"
							@if($role->hasAccion(43))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">Menu Administrador usuarios</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="44"
							@if($role->hasAccion(44))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="button1">
									Guardar
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
