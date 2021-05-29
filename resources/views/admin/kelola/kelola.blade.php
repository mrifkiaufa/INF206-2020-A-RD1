@extends('template.template2')
@section('title','Kelola')

@section('isi')
<div class="container" style="margin-left: 90px;">
    <h2 class="pt-4" style="font-size: 40px;  margin-bottom : 40px; font-weight: bold">Pengelolaaan Zakat Desa Ie Masen</h2>

    <div class="bgKelola">
        <p class="kelolaText"><br> Jumlah pemberi zakat adalah &ensp;: {{ $data['jumlahPemberi'] }}</p>
        <p class="kelolaText"> Jumlah zakat yang terkumpul &ensp;: Rp. {{ number_format($data['jumlahZakat'],2,',','.') }}</p>
        <p class="kelolaText"> Jumlah Penerima zakat &emsp;&emsp;&emsp;&ensp;: {{ $data['jumlahPenerima'] }}</p>
        <p class="kelolaText"> Rata-Rata Zakat Tiap Penerima : Rp {{ number_format($data['rataZakat'],2,',','.') }}</p>
    </div>

</div>

@endsection
