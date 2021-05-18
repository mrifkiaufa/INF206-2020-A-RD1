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
                            <td><h5 class="card-tittle p-3"> 729123498721 </h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Nama </h5> </td>
                            <td> <h5 class="card-tittle p-3">:</h5> </td>
                            <td><h5 class="card-tittle p-3"> Saiful Anwar </h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Saldo </h5> </td>
                            <td> <h5 class="card-tittle p-3">:</h5> </td>
                            <td><h5 class="card-tittle p-3"> Rp 1.500.000 </h5></td>
                        </tr>
                    </tbody>
                </table>

                <div id="box-dompet" >Status Pengiriman : Sudah Terkirim </div>
                <p class="pt-4" style="color: red; font-weight: bold;">*Zakat akan kami transfer sesuai dengan akun ovo/gopay yang sudah kamu isi sebelumnya.</p>
            </div>
        </div> 
    </div>
@endsection