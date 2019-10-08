@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Crear Parametro</h2>
</div>
<div class="container">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="{{url('/parametro/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="EMP_CODIGO">Empresa</label>


            <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO" placeholder="Empresa" >
               @foreach ($empresas as $emp)
                 <option value="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>

               @endforeach
            </select> 
        </div>

        <div class="form-group">
            <label for="PAR_TODOS">Todos</label>
            <input type="input" class="form-control" id="PAR_TODOS" name="PAR_TODOS" placeholder="Todos" >
        </div>



        





        <div class="form-group">
            <label for="PAR_SINO">Si/No</label>
            <!--<input type="input" class="form-control" id="PAR_SINO" name="PAR_SINO" placeholder="SINO" required>-->
            <select name="PAR_SINO" id="PAR_SINO" class="form-control">
                <option>SI</option>
                <option>NO</option>
            </select>
        </div>

      <div class="form-group">
            <label for="PAR_DESTINO">Destino</label>
            <input type="input" class="form-control" id="PAR_DESTINO" name="PAR_DESTINO" placeholder="DESTINO" >
        </div>

        <div class="form-group">
            <label for="DOC_CODIGO">Docente</label>
            <input type="input" class="form-control" id="DOC_CODIGO" name="DOC_CODIGO" placeholder="codigo del documento" >
        </div>

        <div class="form-group">
            <label for="DOC_MIESPE">Usuario</label>
            <input type="input" class="form-control" id="DOC_MIESPE" name="DOC_MIESPE" placeholder="codigo del Miespe" >
        </div>
      
      <div class="form-group">
            <label for="DOC_CLAVE">clave</label>
            <input type="input" class="form-control" id="DOC_CLAVE" name="DOC_CLAVE" placeholder="codigo del clave" >
        </div>

        <div class="form-group">
            <label for="LAB_CODIGO">Laboratorio</label>
            <input type="input" class="form-control" id="LAB_CODIGO" name="LAB_CODIGO" placeholder="codigo del Laboratorio" >
        </div>

        <div class="form-group">
            <label for="CAR_CODIGO">Carrera</label>
            <input type="input" class="form-control" id="CAR_CODIGO" name="CAR_CODIGO" placeholder="codigo del car" >
        </div>

        <div class="form-group">
            <label for="PER_CODIGO">Periodo</label>
            <input type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" placeholder="codigo del Periodo" >
        </div>
      <div class="form-group">
            <label for="PAR_OBSERVACION">Observaciones</label>
            <input type="input" class="form-control" id="PAR_OBSERVACION" name="PAR_OBSERVACION" placeholder="Observacion Parametro" >
        </div>

        <div class="form-group">
            <label for="CON_CODIGO">Control</label>
            <input type="input" class="form-control" id="CON_CODIGO" name="CON_CODIGO" placeholder="Con Codigo" >
        </div>
      
      <div class="form-group">
            <label for="MAT_CODIGO">Materia</label>
            <input type="input" class="form-control" id="MAT_CODIGO" name="MAT_CODIGO" placeholder="Codigo de Materia" >
        </div>
      


        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PAR_FECHA_INI">Fecha Inicio</label>
                    <input type="date" class="form-control" id="PAR_FECHA_INI" name="PAR_FECHA_INI" >
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PAR_FECHA_FIN">Fecha Final</label>
                    <input type="date" class="form-control" id="PAR_FECHA_FIN" name="PAR_FECHA_FIN" >
                </div>
            </div>
        </div>



        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('parametro')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection