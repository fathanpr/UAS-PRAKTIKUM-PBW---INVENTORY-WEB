@extends('layouts.user')

@section('content')

<h1>Ubah Profil</h1>
<hr>
<div class="profil">
    <div class="row">
        <div class="col-lg-5">
            <form action="{{ route('updateprofil') }}" method="POST">
                @method("put")
                @csrf
                <h6>Nama</h6>
                <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}">
                <br>
                <h6>Username</h6>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" value="{{ auth()->user()->username }}" readonly>
                <br>
                <h6>Email</h6>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" value="{{ old('email', Auth::user()->email) }}" readonly>
                <br>
                <h6>No Telp</h6>
                <input type="text" class="form-control" name="notelp" id="exampleInputEmail1" value="{{ auth()->user()->notelp }}">
                <div class="submit-button">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('profil') }}"><button type="submit" class="btn btn-danger">Batalkan</button></a>
                </div>

            </form>
        </div>
    </div>
</div>
    

@endsection