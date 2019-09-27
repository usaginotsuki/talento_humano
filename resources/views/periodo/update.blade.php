@extends('app')
@section('content')
@include ('shared.navbar')

<div class="container">
    <h2>Actualizar Periodo</h2>
    <form action="{{url('/periodo/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="PER_CODIGO" value="{{ $periodo->PER_CODIGO }}">
        <div class="form-group">
            <label for="PER_NOMBRE">Nombre</label>
            <input type="input" class="form-control" id="PER_NOMBRE" name="PER_NOMBRE" value="{{ $periodo->PER_NOMBRE }}">
        </div>
        <div class="row">
            <div class="col" style="display: flex;align-items: center;">
                <div class="custom-control custom-switch">
                    @if ($periodo->PER_ESTADO === 0)
                    <input type="checkbox" class="custom-control-input" id="PER_ESTADO" name="PER_ESTADO">
                    @elseif ($periodo->PER_ESTADO === 1)
                    <input type="checkbox" class="custom-control-input" id="PER_ESTADO" name="PER_ESTADO" checked>
                    @endif
                    <label class="custom-control-label" for="PER_ESTADO">Estado</label>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_HORAS_ATENCION">Horas Atencion</label>
                    <input type="number" class="form-control" id="PER_HORAS_ATENCION" name="PER_HORAS_ATENCION" min="0" max="15" value="{{ $periodo->PER_HORAS_ATENCION }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_INICIO">Fecha Inicio</label>
                    <input type="date" class="form-control" id="PER_FECHA_INICIO" name="PER_FECHA_INICIO" value="{{ $periodo->PER_FECHA_INICIO }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_FIN">Fecha Fin</label>
                    <input type="date" class="form-control" id="PER_FECHA_FIN" name="PER_FECHA_FIN" value="{{ $periodo->PER_FECHA_FIN }}">
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="/periodo" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection