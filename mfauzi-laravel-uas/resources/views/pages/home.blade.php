@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Mahasiswa</div>
                <div class="panel-body">
					<a href="{{URL('/add')}}"><button type="submit" class="btn btn-raised btn-primary pull-right">+ Tambah</button></a>
					
					@if (Session::has('after_update'))
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>{{ Session::get('after_update.title') }}</strong>
									<a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1') }}</a> {{ Session::get('after_update.text-2') }}
								</div>
							</div>
						</div>
					@endif
					
					<table class="table table-bordered table-hover" border="1" width="75%" align="center">
						<thead>	
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Nim</th>
								<th>Alamat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php(
								$no = 1
								)
							@foreach ($mahasiswa as $mhs)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $mhs->nama }}</td>
								<td>{{ $mhs->nim }}</td>
								<td>{{ $mhs->alamat }}</td>
								<td><center>
									<a href="{{URL('/show/'.$mhs->id)}}" class="btn btn-sm btn-raised btn-info">Edit</a>
									<a href="{{URL('/destroy/'.$mhs->id)}}" class="btn btn-sm btn-raised btn-danger">Delete</a>
									</center></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@stop