@extends('layouts.user')

@section('content')

<h1>Ubah Profil</h1>
<hr>
<div class="profil">
    <div class="row">
        <div class="col-lg-5">
            <form action="">
                <h6>Nama</h6>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <br>
                <h6>Username</h6>
                <h4>Username123</h4>
                <br>
                <h6>Email</h6>
                <h4>email123@student.unsika.ac.id</h4>
                <br>
                <h6>No Telp</h6>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="submit-button">
                    <button type="button" class="btn btn-success">Simpan</button>
                    <a href="/profil"><button type="button" class="btn btn-danger">Batalkan</button></a>
                </div>
            </form>
            
        </div>
    </div>
</div>
    

@endsection