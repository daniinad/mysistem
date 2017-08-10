@extends('layouts.mastah')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-2">
    <center><h1>Data Pelanggan</h1></center>
    <div class="panel panel-primary">
        <div class="panel-heading">Data Pelanggan
        <div class="panel-title pull pull-right">
            <a href="pelanggan/create">Tambah Data</a></div>
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No_Hp</th>
                            <th>Barang Yang Dibeli</th>
                            <th>Gambar</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelanggan as $data)
                        <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->no_hp}}</td>
                            <td>{{$data->bahans->nama}}</td>
                            <td>{{$data->bahans->gambar}}</td>

                           <td><img src="{{asset('/img/'.$data->gambar.'')}}" height="100px" width="100px"></td>
                    
                            <td>
                                <a class="btn btn-warning" href="pelanggan/{{$data->id}}/edit">Edit</a></td>
                            <td>
                                <form action="{{route('pelanggan.destroy',$data->id)}}" method="post">

                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token">
                                <input type="submit" class="btn btn-danger" value="Delete">
                                {{csrf_field()}}
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>
@endsection