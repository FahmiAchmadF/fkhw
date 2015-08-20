@extends('FKHW.Admin.Admin')
@section('konten')
@if(Session::has('BerhasilMembuatArtikel'))
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-success"></span> {{ Session::get('BerhasilMembuatArtikel') }}</div>
    @endif
@if(Session::has('BerhasilMengubahArtikel'))
        <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-warning"></span> {{ Session::get('BerhasilMengubahArtikel') }}</div>
    @endif
@if(Session::has('BerhasilMenghapusArtikel'))
        <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="glyphicon glyphicon-info"></span> {{ Session::get('BerhasilMenghapusArtikel') }}</div>
    @endif

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Artikel List</strong>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
			<tr>
                <th>No.</th>
				<th>ID Artikel</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Isi</th>
				<th colspan="2"><center>Aksi</center></th>
			</tr>
            <?php $i=1; ?>
            @foreach($list as $lists)
                
                    <tr>
                        <td>
                           <?php echo $i; ?>

                        </td>
                        <td>{{ $lists->id }}</td>
                        <td>{{ $lists->judul }}</td>
                        <td>{{ $lists->penulis }}</td>
                        <td><div class="textover">{{ $lists->isi }}</div></td>
                        <td><center><a href="{{ url('Admin/artikel/edit',$lists->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Ubah</a></center></td>
                        <td><center>{!! Form::open(['url' => ['Admin/artikel/hapus',$lists->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
                            {!! Form::close() !!}</center></td>
                    </tr>
                <?php $i++; ?>
                @endforeach

		</table>
		</div>
	</div>
	<div class="panel-footer">
		<strong>Jumlah Artikel : {{ $jumlahartikel }}</strong>
	</div>
</div>


@stop