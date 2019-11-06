@extends('app')
@section('content')
<div class="container-fluid">
    <h2>Crear Período</h2>
    <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
    <form action="{{url('/periodo/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_NOMBRE">Nombre<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="PER_NOMBRE" name="PER_NOMBRE" placeholder="Nombre del periodo" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_HORAS_ATENCION">Horas Atencion<span style="color:#FF0000";>*</span></label>
                    <input type="number" class="form-control" id="PER_HORAS_ATENCION" name="PER_HORAS_ATENCION" min="0" max="15" placeholder="# de Horas" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_INICIO">Fecha de Inicio<span style="color:#FF0000";>*</span></label>
                    <input type="date" class="form-control" name="PER_FECHA_INICIO" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_FIN">Fecha de Finalización<span style="color:#FF0000";>*</span></label>
                    <input type="date" class="form-control" name="PER_FECHA_FIN" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="display: flex;align-items: center;">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="PER_ESTADO" name="PER_ESTADO">
                    <label class="custom-control-label" for="PER_ESTADO">Estado<span style="color:#FF0000";>*</span></label>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('periodo')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection