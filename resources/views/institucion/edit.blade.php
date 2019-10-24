@extends('app')
@section('content')
 <body >
        <div class="jumbotron">
                <h2>Editar Institucion</h2>
                <h3>CODIGO {{ $institucion->INS_CODIGO }}: {{ $institucion->INS_NOMBRE }}</h3>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
            <a href="{{url('institucion')}}" class="btn btn-danger mb-2">Cancelar</a> 
    </form>
</div> 
@endsection