@extends('template.template')
@section('title','Profil')

@section('isi')

<div id="card" >
    <div id="card-content">
        <div id="card-title">
            <h1 class="formulir mb-3">Isi Profil</h1>
        </div>
        <form method="post" action="/profil" class="form">
            @csrf
        
            <label class='labelan' for='nama'>Nama Lengkap</label><br>
            <input class='inputan' id='nama' name='nama' type="text" value="{{ old('nama') }}" required autofocus><br>

            <label class='labelan' for='nomorkk'>Nomor Kartu Keluarga</label><br>
            <input class='inputan' id='nomorkk' name='nomorkk' type="text" value="{{ old('nomorkk') }}" required autofocus><br>

            <label class='labelan' for='jumlah_keluarga'>Jumlah Anggota Keluarga</label><br>
            <input class='inputan' id='jumlah_keluarga' name='jumlah_keluarga' type="number" value="{{ old('jumlah_keluarga') }}" required autofocus><br>

            <label class='labelan' for='alamat'>Alamat</label><br>
            <input class='inputan' id='alamat' name='alamat' type="text" value="{{ old('alamat') }}" required autofocus><br>
          
            <button id="submit-btn" type="submit" name="submit" value="Simpan" />Simpan</button>

        </form>
    </div>
</div>

@endsection
