<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $data = Mahasiswa::all();
        return view ('datamahasiswa',compact('data'));
    }

    public function create(){
        return view ('createdata');
    }

    public function insert(Request $request){
        //dd($request->all());
        Mahasiswa::create($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Di Tambahkan');
    }

    public function edit($nim){
        $data = mahasiswa::find($nim);
        //dd($data);
        return view('editdata',compact('data'));
    }

    public function update(Request $request, $nim){
        $data = Mahasiswa::find($nim);
        $data->update($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Di Update');
    }

    public function delete($nim){
        $data = mahasiswa::find($nim);
        $data->delete();
        return redirect()->route('read')->with('success','Data Berhasil Di Hapus');
    }

}
