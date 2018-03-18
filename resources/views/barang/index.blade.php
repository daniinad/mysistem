@extends('layouts.bsb')
@section('content')

<div class="container">
<div class="row">
  <div class="col-md-10 col-md-offset-2">
    <center><h1>Data Barang</h1></center>
    <div class="panel panel-primary">
        <div class="panel-heading">Data Barang
        <div class="panel-title pull pull-right">
            <a href="barang/create">Tambah Data</a></div>
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                           
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $data)
                        <tr>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->merk}}</td>
                            <td>{{$data->jumlah}}</td>
                            <td>{{$data->harga}}</td>
                           <td><img src="{{asset('/img/'.$data->gambar.'')}}" height="100px" width="100px"></td>
                           
                    
                            <td>
                                <a class="btn btn-warning" href="barang/{{$data->id}}/edit">Edit</a></td>
                            <td>
                                <form action="{{route('barang.destroy',$data->id)}}" method="post">

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
</div>
@endsection