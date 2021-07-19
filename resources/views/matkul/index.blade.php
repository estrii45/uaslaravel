@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data MATKUL
                <a href="{{ route('tambah.matkul') }}" class="btn btn-md btn-success float-right">Tambah Data</a>
                </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($matkul as $mk)
                            <tr>
                                <td>{{ $mk->no }}</td>
                                <td>{{ $mk->kode_matkul }}</td>
                                <td>{{ $mk->nama_matkul }}</td>
                                <td>{{ $mk->sks }}</td>
                            <td>
                                <a href="{{ route('edit.matkul' , $mk->no) }}" class="btn btn-md btn-primary">EDIT</a>
                                <a href="{{ route('hapus.matkul' , $mk->no) }}" class="btn btn-md btn-info">HAPUS</a>
                               
                            </td> 
                            </tr>   
                            @endforeach  
                                  
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
