@extends('app')
@section('css')
  <link href="{{ URL::asset('css/button.css') }}" rel='stylesheet' type='text/css' />
@endsection
@section('content')
<div class="container container-main bg-white">
	<a href="{{url('/guias/login')}}" ><img src="{{URL::asset('images/principal/icono_guia.png')}}"> </a>	
    <img src="{{URL::asset('images/principal/espe.png')}}" >
</div>

@endsection