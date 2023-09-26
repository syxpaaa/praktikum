<?php

namespace App\Http\Controllers;

use App\Models\siswamodel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function utama(){
        $siswa = new siswamodel();
        return view('siswa',['datasiswa'=>$siswa->all()]);
    }

    public function tambah(){
        return view('tambahsiswa');
    }

     public function simpan(Request $request){
        $siswa = new siswamodel();
        $validasi = $request->validate([
            'nisn'=>'required|unique:tb_siswa',
            'nama'=>'required',
            'alamat'=>'required',
            'no_tlp'=>'required',
            'kode_kelas'=>'required',
        ]);

        $siswa->create($request->all());
        return redirect('siswa')->with('pesan','Data berhasil di simpen');
     }

     public function edit($nisn){
        $siswa = new siswamodel();
        return view('editsiswa',['datasiswa'=>$siswa->find($nisn)]);
     }

     public function update(Request $request,$nisn){
        $validasi = $request->validate([
            'nisn'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_tlp'=>'required',
            'kode_kelas'=>'required',
        ]);
        $siswa = new siswamodel();
        $siswa = $siswa->find($nisn);
        $siswa->update($request->all());
        return redirect('siswa');
     }

     public function hapus($nisn){
        $siswa = new siswamodel();
        $siswa = $siswa->find($nisn);
        $siswa->delete();
        return redirect('siswa');
     }
}

