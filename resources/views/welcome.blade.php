@extends('app')
@section('css')
  <link href="{{ URL::asset('css/button.css') }}" rel='stylesheet' type='text/css' />
@endsection
@section('content')
<div class="container container-main bg-white">
	<a href="{{url('/guias/login')}}" ><img src="{{URL::asset('images/principal/icono_guia.png')}}"> </a>	
    <img src="{{URL::asset('images/principal/espe.png')}}" >
    <table class="table table-hover table-bordereds" >
        <thead>
            <tr>
                <th scope="col">Objetos Perdidos</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($objeto as $obj)
            <tr>
                
                <td scope="row">{{$obj -> OBR_NOMBRE}}<br><img src="{{$obj -> OBR_IMAGEN}}" width="100" height="100"/></td>
            </tr>
            
        @endforeach 
        </tbody>
    </table>
</div>

@endsection