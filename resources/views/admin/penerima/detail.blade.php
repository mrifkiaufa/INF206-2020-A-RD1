@extends('template.template2')
@section('title','penerima')

@section('isi')
<!-- Modal Detail -->

        <div class="container mt-4 modal-content" style="background: skyblue;">
            <table style = border : none;>
                <tbody>
                        <tr>
                            <td> <h5 class="card-tittle p-3">Username </h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; {{$dataUser->username}}</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Email</h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; {{$dataUser->email}}</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Nomor KK </h5></td><td><h5>:</h5> </td>
                            <td><h5>&emsp; {{$dataProfil->nomorkk}}</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Jumlah Anggota Keluarga </h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; {{$dataProfil->jumlah_keluarga}} </h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Alamat</h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; {{$dataProfil->alamat}}</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Isi Dompet</h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; Rp. {{number_format($dataProfil->zakat_terima,2,',','.')}}</h5></td>
                        </tr>
                </tbody>
            </table>

            <div class="modal-footer">
                <a href="/penerima" type="button" class="btn btn-secondary">Kembali</a>
                <button type="submit" name="tombol" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formDataEdit">Edit</button>
                <form action="/penerima/{{ $dataProfil->id_user }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn bg-danger" style="text-decoration:none;">Hapus
                    </button>
                </td>
                </form>
            </div>
        </div>


<div class="modal fade" id="formDataEdit" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Edit data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/penerima/{{ $dataProfil->id_users }}" method="post">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ $dataUser->username }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $dataUser->email }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $dataProfil->nama }}">
                </div>
                <div class="mb-3">
                    <label for="nomorkk" class="form-label">Nomor KK</label>
                    <input type="text" class="form-control" id="nomorkk" name="nomorkk" placeholder="Nomor KK" value="{{ $dataProfil->nomorkk }}">
                </div>
                <div class="mb-3">
                    <label for="jumlah_keluarga" class="form-label">Jumlah Anggota Keluarga</label>
                    <input type="number" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Jumlah Anggota Keluarga" value="{{ $dataProfil->jumlah_keluarga }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $dataProfil->alamat }}">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
