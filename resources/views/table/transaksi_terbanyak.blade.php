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
                                <th scope="col">Nama Kelurahan</th>
                                <th scope="col">Nama Kecamatan</th>
                                <th scope="col">Nama Kota</th>
                                <th scope="col">Nama Provinsi</th>
                                <th scope="col">Jumlah Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ans as $value)
                            <tr>
                                <td>{{ $value->nama_kelurahan }}</td>
                                <td>{{ $value->nama_kecamatan }}</td>
                                <td>{{ $value->nama_kota }}</td>
                                <td>{{ $value->nama_provinsi }}</td>
                                <td>{{ $value->jumlah_transaksi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection