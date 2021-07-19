<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use App\user;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $user = user::all();
        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        alert()->success('Success','data berhasil disimpan');
        return redirect()->route('mahasiswa');
    }

    public function edit(request $request, $id )
    {
        $user = user::all();
        $mahasiswa = mahasiswa::where('id', $id)->first();
        return view('mahasiswa.edit', compact ('mahasiswa', 'user'));
    }

    public function update(Request $request,$id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Success','berhasil diedit');
        return redirect()->route('mahasiswa');

        
    }

    public function destroy(Request $request, $id)
    {
        $mahasiswa = mahasiswa::where('id', $id)->delete();
        toast('Success','berhasil di hapus');
        return redirect()->route('mahasiswa');
    }
}
