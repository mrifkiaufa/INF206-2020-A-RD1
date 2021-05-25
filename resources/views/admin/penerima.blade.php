@extends('template.template2')
@section('title','penerima')

@section('isi')

<div class="container" style="margin-left: 90px;">
     <h2 class="pt-4" style="font-weight: bold;  margin-bottom : 40px;">Daftar Penerima Zakat Fitrah Desa Ie Masen</h2>
     
     <div class="boxsrc" style= "margin-bottom : 20px">
            <input type="text" class= "inputsrc" placeholder=" Cari..." >
            <button class ="src" ><input type="image" src="/img/search.png" style="background: white;" width="23px" height="23px"></button>
     </div>

     <table class="table" border="1" >
            <tr bgcolor= "18BAFF" font-weight="bold">
                <th></th><th>Nama</th><th>Nomor KK</th> <th>Status</th>
            </tr>

            <tr> 
                <td><input type="button" id="button-adm" value="Detail" data-bs-toggle="modal" data-bs-target="#modalDetail"></td>
                <td>Saiful Anwar</td>
                <td>1254567801234567</td>
                <td> <input id="box-status" value="Berhasil"></td>
            </tr>

            <tr> 
                <td><input type="button" id="button-adm" value="Detail" data-bs-toggle="modal" data-bs-target="#modalDetail"></td>
                <td>Zhahir</td>
                <td>1454102645709146</td>
                <td> <input type="button" id="button-admin" value="Pending"></td>
            </tr>
     </table>              

</div>

<!-- Modal Detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: skyblue;">
            <table style = border : none;>
                <tbody>
                        <tr>
                            <td> <h5 class="card-tittle p-3">Username </h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; Zhahir</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Email</h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; Zhahir@gmail.com</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Nomor KK </h5></td><td><h5>:</h5> </td>
                            <td><h5>&emsp; 1454102645709146</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Jumlah Anggota Keluarga </h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; 4 </h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Alamat</h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; Ie Masen</h5></td>
                        </tr>

                        <tr>
                            <td> <h5 class="card-tittle p-3">Jumlah Terima</h5></td><td><h5>:</h5> </td>
                            <td><h5> &emsp; Rp 1.500.000</h5></td>
                        </tr>
                </tbody>
            </table>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="tombol" value="ovo" class="btn btn-primary">Edit</button>
                <button style="background: red; type="submit" name="tombol" value="ovo" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection