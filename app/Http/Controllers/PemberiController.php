<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;
use RealRashid\SweetAlert\Facades\Alert;

class PemberiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $dataProfil = Profile::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $dataProfil = Profile::all();
        }

        $dataUser =  User::all();
        $dataWallet = Wallet::all();
        return view('admin.pemberi.index', compact('dataProfil', 'dataUser', 'dataWallet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataProfil = Profile::where('id_users', $id)->first();
        $dataUser = User::where('id', $id)->first();
        return view('admin.pemberi.detail', compact('dataProfil', 'dataUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Profile::where('id_users', $id)->update([
            'nama'=> $request->nama,
            'nomorkk' => $request->nomorkk,
            'jumlah_keluarga' => $request->jumlah_keluarga,
            'alamat' => $request->alamat,
        ]);

        User::where('id', $id)->update([
            'username'=> $request->username,
            'email' => $request->email,
        ]);

        return redirect('/pemberi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Profile::where('id_users',$id)->delete();
        $idProfil = Profile::where('id_users',$id)->first()->id;
        Wallet::where('id_profiles',$idProfil)->delete();

        return redirect('/pemberi');
    }

    public function verif($id)
    {
        Profile::where('id_users', $id)->update([
            'status_bayar'=> 1
        ]);

        return redirect('/pemberi')->with('success', 'Pembayaran berhasil diverifikasi!');
    }

    public function tolak($id)
    {
        User::where('id', $id)->update([
            'tombol_bayar'=> 0
        ]);

        return redirect('/pemberi')->with('success', 'Pembayaran berhasil ditolak!');
    }

}
