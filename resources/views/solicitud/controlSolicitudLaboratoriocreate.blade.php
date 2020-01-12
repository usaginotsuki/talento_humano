@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Solicitud'))
<div class="container">
    <div >
        <h2 ><pre style="color: #ED7624">Materia:{{$materia->MAT_NOMBRE}}</pre></h2>
    </div>
    <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
    <form class="form" id="form" action="{{url('/solicitud/guardarSolicitud')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                    <input type="hidden" class="form-control" id="LAB_CODIGO" name="LAB_CODIGO">
                    <input type="input" onkeypress="return false" class="form-control" id="SOL_NOMBRELAB" name="SOL_NOMBRELAB" required>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="SOL_HORARIO_USO"class="col-sm-2 col-form-label">Horario de uso<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-6">
                    <input type="input" onkeypress="return false" class="form-control" id="SOL_HORARIO_USO" name="SOL_HORARIO_USO" required>
                </div>
            </div>
            <div class="form-group row">    
                <label for="SOL_TEMA_PRACTICA"class="col-sm-2 col-form-label">Tema de Práctica/Proyecto<span style="color:#FF0000";>*</span> </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="SOL_TEMA_PRACTICA" name="SOL_TEMA_PRACTICA" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="SOL_EQUIPO_EXTRA"class="col-sm-2 col-form-label">Equipo Extra</label>
            </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
           
                <label for="DETSOL_CANTIDAD"class="col-sm-2 col-form-label">Cantidad<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="number" class="form-control" id="DETSOL_CANTIDAD" name="DETSOL_CANTIDAD" required>
                </div>
                 </div>
            </div>
            <div class="col">
                <div class="form-group">
                <label for="DETSOL_DETALLE"class="col-sm-2 col-form-label">Detalle<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="DETSOL_DETALLE" name="DETSOL_DETALLE"  required>
                </div>
            </div>
            </div>
           <div class="col">
                <div class="form-group">
                <label for="DETSOL_OBSERVACION"class="col-sm-2 col-form-label">Observaciones<span style="color:#FF0000";>*</span> </label>
                <div class="col-sm-10">
                        <input type="input" class="form-control" id="DETSOL_OBSERVACION" name="DETSOL_OBSERVACION" required>
                </div>
            </div>
        </div>
      </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('solicitud/listarSolicitud/'.$materia->MAT_CODIGO)}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
          
</div>
@endsection
@section('js')
 <script type="text/javascript" src="{{ URL::asset('js/solicitud.js') }}"></script> 
@endsection
