@extends('template.template')
@section('title','Bayar')

@section('isi')
    <div class="container ms-4 mt-5">
        <h3 class="art">Status Pembayaran : </h3>
    </div>
    <div id="card-status">
        @if ($data->status_bayar == 1)
            <img src="/img/check.png" width="90" height="90" style="margin-left: 15rem; margin-top : 2rem;" >
            <div class ="fon mt-3"> Pembayaran anda sudah diverifikasi !</div>
            <div id="box-verif"> Terima Kasih telah membayar zakat melalui website e-zakat</div>
        @else
            <div class="fon mt-4"> Menunggu Verifikasi Pembayaran...</div>
            <img src="/img/tunggu.png" width="90" height="90" style="margin-left: 15rem; margin-top:2rem;" >
            <div id="box-pending">Harap menunggu, admin sedang meninjau pembayaran anda</div>
        @endif
    </div>

@endsection
