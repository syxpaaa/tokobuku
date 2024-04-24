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

    public function edit($id)
    {
        $p = new buku();
        return view('buku.edit', ['editbu' => $p->find($id)]);
    }
    public function update(Request $request, $id)
    {
        $p = new buku();
        $validasi = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'diskon' => 'required',
        ]);
        $p = $p->find($id)->update($validasi);
        return redirect('buku')->with('Pesan', 'Update Buku Berhasil');
    }

    public function hapus($id)
    {
        $p = new buku();
        $p = $p->find($id);
        $p->delete();
        return back();
    }
}
