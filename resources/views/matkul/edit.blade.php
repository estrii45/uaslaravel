@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">EDIT DATA TRANSAKSI</div>

            <div class="card-body">
                <form action="{{ route('update.matkul', $matkul->no) }}" method="POST">
                    @csrf
                   
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">   
                                <label form="">NO.</label>
                                <input type="number" name="no" class="form-control" placeholder="massukan No" 
                                value="{{is_null($matkul)? '' : $matkul->no}}"></input>
                            </div> 
                            <div class="col">
                                    <label form="">Kode Matkul</label>
                                    <input type="text" name="kode_matkul" class="form-control" placeholder="massukan kode"  
                                    value="{{is_null($matkul)? '' : $matkul->kode_matkul}}"></input>
                            </div>
                            <div class="col">
                                    <label form="">Nama Matkul</label>
                                    <input type="text" name="nama_matkul" class="form-control" placeholder="massukan nama"
                                    value="{{is_null($matkul)? '' : $matkul->nama_matkul}}"></input>
                            </div>
                            <div class="col">
                                    <label form="">SKS</label>
                                    <input type="number" name="sks" class="form-control" placeholder="massukan sks" 
                                    value="{{is_null($matkul)? '' : $matkul->sks}}"></input>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-sm btn-primary">simpan</button>
                            <a href="" class="btn btn-sm btn-danger">batal</a>
                        </div>
                        </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
