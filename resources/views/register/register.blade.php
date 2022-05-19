@extends('layouts.main')

@section('container')
<div class="center">
    <img src="img/logo.png" alt="">  
    <h1>Registrasi</h1>
    <form action='/register' method="POST">
        @csrf
    <div class="txt_field">
        <input type="text" name="username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="email" name="email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="txt_field">
        <input type="password" name="confirm_password" required>
        <span></span>
        <label>Confirm Password</label>
      </div>
      <input type="submit" name='register' value='Registrasi'>
    </form>
    <div class="signup_link">
        Sudah Punya Akun ? klik <a href="/login">disini</a>
      </div>
  </div>
@endsection

