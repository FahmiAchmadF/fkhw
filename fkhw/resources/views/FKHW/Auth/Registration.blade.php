@extends('FKHW.Auth.Auth')
@section('konten')
<div class="container">
	<div class="panel panel-default centertop">
		<div class="panel-heading">
		<h2>Registration Page</h2>	
		</div><div class="panel-body">
		{!! Form::open(['url' => 'auth/register', 'method' => 'post']) !!}
			<div class="form-group">
			{!! Form::label('name', 'Name :') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			{!! Form::label('email', 'Email :') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			{!! Form::label('password', 'Password :') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			{!! Form::label('repassword', 'Re-Password :') !!}
			{!! Form::password('repassword', ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			
			{!! Form::submit('SUBMIT', ['class' => 'btn btn-success']) !!}
			
			</div>
		{!! Form::close() !!}
		</div>
		<div class="panel-footer">
			<strong></strong>
		</div>
	</div>
</div>	
@stop