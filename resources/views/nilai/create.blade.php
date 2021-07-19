@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Nilai</div>

                <div class="card-body">
                <form action="{{ route('simpan.nilai') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">   
                                <label form="">Nama mahasiswa</label>
                                <select name="mahasiswa_id" id="mahasiswa_id"  class="form-control" >
                                    <option value="" disabled selection>...pilih nama mahasiswa...</option>
                                    @foreach ($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id}}" >{{$mhs->user->name}}</option>
                                    @endforeach
</select>
                            </div> 
                            <div class="col">   
                                <label form="">Nama Matkul</label>
                                <select name="matkul_id" id="matkul_id"  class="form-control" >
                                    <option value="" disabled selection>...pilih matkul...</option>
                                    @foreach ($matkul as $mk)
                                    <option value="{{ $mk->no}}" >{{$mk->nama_matkul}}</option>
                                    @endforeach
</select>
                            </div> 
                            <div class="col">
                                    <label form="">nilai</label>
                                    <input type="number" name="nilai"  class="form-control" placeholder="massukan nilai"></input>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row float-right">
                            <div clas="row">
                                <div class="col">
                                <button type="submit" class="btn btn-sm btn-primary">simpan</button>
                                <a href=" {{route ('nilai')}} " class="btn btn-sm btn-danger">batal</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
