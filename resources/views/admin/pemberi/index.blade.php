@extends('template.template2')
@section('title','pemberi')

@section('isi')

<div class="container" style="margin-left: 90px;">
    <h2 class="pt-4" style="font-weight: bold;  margin-bottom : 40px;">Daftar Pemberi Zakat Fitrah Desa Ie Masen</h2>

    <div class="boxsrc" style= "margin-bottom : 20px">
        <input type="text" class= "inputsrc" placeholder=" Cari..." >
        <button class ="src" ><input type="image" src="/img/search.png" style="background: white;" width="23px" height="23px"></button>
    </div>

    <table class="table" border="1" >
        <tr bgcolor= "18BAFF" font-weight="bold">
            <th></th><th>Nama</th><th>Nomor KK</th> <th>Status</th>
        </tr>

        @foreach ($dataProfil as $profil)
            @if ($dataUser->where('id', $profil->id_users)->first()->jenis == 'user')
            <tr>
                <td><a href="pemberi/{{ $profil->id_users }}/edit" type="button" class="btn button-detail shadow">Detail</a></td>
                <td>{{$profil->nama}}</td>
                <td>{{$profil->nomorkk}}</td>
                @if ($dataUser->where('id', $profil->id_users)->first()->tombol_bayar == 1)
                    @if ($profil->status_bayar == 1)
                        <td><p class="sudah-bayar">Dikonfirmasi</p></td>
                    @else
                        <td>
                            <a href="pemberi/{{ $profil->id_users }}/tolak" type="button" class="btn shadow button-tolak">Tolak</a>
                            <a href="pemberi/{{ $profil->id_users }}/verif" type="button" class="btn shadow button-verifikasi">Verifikasi</a>
                        </td>
                    @endif
                @else
                    <td><p class="belum-bayar">Belum Bayar</p></td>
                @endif

            </tr>
            @endif
        @endforeach

        {{-- <tr>
            <td><button input type="button" class="btn shadow" id="button-adm" data-bs-toggle="modal" data-bs-target="#modalDetail">Detail</button></td>
            <td>Fernando</td>
            <td>1354102645709123</td>
            <td> <input id="box-status" value="Sudah Bayar"></td>
        </tr> --}}
    </table>
</div>
@endsection
