<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <title>BEMITORY</title>
  </head>
  <body>
  
  <section id="landing">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#hero">Beranda</a>
            <a class="nav-link" href="#about">Tentang</a>
            <a class="nav-link" href="#contactus">Hubungi Kami</a>
            <a class="btn btn-success tombol" href="/register">Daftar</a>
          </div>
        </div>
      </nav>
    <script type="text/javascript">
      window.addEventListener("scroll", function(){
      var nav = document.querySelector("nav");
      nav.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
  
  <!-- end Navbar -->

  <div class="container">
    <div class="hero" id="hero">
      <div class="row">
      <div class="col-lg-6">
        <h2>Selamat Datang di</h2>
        <h1>BEMITORY</h1>
        <p>Situs Inventaris Barang milik BEM Fasilkom UNSIKA</p>
        <a class="btn btn-success tombol" href="#" >Mulai Pinjam Barang</a>
      </div>
      <img class="col-lg-6" src="{{ asset('img/bg-landing.png') }}" alt="">
      </div>
    </div>
  </div>
  </section>

  <section id="about">
    <div class="container">
      <h1 id="abouth1">Tentang Kami</h1>
      <p>BEMITORY merupakan sebuah aplikasi berbasis website milik BEM Fasilkom yang diperuntukan untuk memperoleh kemudahan dalam mengelola dan mengajukan peminjaman barang inventaris milik BEM Fasilkom kepada seluruh warga fasilkom secara efisien dan mudah, fitur ini diciptakan untuk memberikan kemudahan kepada setiap warga fasilkom yang ingin melihat ketersediaan barang dan melakukan peminjaman atas barang-barang yang dimiliki BEM kapanpun dan dimanapun hanya dengan mengakses website ini dan mengajukan peminjaman secara online.</p>
      <div class="row jusitfy-content-center">
        <h4>3 TUJUAN BEMITORY</h4>
        <div class="col-3 info-panel">
          <img src="{{ asset('img/invent.png') }}" alt="">
          <p>Invetaris Online</p>
        </div>

        <div class="col-3 info-panel">
          <img src="{{ asset('img/time.png') }}" alt="">
          <p>Efisiensi Waktu</p>
        </div>

        <div class="col-3 info-panel">
         <img src="{{ asset('img/easy.png') }}" alt="">
         <p>Flexsibilitas</p>
        </div>

      </div>
    </div>
  </section>

  <section id="contactus">
    <div class="container">
      <h1>Hubungi Kami</h1>
      <p>Apabila ada kendala mengenai website maupun ingin menanyakan mengenai barang inventaris, bisa hubungi kami melalui media dibawah ini :</p>
      <div class="row justify-content-center hubungi-panel">

        <div class="col-4 hubungi">
          <a href="https://web.whatsapp.com" target="_blank"><img class="gambar" src="{{ asset('img/whatsapp.svg') }}" alt=""></a>
        </div>

        <div class="col-4 hubungi">
          <a href="https://www.google.com/intl/id/gmail/about/" target="_blank"><img class="gambar" src="{{ asset('img/gmail2.svg') }}" alt=""></a>
        </div>

        <div class="col-4 hubungi">
          <a href="https://web.telegram.org/k/" target="_blank"><img class="gambar" src="{{ asset('img/telegram.svg') }}" alt=""></a>
        </div>

      </div>
    </div>
  </section>
  
  <section id="footer">
  <div class="container">
    <div class="footer-img">
      <img src="img/logo.png" alt="">
    </div>
      <div class="row footer">
        <div class="col text-center">
          <p>2022 All Rights Reserved by Kelompok 3</p>
        </div>
      </div>
  </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  </body>
</html>