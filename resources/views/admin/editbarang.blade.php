@extends('layouts.admin')

@section('content')

<h1>Data Barang</h1>
<hr>
<div class="editbarang">
    <div class="row">
        <div class="col-lg-6 editbarang">
            <h4>Edit Barang</h4>
            <hr>
            <form action="/updatedata/{{ $data->id }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" value="{{ $data->kode_barang }}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                  <input type="text" name="barang" class="form-control" id="exampleInputEmail1"  value="{{ $data->barang }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1"  value="{{ $data->jumlah }}">
                  </div>
                <div class="mb-3">
                    <label for="">Status Barang</label>
                    <div class="form-floating col-lg-12">
                        <select class="form-select" id="floatingSelect" name="status">
                            <option selected>Pilih Status</option>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </form>
        </div>
    </div>
</div>


@endsection