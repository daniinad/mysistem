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
			<form action="{{route('bahan.update',$bahan->id)}}" method="POST">
			<input type="hidden" name="_method" value="PUT">	
			<input type="hidden" name="_token" value="{{csrf_token() }}">

					<div class="form-group">
						<label class="control-lable">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$bahan->nama}}" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Merk</label>
						<input type="text" name="merk" class="form-control" value="{{$bahan->merk}}" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Ukuran</label>
						<input type="text" name="ukuran" class="form-control" value="{{$bahan->ukuran}}" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Harga</label>
						<input type="text" name="harga" class="form-control" value="{{$bahan->harga}}" required>
					</div>

					<div class="form-group">
						<label class="control-lable">Gambar</label>
						<input type="file" name="gambar" value="{{$bahan->gambar}}" required>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
			</div>
@endsection