@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Solicitud'))

<div class="container">
    <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
    <form class="form" id="form" action="{{url('/solicitud/guardarSolicitud')}}" method="POST">
        
            <div class="form-group row">
                <label for="SOL_FECHA"class="col-sm-2 col-form-label">Fecha<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-3">
                 
                    <input type="date" class="form-control" id="SOL_FECHA" name="SOL_FECHA">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_TEMA"class="col-sm-2 col-form-label">Tema<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-6">
                    <input type="input" class="form-control" id="SOL_TEMA" name="SOL_TEMA" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_INTRODUCCION"class="col-sm-2 col-form-label">Introduccion<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_INTRODUCCION" name="SOL_INTRODUCCION"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_OBJETIVO"class="col-sm-2 col-form-label">Objetivos<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_OBJETIVO" name="SOL_OBJETIVO"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_EQUIPO_MATERIALES"class="col-sm-2 col-form-label">Equipos y Materiales<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_EQUIPO_MATERIALES" name="SOL_EQUIPO_MATERIALES"   required>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_TRABAJO_PREPARATORIO"class="col-sm-2 col-form-label">Instrucciones<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_TRABAJO_PREPARATORIO" name="SOL_TRABAJO_PREPARATORIO" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_ACTIVIDADES"class="col-sm-2 col-form-label">Actividades por desarrollar<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_ACTIVIDADES" name="SOL_ACTIVIDADES" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_RESULTADOS"class="col-sm-2 col-form-label">Resultados obtenidos<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_RESULTADOS" name="SOL_RESULTADOS"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_CONCLUSIONES"class="col-sm-2 col-form-label">Concluciones</label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_CONCLUSIONES" name="SOL_CONCLUSIONES">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_RECOMENDACIONES"class="col-sm-2 col-form-label">Recomendaciones</label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_RECOMENDACIONES" name="SOL_RECOMENDACIONES">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_REFERENCIAS_BIBLIOGRAFICAS"class="col-sm-2 col-form-label">Referencias Bibliograficas </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_REFERENCIAS_BIBLIOGRAFICAS" name="SOL_REFERENCIAS_BIBLIOGRAFICAS">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_COORDINADOR"class="col-sm-2 col-form-label">Coordinador Area<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_COORDINADOR" name="SOL_COORDINADOR"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_DURACION"class="col-sm-2 col-form-label">Duracion<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="number" class="form-control" id="SOL_DURACION" name="SOL_DURACION"  required>
                </div>
            </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('solicitud/crearSolicitud')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection