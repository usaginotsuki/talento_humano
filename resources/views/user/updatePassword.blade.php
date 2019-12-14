@extends('app')

@section('content')
@include('shared.title', array('titulo' => 'Cambiar Contraseña Usuario'))

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
				@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Hay algunos problemas en tus datos.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form class="form-horizontal" role="form" method="POST" action="/user/updatePassword">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" id="id" value="{{ $user->id }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Name <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Password <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
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
