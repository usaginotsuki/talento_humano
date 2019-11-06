@extends('app')
@section('content')

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
                    <label for="EMP_CODIGO">Empresa</label>
                    <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO"  >
                        @foreach ($empresas as $emp)
                            @if($emp->EMP_CODIGO==$hora->EMP_CODIGO)
                                <option value="{{$emp->EMP_CODIGO}}" selected="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                            @else
                                <option value="{{$emp->EMP_CODIGO}}"  >{{$emp->EMP_NOMBRE}}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>

            <div class="col">
                    <div class="form-group">
                        <label for="HORA_INICIO">Hora Inicio</label>
                        <input type="time" class="form-control" id="HORA_INICIO" name="HORA_INICIO" placeholder="Hora" value="{{ $HORA_INICIO }}" required>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="HORA_FIN">Hora Fin</label>
                        <input type="time" class="form-control" id="HORA_FIN" name="HORA_FIN" placeholder="Hora" value="{{ $HORA_FIN }}" required>
                    </div>
            </div>

        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('hora')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection