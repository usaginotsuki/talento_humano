@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Consola de Control'))


 <body >
        <div class="container-fluid">
            <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p>
             <div class="col">
                 Docente: {{$control -> docente->DOC_APELLIDOS}} {{$control -> docente->DOC_NOMBRES}}
             </div>   
             <div class="col">
                 Materia: {{$control -> materia->MAT_NOMBRE}} ({{$control -> materia->MAT_ABREVIATURA}} {{$control -> materia->MAT_NRC}})
             </div>
           
         <form  action="{{url('control/updateNonta')}}"  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="CON_CODIGO" value="{{ $control->CON_CODIGO }}">
              
                                   
                                        <label for="CON_NOTA">Nota</label>
                                    
                                        <textarea type="text" class="form-control"  name="CON_NOTA" value="{{$control->CON_NOTA}}"></textarea>
    
                  
                <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                 <a href="{{url('control/consola')}}" class="btn btn-danger mb-2">Cancelar</a> 
             
        </form>
       </div> 
</body>
@endsection
</html>