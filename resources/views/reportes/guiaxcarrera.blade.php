@extends('app')
@section('content')
  
<style>    
    th {
        background-color: #4E4D4D;
        color: white;
    }
</style>

<div class="jumbotron">
    <h2>Guias por Carreras</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col">
    <form action="{{url('/reporte/guia/carrera')}}" method="POST">
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

            <label for="CAR_CODIGO">Carrera</label>
            <select class="form-control" id="CAR_CODIGO" name="CAR_CODIGO"  >
               @foreach ($carreras as $car)
                @if($car->CAR_CODIGO==$valores['CAR_CODIGO'])
                   <option value="{{$car->CAR_CODIGO}}" selected="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                 @else
                 <option value="{{$car->CAR_CODIGO}}"  >{{$car->CAR_NOMBRE}}</option>
                 @endif
               @endforeach
            </select> 

            <label for="FECHA_INICIAL">Fecha Inicial</label>
            <input type="date" class="form-control" name="FECHA_INCIAL" required/>

            <label for="FECHA_FINAL">Fecha Final</label>
            <input type="date" class="form-control" name="FECHA_FINAL" required/>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar Reporte</button>
       
    </form>
</div>
 </div>

<br>

@if($guias != null )

    <table id="materiaCarreraTable" class="table table-hover table-bordered table-sm" style="text-align:center;">
            @foreach ($guias as $gui)
                <thead>
                    <tr class="d-flex">
                        <th class="col" >{{$gui -> materias->MAT_NOMBRE}} (NRC: {{$gui -> materias->MAT_NRC}}) - Ing. {{$gui -> docentes->DOC_APELLIDOS}} {{$gui -> docentes->DOC_NOMBRES}}</th>
                    </tr>
                    <tr class="d-flex">
                        <th class="col">GUIA</th>
                        <th class="col">FECHA</th>
                        <th class="col">TEMA</th>
                        <th class="col">DURACION</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($guias as $gui)
                    <tr class="d-flex">
                        <td class="col opts">{{$gui ->GUI_NUMERO}}</td>
                        <td class="col opts">{{$gui ->GUI_FECHA}}</td>
                        <td class="col opts">{{$gui ->GUI_TEMA}}</td>
                        <td class="col opts">{{$gui ->GUI_DURACION}}</td>
                    </tr>
                    @endforeach
                </tbody>  
            @endforeach     
    </table>
   <button onclick="#" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar PDF</button>
@endif


</div>
@endsection
