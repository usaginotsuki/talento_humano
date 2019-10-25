@extends('app')
@section('content')

<div class="jumbotron">
    <h2>Crear hora</h2>
</div>
<div class="container">
    <form action="{{url('/hora/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">

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

            <div class="col">
                    <div class="form-group">
                        <label for="HORA_NOMBRE">Hora</label>
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