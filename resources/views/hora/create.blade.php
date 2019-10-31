@extends('app')
@section('content')

<div class="container">
    <h2>Crear hora</h2>
    <form action="{{url('/hora/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="HORA_NOMBRE">Nombre</label>
                    <input type="input" class="form-control" id="HORA_NOMBRE" name="HORA_NOMBRE" placeholder="Hora" required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('hora')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection