<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user/index', ['kategoriuser'=>'Admin']);
    }
    
    public function daftar()
    {
        $ar_kategori = ["Dosen", "Mahasiswa", "Staff", "Alumni"];
        return view('user/daftar', ['kategori'=>$ar_kategori]);
    }


    public function store(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view('user/sukses',
            ['nama'=>$nama, 'email'=>$email, 'kategori'=>$kategori, 'alamat'=>$alamat]);
        }

        public function daftarperiksa()
    {
        $ar_jk = ["Laki-laki", "Perempuan"];
        return view('praktikum8/daftarperiksa', ['jk'=>$ar_jk]);
    }


        public function tabel(Request $request){
            $nama = $request->input('nama');
            $tp = $request->input('tp');
            $tgl = $request->input('tgl');
            $jk = $request->input('jk');
            return view('praktikum8/tabel',
                ['nama'=>$nama, 'tp'=>$tp, 'tgl'=>$tgl, 'jk'=>$jk]);
            }
}

