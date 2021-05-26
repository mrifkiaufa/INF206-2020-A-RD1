<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Buat tabel dlm databse dlu gan baru pkk Models

// use App\Models\Profile;
// use App\Models\User;
// use App\Models\Wallet;
// use Illuminate\Support\Facades\Auth;
// use RealRashid\SweetAlert\Facades\Alert;

class penerimaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')) {
            $data_siswa = \App\Siswa::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }
        else {
            $data_siswa = \App\Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
}