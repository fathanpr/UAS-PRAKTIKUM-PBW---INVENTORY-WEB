@extends('layouts.main')

@section('container')
<div class="center">
  <img src="img/logo.png" alt="">  
  <h1>Login</h1>

    @if(session()->has('Registrasi Sukses'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('Registrasi Sukses') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    
    <form action='/login' method="POST">
      @csrf
      <div class="txt_field">
        <input type="email" name="email" @error('email') is-invalid @enderror id="email" required value="{{ old ('email') }}">
        <span></span>
        <label>Email</label>
      </div>
      @error('email')
        <div>
          {{ $message }}
        </div>
        @enderror
      <div class="txt_field">
        <input type="password" name="password" id="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" name='login' value='Login'>
      <div class="signup_link">
        Belum punya akun ? klik <a href="/register">disini</a>
      </div>
    </form>
  </div>
@endsection

