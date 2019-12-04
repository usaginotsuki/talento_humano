@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Solicitud'))
<meta name="csrf_token" content="{ csrf_token() }" />
<div class="container">
    <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
    <form class="form" id="form" action="{{url('/solicitud/guardarSolicitud')}}" method="POST">
        <div class="form-group row">
                <label for="SOL_FECHA"class="col-sm-2 col-form-label">Fecha de Solicitud<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-3">
                    <input type="input" class="form-control" id="SOL_FECHA" name="SOL_FECHA" readonly value="{{$fecha}} ">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_FECHA_USO"class="col-sm-2 col-form-label">Fecha de uso<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-3">
                 
                    <input type="date" class="form-control" id="SOL_FECHA_USO" name="SOL_FECHA_USO">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_NOMBRELAB"class="col-sm-2 col-form-label">Nombre del Laboratorio<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-6">
                    <input type="input" class="form-control" id="SOL_NOMBRELAB" name="SOL_NOMBRELAB" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_CODIGOLAN"class="col-sm-2 col-form-label">Codigo del Laboratorio<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-6">
                    <input type="input" class="form-control" id="SOL_NOMBRELAB" name="SOL_NOMBRELAB" required>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="SOL_HORARIO_USO"class="col-sm-2 col-form-label">Horario de uso<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="SOL_HORARIO_USO" name="SOL_HORARIO_USO" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_AREA_OCUPACION"class="col-sm-2 col-form-label">Area de ocupación<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_AREA_OCUPACION" name="SOL_AREA_OCUPACION"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_NOMBRE_USU"class="col-sm-2 col-form-label">Nombre de usuario<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_NOMBRE_USU" name="SOL_NOMBRE_USU"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_NRC"class="col-sm-2 col-form-label">NRC<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_NRC" name="SOL_NRC"   required>
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_TIPO_USUARIO"class="col-sm-2 col-form-label">Tipo de usuario<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_TIPO_USUARIO" name="SOL_TIPO_USUARIO" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_ASIGNATURA"class="col-sm-2 col-form-label">Asignatura<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_ASIGNATURA" name="SOL_ASIGNATURA" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_NIVEL"class="col-sm-2 col-form-label">Nivel<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_NIVEL" name="SOL_NIVEL"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_PRACTICA"class="col-sm-2 col-form-label">Practica N° </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_PRACTICA" name="SOL_PRACTICA">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_NUMERO_USUARIOS"class="col-sm-2 col-form-label">N° Usuarios </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_NUMERO_USUARIOS" name="SOL_NUMERO_USUARIOS">
                </div>
            </div>
            <div class="form-group row">    
                <label for="SOL_TEMA_PRACTICA_PROYECTO"class="col-sm-2 col-form-label">Tema de Práctica/Proyecto </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_TEMA_PRACTICA_PROYECTO" name="SOL_TEMA_PRACTICA_PROYECTO">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_EQUIPO_EXTRA"class="col-sm-2 col-form-label">N° Equipo extra </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_EQUIPO_EXTRA" name="SOL_EQUIPO_EXTRA">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_OBSERVACIONES"class="col-sm-2 col-form-label">Observaciones </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_OBSERVACIONES" name="SOL_OBSERVACIONES">
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_COORDINADOR"class="col-sm-2 col-form-label">Coordinador Area<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_COORDINADOR" name="SOL_COORDINADOR"  required>
                </div>
            </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('solicitud/crearSolicitud')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection
@section('js')
 <script type="text/javascript" src="{{ URL::asset('js/solicitud.js') }}"></script> 
@endsection
