@extends('template.template')
@section('title','Bayar')

@section('isi')
    <div id="card-bayar">
    <div id="card-contentbay">
        <div class="container ms-5 mt-5">
            <p class="artikel">Nominal zakat yang harus dikeluarkan keluarga anda adalah <br>
            <h3 class="artikel">Rp. {{ number_format($bayar,2,',','.') }} </h3> <br>
            <h4 class="artikel">Pilih metode pembayaran : </h4>

            <button id="submit-ovo" type="button" data-bs-toggle="modal" data-bs-target="#modalOvo" >OVO</button>

            <button id="submit-gopay" type="button" data-bs-toggle="modal" data-bs-target="#modalGopay">gopay</button>

            <p class="art">*Setelah anda mentransfer, panitia akan memverifikasi terlebih dahulu pembayaran Anda.</p>
        </div>
    </div>
    </div>

    <!-- Modal Ovo -->
    <div class="modal fade" id="modalOvo" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <form action="/bayar" method="post">
                @csrf

                <div class="form-group">
                    <label for="nama_akun" class="form-label">Nama Akun Ovo</label>
                    <input type="text" class="form-control" id="nama_akun" name="nama_akun">
                </div>

                <div class="form-group">
                    <label for="nomor_hp" class="form-label">Nomor HP Ovo</label>
                    <input type="number" class="form-control" id="nomor_hp" name="nomor_hp">
                </div>

                <label class="form-label">Silahkan scan kode berikut untuk membayar </label>
                <br> </br>
                <center>
	        	    <img src="/img/ovo.jpg" alt="" class="img-responsive"  width="300px" >
	            </center>
        </div>
        <div class="modal-footer">
            <p class="arti">*pastikan nominal yang anda transfer sesuai dengan yang ditentukan.</p>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="tombol" value="ovo" class="btn btn-primary">Selesai</button>
            </form>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal Gopay -->
    <div class="modal fade" id="modalGopay" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <form action="/bayar" method="post">
                @csrf

                <div class="form-group">
                    <label for="nama_akun" class="form-label">Nama Akun Gopay</label>
                    <input type="text" class="form-control" id="nama_akun" name="nama_akun">
                </div>

                <div class="form-group">
                    <label for="nomor_hp" class="form-label">Nomor HP Gopay</label>
                    <input type="number" class="form-control" id="nomor_hp" name="nomor_hp">
                </div>

                <label class="form-label">Silahkan scan kode berikut untuk membayar </label>
                <br> </br>
                <center>
	        	    <img src="/img/gopay.jpg" alt="" class="img-responsive"  width="300px" >
	            </center>
        </div>
        <div class="modal-footer">
            <p class="arti">*pastikan nominal yang anda transfer sesuai dengan yang ditentukan.</p>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="tombol" value="gopay" class="btn btn-primary">Selesai</button>
            </form>
        </div>
        </div>
    </div>
    </div>

@endsection

