@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-md btn-success float-right">Tambah Data</a>
                </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>npm</th>
                                <th>nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Telephone</th>
                                <th>Alamat</th>
                                <th>AKSI</th>
                            </tr>
                            @php  
                                $no = 1;
                            @endphp

                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->tempat_lahir }}</td>
                                <td>{{ $mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->gender }}</td>
                                <td>{{ $mhs->telephone }}</td>
                                <td>{{ $mhs->alamat }}</td>
                            <td>
                                <a href="{{ route('edit.mahasiswa' , $mhs->id) }}" class="btn btn-md btn-primary">EDIT</a>
                                <a href="{{ route('hapus.mahasiswa' , $mhs->id) }}" class="btn btn-md btn-info">HAPUS</a>
                               
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
