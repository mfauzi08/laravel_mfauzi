@extends('layout.default')
@section('content')
	<table border="1" width="75%" align="center">
		<tr>
			<th><a href="{{URL::to('/add')}}"><button type="submit">+ Tambah</button></a></th>
		</tr>
		<tr bgcolor="#00FFFF">
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><a href="javascript:edit_id('')">Edit</a>
				<a href="javascript:delete_id('')">Delete</a></td>
		</tr>
	</table>	
@stop