@extends('template.template')
@section('title','Bayar')

@section('isi')
    <div class="container ms-4 mt-5">
        <h3 class="art">Status Pembayaran : </h3>
    </div>
    <div id="card-status">
        @if ($data->status_bayar == 1)
            <div id="box-verif"> Pembayaran anda sudah diverifikasi.</div>
        @else
            <div id="box-pending"> Silahkan tunggu, admin sedang meninjau pembayaran anda.</div>
        @endif
    </div>

@endsection
