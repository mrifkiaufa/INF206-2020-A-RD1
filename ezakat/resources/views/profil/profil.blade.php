@extends('template.template')
@section('title','Profil')

@section('isi')

     <div id="card">
        <div id="card-content">
            <div id="card-title">
            <h1 class="formulir mb-3">Isi Profil</h1>
            </div>
            <form method="post" class="form"> 
              <label>Nama Lengkap</label><br>
              <input type="text"><br>
              <label>Nomor Kartu Keluarga</label><br>
              <input type="text"><br>
              <label>Jumlah Anggota Keluarga</label><br>
              <input type="number"><br>
              <label>Alamat</label><br>
              <input type="text"><br>
              <input id="submit-btn" type="submit" name="submit" value="Simpan" />
            </form>
          </div>
     </div>
 
@endsection