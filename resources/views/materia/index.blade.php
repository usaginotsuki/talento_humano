@extends('app')
@section('content')

<div class="jumbotron">
    <h2>Materias</h2>
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
            <a href="{{url('materia/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>       
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">
            <input id="buscar" type="text" class="form-control" placeholder="BUSCAR" />
        </div> 
    </div>
    <table id="tabla" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row">Periodo</th>
                <th scope="row">Docente</th>
                <th scope="row">Carrera</th>
                <th scope="row">NRC</th>
                <th scope="row">Nombre</th>
                <th scope="row">Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($materias as $mat)
                <tr>       
                    <td scope="row">{{$mat -> periodos -> PER_NOMBRE}}</td>
                    <td scope="row">{{$mat -> docentes -> DOC_NOMBRES}}</td>
                    <td scope="row">{{$mat -> carreras -> CAR_NOMBRE}}</td>  
                    <td scope="row">{{$mat -> MAT_NRC}}</td>
                    <td scope="row">{{$mat -> MAT_NOMBRE}}</td>
                    <td>
                        <form action="{{url('/materia/'.$mat->MAT_CODIGO.'/destroy')}}" method="POST" class="float-right">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                        </form>
                        <a href="{{url('materia/'.$mat->MAT_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                        &nbsp;
                        
                    </td>
                </tr>
            @endforeach
        </tbody>   
    </table>
    <?php echo $materias->render(); ?>
</div>
@endsection