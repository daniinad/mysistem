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
			<form action="{{route('bahan.update',$bahan->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">	
			<input type="hidden" name="_token" value="{{csrf_token() }}">
					
					<div class="form-group" hidden="">
						<label class="control-lable">Nama Pelanggan</label>
						<select class="form-control" name="nap">
							@foreach($pelanggan as $data)
							<option value="{{$data->id}}">{{$data->name}}</option>
							@endforeach
						</select>
					</div>
					

					<div class="form-group" hidden="">
						<label class="control-lable">Bahan Yang Dibeli</label>
						<select class="form-control" name="napp">
							@foreach($bahan as $data)
							<option value="{{$data->id}}">{{$data->nama}}</option>
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