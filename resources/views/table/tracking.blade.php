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
                <th scope="col">ID Tracking</th>
                <th scope="col">ID Cabang</th>
                <th scope="col">ID Transaksi</th>
                <th scope="col">ID Kurir</th>
                <th scope="col">Action</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->cabang_id }}</td>
                <td>{{ $value->transaksi_id }}</td>
                <td>{{ $value->kurir_id }}</td>
                <td>
                    <a href=""><i class="fas fa-edit"></i></a>
                    <a href="/table/tracking/hapus/{{ $value->id }}"><i class="fas fa-trash-alt"></i></a>
                </td>
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