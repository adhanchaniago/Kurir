@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-10 m-3">
            <div class="card">
                <div class="card-body">
                <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>
    <table class="table table-striped table-bordered table-paginate">
        <thead>
            <tr>
                <th scope="col">ID Pengirim</th>
                <th scope="col">ID Kelurahan</th>
                <th scope="col">Nama Pengirim</th>
                <th scope="col">Alamat Pengirim</th>
                <th scope="col">No. HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->kelurahan_id }}</td>
                <td>{{ $value->nama_pengirim }}</td>
                <td>{{ $value->alamat_pengirim }}</td>
                <td>{{ $value->no_hp_pengirim }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
 
 
	{{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    
@endsection