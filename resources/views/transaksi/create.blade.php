@extends('layouts.bsb')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-2">
	<center><h1>Data Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Transaksi
		<div class="panel-title pull pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div>
			</div>

			<div class="panel-body">
				<form action="{{route('bahan.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">
						<label class="control-lable">Nama Pelanggan</label>
						<input type="text" name="nama" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Barang Yang Dibeli</label>
						<input type="text" name="merk" class="form-control" required>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
			</div>
@endsection