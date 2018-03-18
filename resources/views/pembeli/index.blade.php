@extends('layouts.bsb')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-2">
    <center><h1>Data Pembeli</h1></center>
    <div class="panel panel-primary">
        <div class="panel-heading">Data Pembeli
        <div class="panel-title pull pull-right">
            <a href="pembeli/create">Tambah Data</a></div>
            </div>

            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No_Hp</th>

                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembeli as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->no_hp}}</td>
                           
                    
                            <td>
                                <a class="btn btn-warning" href="pembeli/{{$data->id}}/edit">Edit</a></td>
                            <td>
                                <form action="{{route('pembeli.destroy',$data->id)}}" method="post">

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