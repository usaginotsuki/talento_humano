@extends('app')
@section('content')   
<div class="jumbotron">
    <h2>Lista de Control</h2>
</div>
<div class="container">
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('success') }}</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('error') }}</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  @endif
<form class="form" id="form" action="/control/index" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group row">
   <label for="inputFecha" class="col-sm-1 col-form-label">FECHA: </label>
    <div class="col-sm-4">
      @if (!session('fecha'))
      <input type="text" class="form-control" name="CON_DIA" id="CON_DIA" value="{{$controles['fecha']}}" />
      @else
      <input type="text" class="form-control" name="CON_DIA" id="CON_DIA" value="{{session('fecha')}}" />
      @endif
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary mb-2">BUSCAR</button>
    </div>
  </div>

  
</form>
<form class="form" id="form" action="{{ url('control/generar') }}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group row">
  <input type="hidden" class="form-control" name="CON_DIA" id="CON_DIA" value="{{$controles['fecha']}}" />
  <button type="submit" class="btn btn-success mb-2">GENERAR CONTROL</button>   
  
  <div class="custom-control custom-switch ">
    <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" >
    <label class="custom-control-label" for="MAT_OCACIONAL">Ocacional</label>
   </div>
</div>
  
  

</form>
<br>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
              <th scope="row">MATERIA</th>
               <th scope="row">REGISTRO</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($controles as $con)
        @if($con !=  $controles["fecha"])
        <tr>
          <td scope="row">{{$con -> LAB_NOMBRE}}</td>
          <td scope="row">{{$con -> REGISTROS}}</td>    
        </tr>
        
        @endif
        @endforeach   
      
        </tbody>
    </table>

</div>
@endsection
