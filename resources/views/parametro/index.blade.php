@extends('app')
@section('content')

<div class="jumbotron">
    <h2>Parametros</h2>
</div>
<div class="container">
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
            <a href="{{url('parametro/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col">
            
        </div>
    </div>
    <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TODOS</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">SINO</th>
                <th scope="col">DESTINO</th>
                <th scope="col">DOC CODIGO</th>
                <th scope="col">Acciones</th>
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
        @foreach ($parametros as $par)
        <tr>
       
            <td scope="row">{{$par -> PAR_CODIGO}}</td>
            <td scope="row">{{$par -> PAR_TODOS}}</td>
            <td scope="row">{{$par ->empresas->EMP_NOMBRE}}</td>


            
            @if ($par->PAR_SINO == '0')
                <td scope="row">NO</td>
            @else
                <td scope="row">SI</td>
            @endif
            <td scope="row">{{$par -> PAR_DESTINO}}</td>
            <td scope="row">{{$par -> DOC_CODIGO}}</td>
            <!--<td scope="row">{{$par -> DOC_MIESPE}}</td>
            <td scope="row">{{$par -> DOC_CLAVE}}</td>
            <td scope="row">{{$par -> LAB_CODIGO}}</td>
            <td scope="row">{{$par -> CAR_CODIGO}}</td>
            <td scope="row">{{$par -> PER_CODIGO}}</td>
            <td scope="row">{{$par -> PAR_OBSERVACION}}</td>
            <td scope="row">{{$par -> CON_CODIGO}}</td>
            <td scope="row">{{$par -> MAT_CODIGO}}</td>


            <td scope="row">{{$par -> PAR_FECHA_INI}}</td>
            <td scope="row">{{$par -> PAR_FECHA_FIN}}</td>-->
            <td>
                <form action="{{url('/parametro/'.$par->PAR_CODIGO.'/destroy')}}" method="POST" class="float-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                </form>
                <a href="{{url('parametro/'.$par->PAR_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                &nbsp;

                <a href="{{url('parametro/'.$par->PAR_CODIGO.'/pdf')}}" class="btn btn-primary mb-2 float-right"><span >ver</span></a>
                &nbsp;
            </td>
       </tr>
        @endforeach
         </tbody>   
</table>
<!-- BOTONES DE NAVEGACION -->
<!-- <div class="clearfix">
    <ul class="pagination">
        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
    </ul> -->
</div>
@endsection