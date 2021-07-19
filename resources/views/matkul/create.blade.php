@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Matkul</div>

                <div class="card-body">
                <form action="{{ route('simpan.matkul')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">   
                                <label form="">NO.</label>
                                <input type="number" name="no" class="form-control" placeholder="massukan No"></input>
                            </div> 
                            <div class="col">
                                    <label form="">Kode Matkul</label>
                                    <input type="text" name="kode_matkul" class="form-control" placeholder="massukan kode"></input>
                            </div>
                            <div class="col">
                                    <label form="">Nama Matkul</label>
                                    <input type="text" name="nama_matkul" class="form-control" placeholder="massukan nama"></input>
                            </div>
                            <div class="col">
                                    <label form="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="massukan sks"></input>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-sm btn-primary">simpan</button>
                            <a href=" {{route ('matkul')}} " class="btn btn-sm btn-danger">batal</a>
                        </div>
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
