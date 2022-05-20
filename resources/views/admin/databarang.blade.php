@extends('layouts.admin')

@section('content')

<h1>Data Barang</h1>
<hr>
<div class="databarang">
    <div class="row">
        <div class="col-lg-6">
            <h4>Tabel Barang</h4>
            <hr>
            <div class="row">
                <div class="d-flex justify-content-end">
                    <div class="col-lg-6">
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
                <div class="table_section ">
                    <table class=" table scroll table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A021</td>
                                <td>Kamera</td>
                                <td>12</td>
                                <td>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>A022</td>
                                <td>Tenda</td>
                                <td>15</td>
                                <td>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>A023</td>
                                <td>Sound System</td>
                                <td>3</td>
                                <td>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>A024</td>
                                <td>Spanduk</td>
                                <td>6</td>
                                <td>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <td>A025</td>
                                <td>Laptop</td>
                                <td>1</td>
                                <td>
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 editbarang">
            <h4>Input Barang</h4>
            <hr>
            <form action="{{ route('tambahbarang') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                  <input type="text" name="barang" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1">
                  </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
        </div>
    </div>
</div>


@endsection