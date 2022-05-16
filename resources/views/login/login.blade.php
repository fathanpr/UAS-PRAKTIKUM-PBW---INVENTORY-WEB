@extends('layouts.main')

@section('container')
<div class="center">
  <img src="img/logo.png" alt="">  
  <h1>Login</h1>
    <form action='/login' method="POST">
      @csrf
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
      <input type="submit" name='login' value='Login'>
      <div class="signup_link">
        Belum punya akun ? klik <a href="/register">disini</a>
      </div>
    </form>
  </div>
@endsection

