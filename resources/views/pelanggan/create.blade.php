@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Pelanggan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Pelanggan
		<div class="panel-title pull pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div>
			</div>

			<div class="panel-body">
				<form action="{{route('pelanggan.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Alamat</label>
						<input type="text" name="alamat" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">No Hp</label>
						<input type="text" name="no" class="form-control" required>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
			</div>
@endsection