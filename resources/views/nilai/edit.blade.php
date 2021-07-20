@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">EDIT DATA NILAI</div>

            <div class="card-body">
                <form action="{{ route('update.nilai', $nilai->id) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">

                                <label form="">Nama mahasiswa</label>
                                <input type="text" value="{{$user->name}}" name="name" id="name"  >
                            </div> 
                            <div class="col">
                            <label form="">Nama Matkul</label>
                                <select name="matkul_id" id="matkul_id"  class="form-control" >
                                    <option value="" disabled selection>...pilih matkul...</option>
                                    @foreach ($matkul as $mk)
                                    <option value="{{ $mk->no}}" {{ $nilai->matkul_id == $mk->no  ? 'selected' : '' }}>{{$mk->nama_matkul}}</option>
                                    @endforeach
</select>
                            </div>         
                            <div class="col">
                                    <label form="">Nilai</label>
                                    <input type="number" name="nilai"  class="form-control" placeholder="massukan nilai"
                                    value="{{is_null($nilai)? '' : $nilai->nilai}}"></input>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-sm btn-primary">simpan</button>
                                        <a href="{{ route('nilai')}}" class="btn btn-sm btn-danger">batal</a>
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
