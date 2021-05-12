@extends('template.template')
@section('title','Profil')

@section('isi')

<div class="ms-4 mt-4">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            Profil
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama: {{ $data->nama }}</li>
            <li class="list-group-item">Nomor KK: {{ $data->nomorkk }}</li>
            <li class="list-group-item">Jumlah Anggota Keluarga: {{ $data->jumlah_keluarga }}</li>
            <li class="list-group-item">Alamat: {{ $data->alamat }}</li>
        </ul>
    </div>
</div>

@endsection
