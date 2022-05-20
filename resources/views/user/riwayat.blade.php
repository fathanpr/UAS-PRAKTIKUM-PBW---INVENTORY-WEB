@extends('layouts.user')

@section('content')
    <h1>Riwayat</h1>
    <hr>
    <section class="riwayat">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Durasi Peminjaman</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['barang'] }}</td>
                        <td>{{ $item['jumlah'] }}</td>
                        <td>{{ $item['durasi'] }}</td>
                        <td>{{ $item['tanggal_pinjam'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>
                            <a href='' type="button" class="btn btn-success">Cetak</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            
                  </table>
            </div>
        </div>
    </section>
    
        
@endsection