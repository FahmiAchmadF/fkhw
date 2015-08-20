@extends('FKHW.Admin.Admin')
@section('konten')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Edit Artikel</strong>
	</div>
	<div class="panel-body">
		{!! Form::open(['url'=>['Admin/artikel/edit/proses', $data->id], 'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('Judul', 'Judul :') !!}
			{!! Form::text('Judul', $data->judul, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Penulis', 'Penulis :') !!}
			{!! Form::text('Penulis', $data->penulis, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Isi', 'Isi :') !!}
			{!! Form::textarea('Isi', $data->isi, ['id'=>'mytextck', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group suntikwidth">
			{!! Form::label('Tags', 'Tags :') !!}
			{!! Form::select('Tags[]', $opsitags, $initags, ['id' => 'mytags', 'class' => 'form-control', 'multiple']) !!}
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

@section('footer')
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
  
  $(function () {
        
        CKEDITOR.replace('mytextck');
        $('#mytags').select2();
      });


  </script>
@endsection