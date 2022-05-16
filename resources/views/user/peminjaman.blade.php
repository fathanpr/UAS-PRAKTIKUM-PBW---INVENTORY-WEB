@extends('layouts.user')

@section('content')
    <h1>Peminjaman</h1>
    <hr>
    <section class="peminjaman">
        <div class="row">
            <div class="col-lg-6">
                <label for="">Tabel Barang</label>
                <div class="table">
                    <div class="table_header">
                        <div>
    
                        </div>
                    </div>
                    <div class="table_section">
                        <table class=" table scroll table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Pinjam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kamera</td>
                                    <td>3</td>
                                    <td>Tersedia</td>
                                    <td><button type="button" class="btn btn-success"><i class='bx bx-check'></i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>HT</td>
                                    <td>8</td>
                                    <td>Tidak Tersedia</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sound System</td>
                                    <td>2</td>
                                    <td>Tersedia</td>
                                    <td><button type="button" class="btn btn-success"><i class='bx bx-check'></i></button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Bendera Merah Putih</td>
                                    <td>1</td>
                                    <td>Tersedia</td>
                                    <td><button type="button" class="btn btn-success"><i class='bx bx-check'></i></button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Tenda</td>
                                    <td>4</td>
                                    <td>Tersedia</td>
                                    <td><button type="button" class="btn btn-success"><i class='bx bx-check'></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                          <label for="">Nama Barang</label>
                          <div class="form-floating">
                              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Laptop</option>
                                <option value="1">Kamera</option>
                                <option value="2">Tenda</option>
                                <option value="3">HT</option>
                              </select>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <label for="">Jumlah</label>
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected>1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                    </select>
                                  </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="date">
                                    <label for="">Tanggal Pinjam</label>
                                <input type="date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Durasi Peminjaman</label>
                                <div class="col-lg">
                                    <input class="form-control" type="text" placeholder="Masukkan Angka Saja" aria-label="default input example">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="tombol-pinjam">
                                <button type="button" class="btn btn-success">Pinjam Barang</button>
                            </div>
                        </div>
                  </form>
            </div>
        </div>
    </section>
    
        
@endsection