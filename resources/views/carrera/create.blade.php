@extends('app')
@section('content')

<div class="jumbotron">
    <h2>Crear Carrera</h2>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
</div>
<div class="container-fluid">
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p>
    <form action="{{url('/carrera/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAR_NOMBRE">Nombre<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="CAR_NOMBRE" name="CAR_NOMBRE" placeholder="Nombre de la carrera" value='{{old("CAR_NOMBRE")}}' required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="CAR_ABREVIATURA">Carrera Abreviatura<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="CAR_ABREVIATURA" name="CAR_ABREVIATURA" placeholder="Nombre de la carrera en abreviatura" min="0" max="15" value='{{old("CAR_ABREVIATURA")}}' required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('carrera')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection