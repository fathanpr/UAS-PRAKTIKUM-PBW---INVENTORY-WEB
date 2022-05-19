@extends('layouts.user')

@section('content')
    <h1>Riwayat</h1>
    <hr>
    <section class="riwayat">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">

                    <tr>
                        <th>Id</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Durasi Peminjaman</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>STATUS</th>
                        <th>Pengembalian</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kamera</td>
                        <td>2</td>
                        <td>5 Hari</td>
                        <td>22/08/2022</td>
                        <td>24/08/2002</td>
                        <td>On Going</td>
                        <td><button type="button" class="btn btn-success tombol"><i class='bx bx-recycle'></i></button></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>HT</td>
                        <td>4</td>
                        <td>2 Hari</td>
                        <td>22/08/2022</td>
                        <td>23/08/2002</td>
                        <td>Dikembalikan</td>
                        <td><i class='bx bx-check'></i></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Tenda</td>
                        <td>2</td>
                        <td>1 Hari</td>
                        <td>22/08/2022</td>
                        <td>25/08/2002</td>
                        <td>Telat Dikembalikan</td>
                        <td><button type="button" class="btn btn-danger tombol"><i class='bx bx-recycle'></i></button></td>
                    </tr>
                  </table>
            </div>
        </div>
    </section>
    
        
@endsection