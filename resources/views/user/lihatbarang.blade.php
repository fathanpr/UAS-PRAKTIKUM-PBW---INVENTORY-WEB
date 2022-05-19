@extends('layouts.lihatbarang')

@section('table')

<h1>Lihat Barang</h1>
            <hr>

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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kamera</td>
                                <td>3</td>
                                <td>Tersedia</td>
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
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bendera Merah Putih</td>
                                <td>1</td>
                                <td>Tersedia</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Tenda</td>
                                <td>4</td>
                                <td>Tersedia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

@endsection