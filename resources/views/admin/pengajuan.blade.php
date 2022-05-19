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
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>BARANG</th>
                        <th>JUMLAH YANG DIAJUKAN</th>
                        <th>DURASI PEMINJAMAN</th>
                        <th>TANGGAL PEMINJAMAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $key => $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{ auth()->user()->username }}</td>
                        <td>{{$data->barang}}</td>
                        <td>{{$data->jumlah}}</td>
                        <td>{{$data->durasi}}</td>
                        <td>{{$data->tanggal_pinjam}}</td>
                        <td>
                            <button type="button" class="btn btn-success">Setuju</button>
                            <button type="button" class="btn btn-danger">Tolak</button>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>1</td>
                        <td>fathan17</td>
                        <td>Kamera</td>
                        <td>1 Unit</td>
                        <td>2 Hari</td>
                        <td>22/05/2022</td>
                        <td>
                            <button type="button" class="btn btn-success">Setuju</button>
                            <button type="button" class="btn btn-danger">Tolak</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection