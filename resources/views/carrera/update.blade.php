@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Carrera'))

<div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
    <form action="{{url('/carrera/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="CAR_CODIGO" value="{{ $carrera->CAR_CODIGO }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAR_NOMBRE">Nombre</label>
                    <input type="text" class="form-control" id="CAR_NOMBRE" name="CAR_NOMBRE" placeholder="Nombre de la carrera" value="{{ $carrera->CAR_NOMBRE }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="CAR_ABREVIATURA">Horas Atencion</label>
                    <input type="text" class="form-control" id="CAR_ABREVIATURA" name="CAR_ABREVIATURA" value="{{ $carrera->CAR_ABREVIATURA }}" required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('carrera')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection