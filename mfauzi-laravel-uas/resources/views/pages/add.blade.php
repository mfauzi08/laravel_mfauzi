@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data Mahasiswa</div>
                <div class="panel-body">
				
					<form class="form-horizontal" method="POST" action="{{ URL('/store') }}">
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
						
						<fieldset>

							<div class="form-group label-flloating">
							<label class="control-label">Nama :</label>
							<Input class="form-control" type="text" name="nama"/>
							</div>
								
							<div class="form-group label-flloating">
							<label class="control-label">NIM :</label>
							<Input class="form-control" type="text" name="nim"/>
							</div>
							
							<div class="form-group label-flloating">						
							<label class="control-label">Alamat :</label>
							<Input class="form-control" type="text" name="alamat"/>
							</div>
								
							<div class="form-group">
							<div class="col-md-12">
								<button type="submit" class="btn btn-raised btn-primary pull-right">Tambah</button> 
								<button type="reset" class="btn btn-raised btn-warning pull-right">Reset</button>
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