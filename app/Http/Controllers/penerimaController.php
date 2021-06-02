<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;
use App\Http\Controllers\KelolaController;
use RealRashid\SweetAlert\Facades\Alert;

class PenerimaController extends Controller
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
        return view('admin.penerima.index', compact('dataProfil', 'dataUser', 'dataWallet'));
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
        return view('admin.penerima.detail', compact('dataProfil', 'dataUser'));
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

        return redirect('/penerima');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idProfil = Profile::where('id_users',$id)->first()->id;
        User::destroy($id);
        Profile::where('id_users',$id)->delete();
        Wallet::where('id_profiles',$idProfil)->delete();

        return redirect('/penerima');
    }

    public function verif($id)
    {
        Profile::where('id_users', $id)->update([
            'status_terima'=> 1
        ]);

        return redirect('/penerima')->with('success', 'Penyaluran zakat diverifikasi!');
    }

    public function aktif()
    {
        if(User::where('jenis', 'user')->count() == Profile::where('status_bayar', 1)->count()){
            User::where('jenis', 'user')->where('penerima', 1)->update([
                'tombol_dompet' => 1
            ]);

            $data = User::where('tombol_dompet', 1)->get();

            foreach($data as $profil) {
                Profile::where('id_users',$profil->id)->update([
                    'zakat_terima' => KelolaController::jumlahZakat() * Profile::where('id_users',$profil->id)->first()->jumlah_keluarga / self::jumlahPenerima()
                ]);
            }

            Alert::success('Fitur dompet dibuka!', 'Sekarang kamu dapat menkonfirmasi penyaluran zakat.');
        }
        else{
            Alert::error('Akses ditolak!', 'Verifikasi dulu semua pembayaran.');
        }
        return redirect('/penerima');
    }

    public static function jumlahPenerima(){
        $totalPenerima = 0;

        $users = User::where('jenis','user')->where('penerima', 1)->get();

        foreach ($users as $user) {
            global $totalPenerima;
            $totalPenerima += Profile::where('id_users', $user->id)->first()->jumlah_keluarga;
        }

        return $totalPenerima;
    }
}
