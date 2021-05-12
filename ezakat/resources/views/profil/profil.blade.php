@extends('template.template')
@section('title','Profil')

@section('isi')

    <div id="card">
    <div id="card-content">
        <div id="card-title">
        <h1 class="formulir mb-3">Isi Profil</h1>
        </div>
        <form method="post" action="/profil" class="form">
            @csrf

            <label for='nama'>Nama Lengkap</label><br>
            <input id='nama' name='nama' type="text" value="{{ old('nama') }}" required autofocus><br>

            <label for='nomorkk'>Nomor Kartu Keluarga</label><br>
            <input id='nomorkk' name='nomorkk' type="text" value="{{ old('nomorkk') }}" required autofocus><br>

            <label for='jumlah_keluarga'>Jumlah Anggota Keluarga</label><br>
            <input id='jumlah_keluarga' name='jumlah_keluarga' type="number" value="{{ old('jumlah_keluarga') }}" required autofocus><br>

            <label for='alamat'>Alamat</label><br>
            <input id='alamat' name='alamat' type="text" value="{{ old('alamat') }}" required autofocus><br>

            <button id="submit-btn" type="submit" name="submit" value="Simpan" />Simpan</button>
        </form>
        </div>
        <div class="mt-4">
            <h4 style="color: red">*Data yang sudah disimpan tidak bisa diedit lagi</h4>
        </div>
    </div>

@endsection
