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
            <th></th><th>Nama</th><th>Nomor KK</th> <th>Status</th>
        </tr>

        @foreach ($dataProfil as $profil)
        @if ($dataUser->where('id', $profil->id_users)->first()->jenis == 'user')
        <tr>
            <td><a href="penerima/{{ $profil->id_users }}/edit" type="button" class="btn button-detail shadow">Detail</a></td>
            <td>{{$profil->nama}}</td>
            <td>{{$profil->nomorkk}}</td>
            @if ($dataUser->where('id', $profil->id_users)->first()->tombol_bayar == 1)
                @if ($profil->status_bayar == 1)
                    <td><p class="sudah-bayar">Dikonfirmasi</p></td>
                @else
                    <td>
                        <a href="penerima/{{ $profil->id_users }}/tolak" type="button" class="btn shadow button-tolak">Tolak</a>
                        <a href="penerima/{{ $profil->id_users }}/verif" type="button" class="btn shadow button-verifikasi">Verifikasi</a>
                    </td>
                @endif
            @else
                <td>
                    <p class="btn btn-warning">Pending</p>
                    <p class="btn btn-success">Berhasil</p>
                </td>
            @endif
        </tr>
        @endif
    @endforeach
    </table>   

    <button class="btn btn-success">Munculkan halaman dompet</button> 
</div>
@endsection