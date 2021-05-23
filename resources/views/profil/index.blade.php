@extends('template.template')
@section('title','Profil')

@section('isi')

<div class="ms-4 mt-4">
    <div class="card" style="width: 30rem;">
        <div class="card-header" style="background-image: linear-gradient(180deg, #2A9FD4 0%, #2E84EA 100%);">
            <h1 class="artikel" style="color: white">Profil</h1>
        </div>
        <ul class="list-group list-group-flush" style="background-color: rgba(21, 93, 122, 1);">
            <li class="list-group-item"><p class="artikel">Nama: {{ $data->nama }}</p></li>
            <li class="list-group-item"><p class="artikel">Nomor KK: {{ $data->nomorkk }}</p></li>
            <li class="list-group-item"><p class="artikel">Jumlah Anggota Keluarga: {{ $data->jumlah_keluarga }}</p></li>
            <li class="list-group-item"><p class="artikel">Alamat: {{ $data->alamat }}</p></li>
        </ul>
    </div>
</div>

@endsection
