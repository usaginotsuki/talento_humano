@extends('app')
@section('content')
  
<div class="jumbotron">
    <h2>Materias por Carreras</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col">
    <form action="{{url('/reporte/materia/carrera')}}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
    

         <div class="form-group">
            <label for="PER_CODIGO">Periodo</label>


            <select type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO"  >
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
            <label for="CAR_CODIGO">Carrera</label>


            <select type="input" class="form-control" id="CAR_CODIGO" name="CAR_CODIGO"  >
               @foreach ($carreras as $car)
                @if($car->CAR_CODIGO==$valores['CAR_CODIGO'])
                   <option value="{{$car->CAR_CODIGO}}" selected="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                 @else
                 <option value="{{$car->CAR_CODIGO}}"  >{{$car->CAR_NOMBRE}}</option>
                 @endif
               
               @endforeach
            </select> 
        </div>


      


    

       















      


        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
       
    </form>
</div>
 </div>

<br>

@if($materias != null )


       

            <p id="carrera">

          <span class="h6" style="margin-right:150px;">REPORTE: &emsp;
            <span style="font-weight: 300;">MATERIAS POR CARRERAS</span>
        </span>
        <br>

        <span class="h6" style="margin-right:150px;">PERIODO: &emsp;
                @foreach ($periodos as $per)
                @if($per->PER_CODIGO==$valores['PER_CODIGO'])
            <span style="font-weight: 300;">{{ $per->PER_NOMBRE }}</span>
              @endif
            @endforeach
        </span>

             <span class="h6" style="margin-right:150px;">CARRERA: &emsp;
               @foreach ($carreras as $car)
                @if($car->CAR_CODIGO==$valores['CAR_CODIGO'])
            <span style="font-weight: 300;">{{ $car->CAR_NOMBRE }}</span>
               @endif
            @endforeach
        </span>
        
    </p>
     <table id="materiaCarreraTable" class="table table-hover table-bordered table-sm">
        <thead>
            <tr class="d-flex">
                <th class="col" >ORD</th>
                <th class="col" >MATERIA</th>
                <th class="col">NRC</th>
                <th class="col">DOCENTE</th>
                <th class="col">CREDITOS</th>
                <th class="col">ESTUDIANTES</th>
                <th class="col">ABREVIATURA</th>
               
            </tr>
        </thead>
         <tbody >
        @foreach ($materias as $mat)
        <tr class="d-flex">
       
            <td class="col opts">{{$mat ->MAT_CODIGO}}</td>
            <td class="col opts">{{$mat ->MAT_NOMBRE}}</td>
            <td class="col opts">{{$mat ->MAT_NRC}}</td>
            <td class="col opts">{{$mat->docentes->DOC_NOMBRES.' '.$mat->docentes->DOC_APELLIDOS}}</td>
            <td class="col opts">{{$mat ->MAT_CREDITOS}}</td>
            <td class="col opts">{{$mat ->MAT_NUM_EST}}</td>
            <td class="col opts">{{$mat ->MAT_ABREVIATURA}}</td>



            
          
        @endforeach
         </tbody>   
</table>
   <button onclick="exportMateriaCarrerra()" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar PDF</button>
@endif


</div>
@endsection
