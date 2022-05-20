@extends('layouts.admin')

@section('content')

<h1>Status Barang</h1>
<hr>
<div class="pengajuan">
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
                        <th>Peminjam</th>
                        <th>Barang</th>
                        <th>Jumlah (Dipinjam)</th>
                        <th>Durasi</th>
                        <th>Tanggal Pinjam</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['barang'] }}</td>
                        <td>{{ $item['jumlah'] }}</td>
                        <td>{{ $item['durasi'] }}</td>
                        <td>{{ $item['tanggal_pinjam'] }}</td>
                        <td>{{ $item['status'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection