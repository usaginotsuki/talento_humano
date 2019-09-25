@extends('layouts.principal')

@section('periodo')

<div class="container">
    <h2>Crear Periodo</h2>
    <form action="{{url('/periodo/guardar')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="PER_NOMBRE">Nombre</label>
            <input type="input" class="form-control" id="PER_NOMBRE" name="PER_NOMBRE" placeholder="Nombre del periodo" required>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_ESTADO">Estado</label>
                    <select class="form-control" id="PER_ESTADO" name="PER_ESTADO" required>
                    <option>0</option>
                    <option>1</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_HORAS_ATENCION">Horas Atencion</label>
                    <input type="number" class="form-control" id="PER_HORAS_ATENCION" name="PER_HORAS_ATENCION" min="0" max="15" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_INICIO">Fecha Inicio</label>
                    <input type="date" class="form-control" id="PER_FECHA_INICIO" name="PER_FECHA_INICIO" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PER_FECHA_FIN">Fecha Fin</label>
                    <input type="date" class="form-control" id="PER_FECHA_FIN" name="PER_FECHA_FIN" required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('periodo')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>

@stop