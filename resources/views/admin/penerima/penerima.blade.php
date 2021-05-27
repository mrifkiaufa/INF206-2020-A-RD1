@extends('template.template2')
@section('title','penerima')

@section('isi')

<div class="container" style="margin-left: 90px;">
     <h2 class="pt-4" style="font-weight: bold;  margin-bottom : 40px;">Daftar Penerima Zakat Fitrah Desa Ie Masen</h2>
     
     <!-- <form class="boxsrc" action="/penerima" method="get"> -->
     <form class="boxsrc" action="" method="get">
         <input type="text" class= "inputsrc" name="cari" placeholder=" Cari..." >
         <button class ="src" ><input type="image" src="/img/search.png" style="background: white;" width="23px" height="23px"></button>
     </form>

     <table class="table mt-3" border="1" >
            <tr bgcolor= "18BAFF" font-weight="bold">
                <th>Nama</th><th>Nomor KK</th> <th>Status</th>
            </tr>

            <tr> 
            <td><a href="#" style="text-decoration: none; color: black;" data-bs-toggle="modal" data-bs-target="#modalDetail">Saiful Anwar</a></td>
                <td>1254567801234567</td>
                <td>
                    <form action="" method="post">
                        <div class="form-group">
                            <select class="btn" id="status" name="status">
                                <option>Pending</option>
                                <option>Berhasil</option>
                            </select>
                        </div>
                    </form>
                </td>
            </tr>

            <tr> 
                <td><a href="#" style="text-decoration: none; color: black;" data-bs-toggle="modal" data-bs-target="#modalDetail">Zhahir</a></td>
                <td>1454102645709146</td>
                <td>
                    <form action="" method="post">
                        <div class="form-group">
                            <select class="btn" id="status" name="status">
                                <option>Pending</option>
                                <option>Berhasil</option>
                            </select>
                        </div>
                    </form>
                </td>
            </tr>
     </table>              

</div>

<!-- Modal Detail -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <table>
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
                <button type="submit" name="tombol" value="ovo" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection