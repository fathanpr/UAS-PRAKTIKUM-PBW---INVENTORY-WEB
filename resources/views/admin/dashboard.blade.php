@extends('layouts.admin')

@section('content')

<h1>Dashboard</h1>
<hr>
<div class="dashboard">


<div class="row">
    <div class="col-lg-2 box-overview">
        <img src="{{ asset('img/user.png') }}" alt="">
    </div>
    <div class="col-lg-2 text-overview">
        <h3>78</h3>
        <h6>Pengguna Aktif</h6>
    </div>

    <div class="col-lg-2 box-overview">
        <img src="{{ asset('img/user.png') }}" alt="">
    </div>
    <div class="col-lg-2 text-overview">
        <h3>1</h3>
        <h6>Admin Aktif</h6>
    </div>

    <div class="col-lg-2 box-overview">
        <img src="{{ asset('img/invent.png') }}" alt="">
    </div>
    <div class="col-lg-2 text-overview">
        <h3>53</h3>
        <h6>Barang</h6>
    </div>
</div>

<div class="wave">
    <img src="{{ asset('img/footer.svg') }}" alt="">
</div>

</div>

@endsection