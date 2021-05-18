<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tombol = User::where('id', Auth::user()->id)->first()->tombol_profile;
        $data = Profile::where('id_users', $tombol)->first();

        if($tombol == '1')
            return view('profil.index', compact('data'));

        else
            return $this->create();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'nomorkk' => ['required', 'max:16'],
            'jumlah_keluarga' => 'required',
            'alamat' => 'required',
        ]);

        $data = Profile::create([
            'nama' => $request->nama,
            'nomorkk' => $request->nomorkk,
            'jumlah_keluarga' => $request->jumlah_keluarga,
            'alamat' => $request->alamat,
            'id_users' => Auth::user()->id,
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->tombol_profile ='1';
        $user->save();

        return view('profil.index', compact('data'));
    }
}
