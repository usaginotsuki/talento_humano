@extends('app')
@section('content')   
<div class="jumbotron">
    <h2>Lista de Control</h2>
</div>
<div class="container">
<form class="form" id="form" action="" method="POST">
  <input type="hidden" name="" value="">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FECHA: </label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="CON_DIA" id="CON_DIA"  />
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">CAMPUS:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="" placeholder="Seleccione un Campus">
    </div>
  </div>
  <div class="form-group row">
     <button type="button" class="btn btn-primary mb-2">Actualizar Reporte</button>
  </div>
</form>
<br>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row">ORD.</th>
                <th scope="row">MATERIA</th>
                <th scope="row">SALA</th>
                <th scope="row">ENTRADA</th>
                <th scope="row">SALIDA</th>
                <th scope="row">DOCENTE</th>
            </tr>
        </thead>
        <tbody>
      
        </tbody>
    </table>

</div>
@endsection
