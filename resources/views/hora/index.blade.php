@extends('app')
@section('content')
 <body >

  <div class="jumbotron">
    <h2>Hora</h2>
  </div>
  <div class="container" >
  @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="{{url('hora/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover table-bordered results" id="ListTable">
        <thead>
            <tr>
                <th scope="col">CODIGO</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">HORA</th>
                <th scope="col">ACCIONES</th>
            </tr>     
        </thead>
        <tbody>
        
        
        @foreach ($horas as $hora)
            <tr>
                <td scope="row">{{$hora -> HORA_CODIGO}}</td>
                <td scope="row">{{$hora -> empresa->EMP_NOMBRE}}</td>
                <td scope="row">{{$hora -> HORA_NOMBRE}}</td>
                <td>
                    <form action="{{url('/hora/'.$hora->HORA_CODIGO.'/destroy')}}" method="POST" class="float-right">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                    </form>
                    <a href="{{url('hora/'.$hora->HORA_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                    &nbsp;
                </td>
            </tr>
        @endforeach
        <tbody>
     </table>
    </div >
</body>
@endsection