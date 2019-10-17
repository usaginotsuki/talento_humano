@extends('app')
@section('content')
@include ('shared.navbar')
<div class="container">
    <h2>Crear carrera</h2>
    <form action="{{url('/carrera/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAR_NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="CAR_NOMBRE" name="CAR_NOMBRE" placeholder="Nombre de la carrera" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="CAR_ABREVIATURA">Horas Atencion</label>
                    <input type="text" class="form-control" id="CAR_ABREVIATURA" name="CAR_ABREVIATURA" min="0" max="15" required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('carrera')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection