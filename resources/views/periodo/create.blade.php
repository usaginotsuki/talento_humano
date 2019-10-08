@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Crear Periodo</h2>
</div>
<div class="container">
    <form action="{{url('/periodo/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_NOMBRE">Nombre</label>
                    <input type="input" class="form-control" id="PER_NOMBRE" name="PER_NOMBRE" placeholder="Nombre del periodo" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_HORAS_ATENCION">Horas Atencion</label>
                    <input type="number" class="form-control" id="PER_HORAS_ATENCION" name="PER_HORAS_ATENCION" min="0" max="15" placeholder="# de Horas" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="display: flex;align-items: center;">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="PER_ESTADO" name="PER_ESTADO">
                    <label class="custom-control-label" for="PER_ESTADO">Estado</label>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_INICIO">Fecha de Inicio - Fecha de Finalización</label>
                    <input type="text" class="form-control" name="PER_FECHAS" required/>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('periodo')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection