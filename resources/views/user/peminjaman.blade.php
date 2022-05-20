@extends('layouts.user')

@section('content')
    <h1>Peminjaman</h1>
    <hr>
    <section class="peminjaman">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('ajukanpeminjaman') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Username</label>
                            <div class="col-lg">
                                <input class="form-control" type="text" value="{{ auth()->user()->username }}" name="username" readonly>
                                </div>
                            </div>
                        <div class="col-lg-6">
                          <label for="">Nama Barang</label>
                          <div class="form-floating">
                              <select class="form-select" id="floatingSelect" name="barang">
                                <option selected>Laptop</option>
                                <option value="Kamera">Kamera</option>
                                <option value="Tenda">Tenda</option>
                                <option value="HT">HT</option>
                              </select>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <label for="">Jumlah</label>
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" name="jumlah">
                                      <option selected>1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                    </select>
                                  </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="date">
                                    <label for="">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Durasi Peminjaman</label>
                                <div class="col-lg">
                                    <input class="form-control" type="text" placeholder="Masukkan Angka Saja" name="durasi">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="tombol-pinjam">
                                <button type="submit" class="btn btn-success">Ajukan Barang</button>
                            </div>
                        </div>
                  </form>
            </div>
        </div>
    </section>
    
        
@endsection