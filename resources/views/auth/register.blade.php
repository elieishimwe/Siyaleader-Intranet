@extends('app')

@section('content')
<div class="container">
	<div class="tab-content">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
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

					<form class="form-signin" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">

							<div class="col-md-6">
								<input type="text" class="input-block-level" placeholder="First Name" name="firstName" value="{{ old('firstName') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="input-block-level" placeholder="surname" name="surname" value="{{ old('surname') }}">
							</div>
						</div>

						<div class="form-group">

							<div class="col-md-6">
                            	{!! Form::select('department',$selectDepartments,0,['class' => 'input-block-level' ,'id' => 'department']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="text" placeholder="Cellphone" class="input-block-level" name="cellphone" value="{{ old('cellphone') }}">
							</div>
						</div>


						<div class="form-group">

							<div class="col-md-6">
								<input type="email" placeholder="Email Address" class="input-block-level" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">

							<div class="col-md-6">
								<input type="password" placeholder="Password" class="input-block-level" name="password">
							</div>
						</div>

						<div class="form-group">

							<div class="col-md-6">
								<input type="password" placeholder="Confirm Password" class="input-block-level" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-metis-3 btn-block btn-large">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  <div class="text-center">
    <ul class="inline">
    	<li><a class="muted" href="{{ url('/auth/login') }}">Login</a></li> |
        <li><a class="muted" href="#" data-toggle="tab">Forgot Password</a></li> |
        <li><a  class="muted" href="{{ url('/auth/register') }}">Signup</a></li>
    </ul>
  </div>

</div>
@endsection
