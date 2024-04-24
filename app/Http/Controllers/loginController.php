<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function ceklogin(Request $request)
    {
        $p = new kasir();
        if ($p->where('username', $request->input('username'))->where('password', $request->input('password'))->exists()) {
            $petugas = $p->first();
            session(['petugas' => $petugas]);
            return redirect('/');
        }
        return back()->with('pesan', 'username dan password belum terdaftar');
        
    }
    public function keluar()
    {
        session()->flush();
        //return back();
        return redirect('/login');
    }
}
