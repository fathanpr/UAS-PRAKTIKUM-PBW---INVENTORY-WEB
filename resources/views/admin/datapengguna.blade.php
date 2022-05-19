@extends('layouts.admin')

@section('content')

<h1>Data Pengguna</h1>
<hr>
<div class="datapengguna">
    <div class="row">
        <div class="d-flex justify-content-end">
            <div class="col-lg-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Barang..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-success" type="button" id="button-addon2"><i class='bx bx-search-alt-2 icon'></i></button>
                  </div>
            </div>
        </div>
    </div>
    <div class="table">
        <div class="table_header">
            <div>

            </div>
        </div>
        <div class="table_section">
            <table class=" table scroll table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Fathan</td>
                        <td>fathan17</td>
                        <td>fathan@student.unsika.ac.id</td>
                        <td>08987335266</td>
                        <td>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection