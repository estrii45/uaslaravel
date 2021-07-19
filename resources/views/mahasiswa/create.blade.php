@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                <form action="{{ route('simpan.mahasiswa') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">   
                                <label form="">Nama mahasiswa</label>
                                <select name="id_user" id="id_user"  class="form-control" >
                                    <option value="" disabled selection>...pilih user...</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id}}" >{{$u->name}}</option>
                                    @endforeach
</select>
                            </div> 
                            <div class="col">
                                    <label form="">npm</label>
                                    <input type="number" name="npm"  class="form-control" placeholder="massukan kode"></input>
                            </div>
                            <div class="col">
                                    <label form=""> Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir"  class="form-control" placeholder="massukan nama"></input>
                            </div>
                            <div class="col">
                                    <label form="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir"  class="form-control" placeholder="massukan sks"></input>
                            </div>
                            <div class="col">
                                    <label form=""> jenis kelamin</label>
                                    <select name="gender"  class="form-control" >
                                    <option value="" disabled selection>...pilih jenis kelamin...</option>
                                    <option value="L" >Laki-laki</option>
                                    <option value="P" >perempuan</option>
</select>
                            </div>
                            <div class="col">
                                    <label form="">telephone</label>
                                    <input type="text" name="telephone"  class="form-control" placeholder="massukan sks"></input>
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                             <div class="form-row">
                            <div class="col">
                                    <label form="">Alamat</label>
                                    <textarea type="text" name="alamat" id="alamat"  cols="2" rows="3" class="form-control" placeholder="massukan sks" style="resize: none"></textarea>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                        <div class="form-row float-right">
                        <div class="col">
                            <button type="submit" class="btn btn-sm btn-primary">simpan</button>
                            <a href=" {{route ('mahasiswa')}} " class="btn btn-sm btn-danger">batal</a>
                        </div>
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
