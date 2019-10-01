@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Actualizar Parametro</h2>
</div>
<div class="container">
    <form action="{{url('/parametro/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="PAR_CODIGO" value="{{ $parametro->PAR_CODIGO }}">
       

        <div class="form-group">
            <label for="PAR_TODOS">TODOS</label>
            <input type="input" class="form-control" id="PAR_TODOS" name="PAR_TODOS" value="{{ $parametro->PAR_TODOS }}">
        </div>

         <div class="form-group">
            <label for="EMP_CODIGO">empresa</label>


            <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO"  >
               @foreach ($empresas as $emp)
                 <option value="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>

               @endforeach
            </select> 
        </div>




       
        <div class="form-group">
            <label for="PAR_SINO">SINO</label>

            @if ($parametro->PAR_SINO =='0')
            <select class="form-control" id="PAR_SINO" name="PAR_SINO" value="1">
                 <option >SI</option>
                <option selected="NO">NO</option>
            </select>
            @elseif ($parametro->PAR_SINO =='1')
            <select class="form-control" id="PAR_SINO" name="PAR_SINO" >
                 <option selected="SI">SI</option>
                <option>NO</option>
            </select>
            @endif


        </div>

        <div class="form-group">
            <label for="PAR_DESTINO">DESTINO</label>
            <input type="input" class="form-control" id="PAR_DESTINO" name="PAR_DESTINO" value="{{ $parametro->PAR_DESTINO }}">
        </div>

        <div class="form-group">
            <label for="DOC_CODIGO">DOC_COD</label>
            <input type="input" class="form-control" id="DOC_CODIGO" name="DOC_CODIGO" value="{{ $parametro->DOC_CODIGO }}">
        </div>

        <div class="form-group">
            <label for="DOC_MIESPE">DOC_MIESPE</label>
            <input type="input" class="form-control" id="DOC_MIESPE" name="DOC_MIESPE" value="{{ $parametro->DOC_MIESPE }}">
        </div>

        <div class="form-group">
            <label for="DOC_CLAVE">DOC_CLAVE</label>
            <input type="input" class="form-control" id="DOC_CLAVE" name="DOC_CLAVE" value="{{ $parametro->DOC_CLAVE }}">
        </div>

        <div class="form-group">
            <label for="LAB_CODIGO">LAB_CODIGO</label>
            <input type="input" class="form-control" id="LAB_CODIGO" name="LAB_CODIGO" value="{{ $parametro->LAB_CODIGO }}">
        </div>

        <div class="form-group">
            <label for="CAR_CODIGO">CAR_CODIGO</label>
            <input type="input" class="form-control" id="CAR_CODIGO" name="CAR_CODIGO" value="{{ $parametro->CAR_CODIGO }}">
        </div>

        <div class="form-group">
            <label for="PER_CODIGO">PER_CODIGO</label>
            <input type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" value="{{ $parametro->PER_CODIGO }}">
        </div>

        <div class="form-group">
            <label for="PAR_OBSERVACION">PAR_OBSERVACION</label>
            <input type="input" class="form-control" id="PAR_OBSERVACION" name="PAR_OBSERVACION" value="{{ $parametro->PAR_OBSERVACION }}">
        </div>

        <div class="form-group">
            <label for="CON_CODIGO">CON_CODIGO</label>
            <input type="input" class="form-control" id="CON_CODIGO" name="CON_CODIGO" value="{{ $parametro->CON_CODIGO }}">
        </div>

        <div class="form-group">
            <label for="MAT_CODIGO">MAT_CODIGO</label>
            <input type="input" class="form-control" id="MAT_CODIGO" name="MAT_CODIGO" value="{{ $parametro->MAT_CODIGO }}">
        </div>

















      
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PAR_FECHA_INI">Fecha Inicio</label>
                    <input type="date" class="form-control" id="PAR_FECHA_INI" name="PAR_FECHA_INI" value="{{ $parametro->PAR_FECHA_INI }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PAR_FECHA_FIN">Fecha Fin</label>
                    <input type="date" class="form-control" id="PAR_FECHA_FIN" name="PAR_FECHA_FIN" value="{{ $parametro->PAR_FECHA_FIN }}">
                </div>
            </div>
        </div>


        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('parametro')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection