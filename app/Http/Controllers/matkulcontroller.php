<?php

namespace App\Http\Controllers;
use App\matkul;

use Illuminate\Http\Request;

Use Alert;


class matkulcontroller extends Controller
{
    public function index()
    {
        $matkul = matkul::all();
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        matkul::create($request->all());
        alert()->success('Success','data berhasil disimpan');
        return redirect()->route('matkul');
    }

    public function edit(request $request, $no )
    {
        $matkul = matkul::where('no', $no)->first();

        return view('matkul.edit', compact ('matkul'));
    }

    public function update(Request $request,$no)
    {
        $matkul = matkul::where('no', $no)->update([
            'no' => $request->no,
            'kode_matkul' => $request->kode_matkul,
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks
        ]);
        toast('Success','berhasil diedit');
        return redirect()->route('matkul');

        
    }

    public function destroy(Request $request, $no)
    {
        $matkul = matkul::where('no', $no)->delete();
        toast('Success','berhasil di hapus');
        return redirect()->route('matkul');
    }
}

