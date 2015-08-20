@extends('FKHW.Auth.Auth')
@section('konten')
<div id="login">

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		{!! Form::open(['url' => 'auth/login', 'method' => 'post']) !!}

			<fieldset>
			

				<p>{!! Form::label('email', 'Email :') !!}</p>
				<p>{!! Form::email('email', null, ['class' => 'form-control']) !!}</p>

				<p>{!! Form::label('password', 'Password :') !!}</p>
				<p>{!! Form::password('password', ['class' => 'form-control']) !!}</p>

				<p>{!! Form::submit('Sign In') !!}</p>

			</fieldset>

		{!! Form::close() !!}

	</div>



@stop