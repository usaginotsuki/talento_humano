@extends('app')

@section('content')
@include('shared.title', array('titulo' => 'Actualizar Rol'))

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="/role/update">
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
							<label class="col-md-5 control-label">menu estadisticas</label>
							<div class="input-group-text">
							<input type="checkbox"  aria-label="Checkbox for following text input" name="1" 
							@if($role->hasAccion(1))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu estadisticas MateriasCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="2"
							@if($role->hasAccion(2))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoDeDocentes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="3"
							@if($role->hasAccion(3))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoEfectivoSalas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="4"
							@if($role->hasAccion(4))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPorCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="5"
							@if($role->hasAccion(5))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPorSala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="6"
							@if($role->hasAccion(6))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPorSalaCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="7"
							@if($role->hasAccion(7))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPor_CarreraSemestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="8"
							@if($role->hasAccion(8))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPor_Semestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="9"
							@if($role->hasAccion(9))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="14"
							@if($role->hasAccion(14))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_AgregarHorasControl</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="15"
							@if($role->hasAccion(15))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="16"
							@if($role->hasAccion(16))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_ControlLaboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="17"
							@if($role->hasAccion(17))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="18"
							@if($role->hasAccion(18))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="41"
							@if($role->hasAccion(41))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_GenerarControl</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="19"
							@if($role->hasAccion(19))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Guias</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="20"
							@if($role->hasAccion(20))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Horario</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="21"
							@if($role->hasAccion(21))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Laboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="22"
							@if($role->hasAccion(22))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Materia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="23"
							@if($role->hasAccion(23))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Periodo</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="24"
							@if($role->hasAccion(24))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_RegistrarGuiaAnterior</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="25"
							@if($role->hasAccion(25))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reportes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="26"
							@if($role->hasAccion(26))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_EventosOcasionales</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="27"
							@if($role->hasAccion(27))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_GuiasCarreras</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="28"
							@if($role->hasAccion(28))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_GuiasEntregadas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="29"
							@if($role->hasAccion(29))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_GuiasPendientes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="30"
							@if($role->hasAccion(30))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_HojaDeControl</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="31"
							@if($role->hasAccion(31))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_HorarioDocente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="32"
							@if($role->hasAccion(32))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_Horarios</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="33"
							@if($role->hasAccion(33))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_InformeSuficiencia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="34"
							@if($role->hasAccion(34))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_MateriasCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="35"
							@if($role->hasAccion(35))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_NotasPorSala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="36"
							@if($role->hasAccion(36))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_ObservacionesPorSala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="37"
							@if($role->hasAccion(37))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_UsoPorCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="38"
							@if($role->hasAccion(38))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_UsoPorDocente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="39"
							@if($role->hasAccion(39))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_UsoPorDocenteResumen</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="40"
							@if($role->hasAccion(40))
							checked
							@endif
							>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Guardar
								</button>
								<a href="{{url('role')}}" class="btn btn-danger mb-2">Cancelar</a>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
