@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Crear Campus</h2>
</div>
<div class="container">
    <form action="{{url('/campus/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="CAM_NOMBRE">Nombre</label>
            <input type="input" class="form-control" id="CAM_NOMBRE" name="CAM_NOMBRE" placeholder="Nombre del campus" required>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('campus')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection