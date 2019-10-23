@extends('app')
@section('content')
@include ('shared.navbar')
<<<<<<< HEAD
<div class="container">
  <h2>Empresa</h2>
=======
<div class="jumbotron">
    <h2>Empresa</h2>
</div>
<div class="container">
>>>>>>> Team2
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
          <a href="{{url('empresa/create')}}" class="btn btn-primary mb-2">Nuevo</a>
      </div>
      <div class="col"></div>
      <div class="col"></div>
  </div>  
  <table id="ListTable" class="table table-hover table-bordered table-responsive results">
    <thead>
      <tr>
<<<<<<< HEAD
        <th scope="row">Codigo</th>
        <th scope="row">Nombre</th> 
        <th scope="row">Firma DEE</th>
        <th scope="row">Pie DEE</th> 
        <th scope="row">Firma Jefe</th>
        <th scope="row">Estado Laboratorio</th> 
=======
        <th scope="row">#</th>
        <th scope="row">Laboratorio General</th> 
        <th scope="row">Director Departamento</th>
        <th scope="row">Cargo Director Departamento</th> 
        <th scope="row">Jefe Laboratorio</th>
        <th scope="row">Cargo Jefe Laboratorio</th>
        <th scope="row">Firma Laboratorista</th> 
        <th scope="row">Cargo Laboratorista</th>
        <th scope="row">Estado Laboratorio</th> 
        <th scope="row">Relacion Suficiencia</th>
        <th scope="row">Imagen Encabezado</th>
        <th scope="row">Imagen Encabezado 2</th>
        <th scope="row">Auxiliar 1</th>
        <th scope="row">Auxiliar 2</th>
        <th scope="row">Instituto</th>
>>>>>>> Team2
        <th scope="row">Acciones</th>
      </tr>       
    </thead>
    <tbody>
    @foreach ($empresas as $empresa)
      <tr>
        <td scope="row">{{ $empresa->EMP_CODIGO }}</td>
        <td scope="row">{{ $empresa->EMP_NOMBRE }}</td>
        <td scope="row">{{ $empresa->EMP_FIRMA_DEE }}</td>
        <td scope="row">{{ $empresa->EMP_PIE_DEE }}</td>
        <td scope="row">{{ $empresa->EMP_FIRMA_JEFE }}</td>
<<<<<<< HEAD
        <td scope="row">
          @if ($empresa->EMP_ESTADO !== 1)
          <span class="badge badge-danger">No Disponible</span>
          @elseif ($empresa->EMP_ESTADO === 1)
          <span class="badge badge-primary">Disponible</span>
          @endif
        </td>

        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url('empresa/'.$empresa->EMP_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
            <a href="{{url('empresa/'.$empresa->EMP_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
          </div>
=======
        <td scope="row">{{ $empresa->EMP_PIE_JEFE }}</td>
        <td scope="row">{{ $empresa->EMP_FIRMA_LAB }}</td>
        <td scope="row">{{ $empresa->EMP_PIE_LAB }}</td>
        @if ($empresa->EMP_ESTADO !== 1)
        <td scope="row">{{"False"}}</td> 
        @elseif ($empresa->EMP_ESTADO === 1)
        <td scope="row">{{"True"}}</td>     
        @endif
        <td scope="row">{{ $empresa->EMP_RELACION_SUFICIENCIA }}</td>
        <td scope="row"><img src="{{ $empresa->EMP_IMAGEN_ENCABEZADO }}" alt="{{ $empresa->EMP_IMAGEN_ENCABEZADO }}" ></td>
        <td scope="row">{{ $empresa->EMP_IMAGEN_ENCABEZADO2 }}</td>
        <td scope="row">{{ $empresa->EMP_AUX1 }}</td>
        <td scope="row">{{ $empresa->EMP_AUX2 }}</td>
        <td scope="row">{{ $empresa->INS_CODIGO }}</td>
        <td>
            <a href="empresa/edit/{{$empresa->EMP_CODIGO}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
            <a href="empresa/destroy/{{$empresa->EMP_CODIGO}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
>>>>>>> Team2
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div >
@endsection