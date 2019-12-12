@extends('app')

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

					<form class="form-horizontal" role="form" method="POST" action="/role/postCreate">
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
							<label class="col-md-5 control-label">menu estadisticas</label>
							<div class="input-group-text">
							<input type="checkbox"  aria-label="Checkbox for following text input" name="1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu estadisticas MateriasCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="2">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoDeDocentes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="3">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoEfectivoSalas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="4">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPorCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="5">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPorSala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="6">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPorSalaCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="7">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPor_CarreraSemestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="8">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_estadisticas_UsoPor_Semestre</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="9">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="14">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_AgregarHorasControl</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="15">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Carrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="16">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_ControlLaboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="17">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Docente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="18">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Control</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="41">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_GenerarControl</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="19">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Guias</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="20">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Horario</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="21">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Laboratorio</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="22">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Materia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="23">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_Periodo</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="24">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_proceso_RegistrarGuiaAnterior</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="25">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reportes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="26">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_EventosOcasionales</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="27">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_GuiasCarreras</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="28">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_GuiasEntregadas</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="29">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_GuiasPendientes</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="30">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_HojaDeControl</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="31">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_HorarioDocente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="32">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_Horarios</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="33">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_InformeSuficiencia</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="34">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_MateriasCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="35">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_NotasPorSala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="36">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_ObservacionesPorSala</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="37">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_UsoPorCarrera</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="38">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_UsoPorDocente</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="39">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5 control-label">menu_reporte_UsoPorDocenteResumen</label>
							<div class="input-group-text">
							<input type="checkbox" aria-label="Checkbox for following text input" name="40">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
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
