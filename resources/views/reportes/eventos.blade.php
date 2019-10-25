@extends('app')
@section('content')
<div class="container">
    <h2>Evento ocacional </h2>
      @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="{{url('/evento/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
    

         <div class="form-group">
            <label for="PER_CODIGO">Periodo</label>


            <select class="form-control" id="PER_CODIGO" name="PER_CODIGO"  >
               @foreach ($periodos as $per)
                @if($per->PER_CODIGO==$valores['PER_CODIGO'])
                   <option value="{{$per->PER_CODIGO}}" selected="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                 @else
                 <option value="{{$per->PER_CODIGO}}"  >{{$per->PER_NOMBRE}}</option>
                 @endif
               
               @endforeach
            </select> 
        </div>
    

        <button type="submit" class="btn btn-primary mb-2">Actualizar Reporte</button>
       
    </form>


         <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">ORD</th>
                <th scope="col">FECHA</th>
                <th scope="col">SALA</th>
                <th scope="col">MATERIA</th>
                <th scope="col">HORAS</th>
                <th scope="col">NOTA</th>
            </tr>
        </thead>
         <tbody >
        @foreach ($eventoocacionales as $eve)
        <tr>
       
            <td scope="row">{{$eve ->CON_CODIGO}}</td>
            <td scope="row">{{$eve ->DIA}}</td>
            <td scope="row">{{$eve ->LAB_LABORATORIO}}</td>
            <td scope="row">{{$eve ->DOC_NOMBRES}}</td>
            <td scope="row">{{$eve ->MAT_MATERIA}}</td>
            <td scope="row">{{$eve ->HORAS}}</td>
            <td scope="row">{{$eve ->CON_NOTA}}</td>
        @endforeach
         </tbody>   
</table>
  <a href="{{url('evento/'.$valores['PER_CODIGO'].'/pdf')}}" class="btn btn-danger mb-2">DESCARGAR PDF</a>
</div>

@endsection