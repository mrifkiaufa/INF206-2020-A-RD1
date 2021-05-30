<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Wallet;


class KelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('jenis','user');

        if($users->where('tombol_bayar',1)->count() > 0){
            $jumlahPemberi = $users->where('tombol_bayar',1)->count();
            $jumlahPenerima = $users->where('penerima', 1)->count();
            $jumlahZakat = self::jumlahZakat();
            $rataZakat = $jumlahZakat / $jumlahPenerima;

            $data = [
                'jumlahPemberi' => $jumlahPemberi,
                'jumlahPenerima' => $jumlahPenerima,
                'jumlahZakat' => $jumlahZakat,
                'rataZakat' => $rataZakat
            ];
        }
        else{
            $data = [
                'jumlahPemberi' => '-',
                'jumlahPenerima' => '-',
                'jumlahZakat' => '-',
                'rataZakat' => '-'
            ];
        }

        return view('admin.kelola.kelola', compact('data'));
    }

    public static function jumlahZakat(){
        $jumlah = 0;

        $data = Profile::all();

        foreach ($data as $pemberi) {
            global $jumlah;
            $jumlah += $pemberi->zakat_bayar;
        }

        return $jumlah;
    }
}
