@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Crear laboratorio</h2>
</div>
<div class="container">
    <form action="{{url('/laboratorio/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="LAB_NOMBRE">Nombre</label>
                    <input type="input" class="form-control" id="LAB_NOMBRE" name="LAB_NOMBRE" placeholder="Nombre del laboratorio" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="LAB_CAPACIDAD">Capacidad</label>
                    <input type="number" class="form-control" id="LAB_CAPACIDAD" name="LAB_CAPACIDAD" min="0" max="30" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="CAM_CODIGO">Campus</label>
                    <select type="input" class="form-control" id="CAM_CODIGO" name="CAM_CODIGO" placeholder="Campus"  required>
                            @foreach ($campus as $cam)
                                    <option value="{{$cam->CAM_CODIGO}}">{{$cam->CAM_NOMBRE}}</option>
                            @endforeach
                     </select> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="EMP_CODIGO">Empresa</label>
                    <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO" placeholder="Empresa"  required>
                            @foreach ($empresas as $emp)
                                    <option value="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                            @endforeach
                     </select> 
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('laboratorio')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection