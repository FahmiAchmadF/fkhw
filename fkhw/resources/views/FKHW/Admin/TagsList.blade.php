@extends('FKHW.Admin.Admin')
@section('konten')
@if(Session::has('BerhasilMembuatTags'))
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-success"></span> {{ Session::get('BerhasilMembuatTags') }}</div>
    @endif
@if(Session::has('BerhasilMengubahTags'))
        <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-warning"></span> {{ Session::get('BerhasilMengubahTags') }}</div>
    @endif
@if(Session::has('BerhasilMenghapusTags'))
        <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-info"></span> {{ Session::get('BerhasilMenghapusTags') }}</div>
    @endif

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Tags List</strong>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID Tags</th>
				<th>Tags</th>
				<th colspan="2"><center>Aksi</center></th>
			</tr>
            <?php $i=1; ?>
            @foreach($list as $lists)
                
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $lists->id }}</td>
                        <td>{{ $lists->opsi_tags }}</td>
                        <td><center><a href="{{ url('Admin/tags/edit',$lists->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Ubah</a></center></td>
                        <td><center>{!! Form::open(['url' => ['Admin/tags/hapus',$lists->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>
		</div>
	</div>
	<div class="panel-footer">
		<strong>Jumlah Tags : {{ $jumlahtags }}</strong>
	</div>
</div>


@stop