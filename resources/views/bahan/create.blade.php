@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Bahan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Bahan
		<div class="panel-title pull pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div>
			</div>

			<div class="panel-body">
				<form action="{{route('bahan.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Mekr</label>
						<input type="text" name="merk" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Ukuran</label>
						<input type="text" name="ukuran" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Harga</label>
						<input type="text" name="harga" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Cover</label>
						<input type="file" name="cgambar" required>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
			</div>
@endsection