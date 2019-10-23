@extends('app')
@section('content')
@include ('shared.navbar')
<div class="container">
    <h2>Materias por Carrera</h2>
      @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="{{url('/materiaxcarrera/store')}}" method="POST">
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
        </div>


      


    

       















      


        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
       
    </form>


        @if($materias != null )


         <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">MATERIA</th>
                <th scope="col">NRC</th>
                <th scope="col">DOCENTE</th>
                <th scope="col">CREDITOS</th>
                <th scope="col">ESTUDIANTES</th>
                <th scope="col">ABREVIATURA</th>
                <!--<th scope="col">MI ESPE</th>
                <th scope="col">CLAVE DOC</th>
                <th scope="col">COD LABORATORIO</th>
                <th scope="col">CAR CODIGO</th>
                <th scope="col">PERIODO COD</th>
                <th scope="col">OBSERVACION</th>
                <th scope="col">CON CODIGO</th>
                <th scope="col">MAT CODIGO</th>



                <th scope="col">FECHA INICIO</th>
                <th scope="col">FECHA FIN</th>
                <th scope="col">Acciones</th>-->
            </tr>
        </thead>
         <tbody >
        @foreach ($materias as $mat)
        <tr>
       
            <td scope="row">{{$mat ->MAT_CODIGO}}</td>
            <td scope="row">{{$mat ->MAT_NOMBRE}}</td>
            <td scope="row">{{$mat ->MAT_NRC}}</td>
            <td scope="row">{{$mat->docentes->DOC_NOMBRES.' '.$mat->docentes->DOC_APELLIDOS}}</td>
            <td scope="row">{{$mat ->MAT_CREDITOS}}</td>
            <td scope="row">{{$mat ->MAT_NUM_EST}}</td>
            <td scope="row">{{$mat ->MAT_ABREVIATURA}}</td>



            
          
        @endforeach
         </tbody>   
</table>
  <a href="{{url('materiaxcarrera/'.$valores['PER_CODIGO'].'/'.$valores['CAR_CODIGO'].'/pdf')}}" class="btn btn-danger mb-2">DESCARGAR PDF</a>
@endif
</div>
@endsection