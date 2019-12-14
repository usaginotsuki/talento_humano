@extends('app')

@section('content')
@include('shared.title', array('titulo' => 'Actualizar Usuario'))

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/user/update">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" id="id" value="{{ $user->id }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Name <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $user->name }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ $user->email }}">
							</div>
						</div>

						 <div class="col">
			                <div class="form-group">
			                    <label for="name">Rol <span style="color:#FF0000";>*</span></label>
			                    <select class="col-md-6 form-control" id="role_id" name="role_id" >
			                        @foreach ($role as $rols)
                        				<option value="{{$rols->id}}"  
										@if ($rols->id == $user->role->id)
											selected="selected"
										@endif
										>{{$rols->name}}</option>
                       				@endforeach
			                    </select> 
			                </div>
			            </div> 
						<div class="col">
			                <div class="form-group">
			                    <label for="name">Empresa <span style="color:#FF0000";>*</span></label>
			                    <select class="col-md-6 form-control" id="EMP_CODIGO" name="EMP_CODIGO" >
			                        @foreach ($empresas as $empresa)
										<option value="{{$empresa->EMP_CODIGO}}"  
										@if ($empresa->EMP_CODIGO == $user->empresa->EMP_CODIGO)
											selected="selected"
										@endif
										>{{$empresa->EMP_NOMBRE}}</option>
                       				@endforeach
			                    </select> 
			                </div>
			            </div>
						 <!-- Submit Button -->
						 <button type="submit" class="btn btn-primary mb-2">Guardar</button>
       					 <a href="{{url('user')}}" class="btn btn-danger mb-2">Cancelar</a>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
