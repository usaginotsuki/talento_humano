@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Actualizar hora</h2>
</div>
<div class="container">
    <form action="{{url('/hora/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="HORA_CODIGO" value="{{ $hora->HORA_CODIGO }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="HORA_NOMBRE">Nombre</label>
                    <input type="input" class="form-control" id="HORA_NOMBRE" name="HORA_NOMBRE" placeholder="Hora" value="{{ $hora->HORA_NOMBRE }}" required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('hora')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection