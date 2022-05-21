@extends('layouts.admin')

@section('content')

<h1>Pengajuan</h1>
<hr>
<div class="pengajuan">
    <div class="table">
        <div class="table_header">
            <div>

            </div>
        </div>
        <div class="table_section">
            <table class=" table scroll table-striped">
                <thead>
                    <tr>
                        <th>USERNAME</th>
                        <th>BARANG</th>
                        <th>JUMLAH YANG DIAJUKAN</th>
                        <th>DURASI PEMINJAMAN</th>
                        <th>TANGGAL PEMINJAMAN</th>
                        <th>STATUS</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengajuan as $item)
                    <tr>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['barang'] }}</td>
                        <td>{{ $item['jumlah'] }}</td>
                        <td>{{ $item['durasi'] }}</td>
                        <td>{{ $item['tanggal_pinjam'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>
                            <form action="/setuju/{{$item['id']}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Setuju</button>
                            </form>
                            <form action="/tolak/{{$item['id']}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"> Tolak </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection