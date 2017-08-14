@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div>
			</div>

			<div class="panel-body">
				<form action="{{route('bahan.store')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Nama Barang</label>
						<input type="text" name="nama" class="form-control" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Merk</label>
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
						<label class="control-lable">Gambar</label>
						<input type="file" name="gambar" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Nama Pembeli</label>
						<select class="form-control" name="nap">
							@foreach($pelanggan as $data)
							<option value="{{$data->id}}">{{$data->name}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
			</div>
@endsection