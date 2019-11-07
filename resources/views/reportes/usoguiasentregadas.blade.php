@extends('app')
@section('content')

<style>    
    th {
      background-color: #4E4D4D;
      color: white;
    }
</style>
  
<div class="jumbotron">
    <h2>Uso y Guias Entregadas por Docente</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col">
    <form action="{{url('/reporte/guia/docente')}}" method="POST">
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


       
      
         <div class="form-group">
            <label for="DOC_CODIGO">Docente</label>


            <select class="form-control" id="DOC_CODIGO" name="DOC_CODIGO"  >
              @foreach ($docentes as $doc)
               @if($doc->DOC_CODIGO==$valores['DOC_CODIGO'])
                  <option value="{{$doc->DOC_CODIGO}}" selected="{{$doc->DOC_CODIGO}}">{{$doc->DOC_APELLIDOS}} {{$doc->DOC_NOMBRES}}</option>
                @else
                <option value="{{$doc->DOC_CODIGO}}"  >{{$doc->DOC_APELLIDOS}} {{$doc->DOC_NOMBRES}}</option>
                @endif
              
              @endforeach
           </select> 
        </div>


        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar Reporte</button>
       
    </form>
</div>
 </div>

<br>

@if($controles != null )

     <table id="guiaDocenteTable" class="table table-hover table-bordered table-sm" style="text-align:center;">
        @foreach ($controles as $control)
            <thead>
                <tr class="d-flex">
                    <th class="col" >{{$control -> materia->MAT_NOMBRE}} - {{$control -> materia->MAT_NRC}}</th>
                </tr>
                <tr class="d-flex">
                    <th class="col" >FECHA</th>
                    <th class="col" >TIPO</th>
                    <th class="col">HORAS ASIGNADAS</th>
                    <th class="col">HORA ENTRADA</th>
                    <th class="col">HORA SALIDA</th>
                    <th class="col">GUIA ENTREGADA</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($controles as $control)
                  <tr class="d-flex">
                      <td class="col opts">{{$control ->CON_DIA}}</td>
                      <td class="col opts">Horario</td>
                      <td class="col opts">{{$control ->CON_NUMERO_HORAS}}</td>
                      <td class="col opts">{{$control ->CON_HORA_ENTRADA}}</td>
                      <td class="col opts">{{$control ->CON_HORA_SALIDA}}</td>
                      <td class="col opts">SI</td>
                  </tr>
                @endforeach
            </tbody>  
        @endforeach 
</table>
   <button onclick="#" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar a PDF</button>
@endif


</div>
@endsection
