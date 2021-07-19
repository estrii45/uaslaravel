@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                <a href="{{ route('tambah.nilai') }}" class="btn btn-md btn-success float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>npm</th>
                                <th>nama</th>
                                <th>Nama Matkul</th>
                                <th>SKS</th>
                                <th>Nilai</th>
                                <th>AKSI</th>
                            </tr>
                            @php  
                                $no = 1;
                            @endphp

                            @foreach ($nilai as $n)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $n->mahasiswa->npm }}</td>
                                <td>{{ $n->mahasiswa->user->name }}</td>
                                <td>{{ $n->matkul->nama_matkul }}</td>
                                <td>{{ $n->matkul->sks }}</td>
                                <td>{{ $n->nilai}}</td>
                            <td>
                                <a href="{{ route('edit.nilai' , $n->id) }}" class="btn btn-md btn-primary">EDIT</a>
                                <a href="{{ route('hapus.nilai' , $n->id) }}" class="btn btn-md btn-info">HAPUS</a>
                               
                            </td> 
                            </tr>   
                            @endforeach  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
