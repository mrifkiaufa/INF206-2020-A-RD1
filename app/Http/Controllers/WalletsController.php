<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\KelolaController;

class WalletsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->penerima > 0) {
            $tombol = User::where('id', Auth::user()->id)->first();

            if ($tombol->tombol_profile == '1') {
                if($tombol->tombol_dompet == '1') {
                    $data = Profile::where('id_users', Auth::user()->id)->first();

                    $zakatTerima = self::zakatTerima();

                    $data->update([
                        'zakat_terima' => $zakatTerima
                    ]);

                    return view('dompet.dompet', compact('data', 'zakatTerima'));
                }

                else {
                    Alert::warning('Fitur ini belum dibuka!', 'Admin akan membukanya saat semua zakat sudah terkumpul');
                    return redirect('/');
                }
            }

            else {
                Alert::warning('Akses ditolak!', 'Mohon lengkapi profil terlebih dahulu');
                return redirect('/profil');
            }
        }

        else {
            return redirect('/home');
        }
    }

    public static function zakatTerima(){
        $jumlahZakat = KelolaController::jumlahZakat();
        $totalPenerima = 0;

        $users = User::where('jenis','user')->where('penerima', 1)->get();

        foreach ($users as $user) {
            global $totalPenerima;
            $totalPenerima += Profile::where('id_users', $user->id)->first()->jumlah_keluarga;
        }

        $jumlahKeluarga = Profile::where('id_users', Auth::user()->id)->first()->jumlah_keluarga;

        $jumlahZakat = $jumlahZakat * $jumlahKeluarga / $totalPenerima;

        return $jumlahZakat;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
