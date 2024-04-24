<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dasbor');
    }

    public function buku()
    {
        $ambil = new buku();
        return view('buku.buku', ['data' => $ambil->all()]);
    }

    public function tambahbuku(){
        return view('buku.tambah');
    }

    public function cektambah(Request $request){
        $p = new buku();
        $cek = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'diskon' => 'required',
        ]);
        $p->create($cek);
        return redirect('buku');
    }
}
