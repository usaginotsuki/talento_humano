@extends('app')
@section('content')

<div class="container">
    <h2>Actualizar laboratorio</h2>
    <form action="{{url('/laboratorio/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="LAB_CODIGO" value="{{ $laboratorio->LAB_CODIGO }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="LAB_NOMBRE">Nombre</label>
                    <input type="input" class="form-control" id="LAB_NOMBRE" name="LAB_NOMBRE" placeholder="Nombre del laboratorio" value="{{ $laboratorio->LAB_NOMBRE }}" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="LAB_CAPACIDAD">Capacidad</label>
                    <input type="input" class="form-control" id="LAB_CAPACIDAD" name="LAB_CAPACIDAD" value="{{ $laboratorio->LAB_CAPACIDAD }}" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="CAM_CODIGO">Campus</label>
                    <select type="input" class="form-control" id="CAM_CODIGO" name="CAM_CODIGO"  >
                        @foreach ($campus as $cam)
                            @if($cam->CAM_CODIGO==$laboratorio->CAM_CODIGO)
                                <option value="{{$cam->CAM_CODIGO}}" selected="{{$cam->CAM_CODIGO}}">{{$cam->CAM_NOMBRE}}</option>
                            @else
                                <option value="{{$cam->CAM_CODIGO}}"  >{{$cam->CAM_NOMBRE}}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="EMP_CODIGO">Empresa</label>
                    <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO"  >
                        @foreach ($empresas as $emp)
                            @if($emp->EMP_CODIGO==$laboratorio->EMP_CODIGO)
                                <option value="{{$emp->EMP_CODIGO}}" selected="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                            @else
                                <option value="{{$emp->EMP_CODIGO}}"  >{{$emp->EMP_NOMBRE}}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>

        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('laboratorio')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection