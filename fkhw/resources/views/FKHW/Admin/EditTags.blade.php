@extends('FKHW.Admin.Admin')
@section('konten')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Edit Tags</strong>
	</div>
	<div class="panel-body">
		{!! Form::open(['url'=>['Admin/tags/edit/proses', $data->id], 'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('Tags', 'Tags :') !!}
			{!! Form::text('Tags', $data->opsi_tags, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			
			{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
		</div>

		{!! Form::close() !!}
	</div>
	<div class="panel-footer">
		@if ($errors->any())
		<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<center><h1>Tolong Perikasa Inputan Anda !</h1></center>
			@foreach ($errors->all() as $error)
				<p><span class="glyphicon glyphicon-remove-sign"></span> {{ $error }}</p>
			@endforeach
		</div>
	@endif
	</div>
</div>


@stop