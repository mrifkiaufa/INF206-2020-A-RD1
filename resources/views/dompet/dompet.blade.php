@extends('template.template')
@section('title','Dompet')

@section('isi')
    <div class="container" style="margin-left: 150px;">
        <h1 class="pt-4" style="color: dodgerblue; font-weight: bold;">Dompet Penerima Zakat</h1>
        <div class="card mt-4" style="width: 35rem; border-color: dodgerblue; border-radius: 5%; background-color: rgba(14, 159, 221, 0.35); box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr >
                            <td> <h5 class="card-tittle p-3">No KK </h5> </td>
                            <td> <h5 class="card-tittle p-3">:</h5> </td>
                            <td><h5 class="card-tittle p-3"> {{ $data->nomorkk }} </h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Nama </h5> </td>
                            <td> <h5 class="card-tittle p-3">:</h5> </td>
                            <td><h5 class="card-tittle p-3"> {{ $data->nama }} </h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Saldo </h5> </td>
                            <td> <h5 class="card-tittle p-3">:</h5> </td>
                            <td><h5 class="card-tittle p-3"> Rp {{number_format($zakatTerima,2,',','.')}} </h5></td>
                        </tr>
                    </tbody>
                </table>

                @if ($data->status_terima == 1)
                    <div id="box-dompet-success" >Status Pengiriman : Sudah Terkirim </div>
                @else
                    <div id="box-dompet-pending" >Status Pengiriman : Pending </div>
                @endif
                <p class="pt-4" style="color: red; font-weight: bold;">*Zakat akan kami transfer sesuai dengan akun ovo/gopay yang sudah kamu isi sebelumnya.</p>
            </div>
        </div>
    </div>
@endsection
