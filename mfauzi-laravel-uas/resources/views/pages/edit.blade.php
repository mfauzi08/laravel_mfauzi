@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data Mahasiswa</div>
                <div class="panel-body">
				
					<form class="form-horizontal" method="POST" action="{{ URL('/update/'.$tampil_id->id) }}">
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					
						<fieldset>
							<div class="form-group label-flloating">
							<label class="control-label">Nama :</label>
							<Input class="form-control" type="text" name="nama" value="{{ $tampil_id->nama }}"/>
							</div>
								
							<div class="form-group label-flloating">
							<label class="control-label">NIM :</label>
							<Input class="form-control" type="text" name="nim" value="{{ $tampil_id->nim }}"/>
							</div>
							
							<div class="form-group label-flloating">						
							<label class="control-label">Alamat :</label>
							<Input class="form-control" type="text" name="alamat" value="{{ $tampil_id->alamat }}"/>
							</div>
								
							<div class="form-group">
							<div class="col-md-12">
								<button type="submit" class="btn btn-raised btn-primary pull-right">Tambah</button> 
							</div>
							</div>					
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop