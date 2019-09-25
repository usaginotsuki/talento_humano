@extends('layouts.principal')

@section('periodo')

<div class="container">
    <h2>Elimina</h2>
    <form action="{{url('periodo/eliminar/'.$per->PER_CODIGO)}}" method="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="per_nombre">Nombre</label>
            <input type="input" class="form-control" id="per_nombre" name="per_nombre" placeholder="Nombre del periodo">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="per_estado">Estado</label>
                    <select class="form-control" id="per_estado" name="per_estado">
                    <option>0</option>
                    <option>1</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="per_horas_atencion">Horas Atencion</label>
                    <input type="number" class="form-control" id="per_horas_atencion" name="per_horas_atencion" min="1" max="15">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="per_fecha_inicio">Fecha Inicio</label>
                    <input type="date" class="form-control" id="per_fecha_inicio" name="per_fecha_inicio">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="per_fecha_fin">Fecha Fin</label>
                    <input type="date" class="form-control" id="per_fecha_fin" name="per_fecha_fin">
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Eliminar</button>
        <a href="/periodo" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>

@stop