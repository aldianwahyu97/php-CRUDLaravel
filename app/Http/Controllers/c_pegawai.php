<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class c_pegawai extends Controller
{
    public function index(){
        //mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();
        //mengirim nilai ke view 
        return view('index',['pegawai'=>$pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_umur' => $request->umur,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_alamat' => $request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function edit($id){
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        return view('edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request){
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama'=>$request->nama,
            'pegawai_umur'=>$request->umur,
            'pegawai_jabatan'=>$request->jabatan,
            'pegawai_alamat'=>$request->alamat,
        ]);

        return redirect('/pegawai');
    }

    public function delete($id){
        // $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        // $pegawai = delete();
        DB::delete('DELETE FROM pegawai WHERE pegawai_id = ?',[$id]);
        return redirect('/pegawai');
    }
}
