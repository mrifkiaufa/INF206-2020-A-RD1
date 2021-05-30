@extends('template.template2')
@section('title','penerima')

@section('isi')

<div class="container" style="margin-left: 90px;">
    <h2 class="pt-4" style="font-weight: bold;  margin-bottom : 40px;">Daftar Penerima Zakat Fitrah Desa Ie Masen</h2>

    <!-- <form class="boxsrc" action="/penerima" method="get"> -->
    <form class="boxsrc" action="/penerima" method="get">
        <input type="text" class= "inputsrc" name="search" placeholder=" Cari..." >
        <button class ="src" ><input type="image" src="/img/search.png" style="background: white;" width="23px" height="23px"></button>
    </form>

    <table class="table mt-3" border="1" >
        <tr bgcolor= "18BAFF" font-weight="bold">
            <th></th><th>Nama</th><th>Nomor HP</th> <th>Jenis Pembayaran</th> <th>Status</th>
        </tr>
        @forelse ($dataProfil as $profil)
            @if ($dataUser->where('id', $profil->id_users)->first()->jenis == 'user' &&
                $dataUser->where('id', $profil->id_users)->first()->penerima == 1)
            <tr>
                <td><a href="penerima/{{ $profil->id_users }}/edit" type="button" class="btn button-detail shadow">Detail</a></td>
                <td>{{$profil->nama}}</td>

                @if (isset($dataWallet->where('id_profiles', $profil->id)->first()->nomor_hp))
                    <td>{{$dataWallet->where('id_profiles', $profil->id)->first()->nomor_hp}}</td>
                    <td>{{$dataWallet->where('id_profiles', $profil->id)->first()->jenis}}</td>
                @else
                    <td>-</td>
                    <td>-</td>
                @endif

                @if ($dataUser->where('id', $profil->id_users)->first()->tombol_dompet == 1)
                    @if ($profil->status_terima == 1)
                        <td><p class="sudah-bayar">Dikonfirmasi</p></td>
                    @else
                        <td>
                            <a href="penerima/{{ $profil->id_users }}/verif" type="button" class="btn shadow button-verifikasi">Verifikasi</a>
                        </td>
                    @endif
                @else
                    <td><p class="none">-</p></td>
                @endif
            </tr>
            @endif
        @empty
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforelse
    </table>

    @if (isset($profil))
    <a href="/penerima/{{ $profil->id_users }}/aktif" type="submit" class="btn btn-success">Buka fitur dompet</a>
    @endif
</div>
@endsection
