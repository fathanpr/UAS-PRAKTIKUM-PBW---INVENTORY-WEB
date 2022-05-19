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
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
            <a class="nav-link" href="#abouth1">Tentang</a>
            <a class="nav-link" href="#contactus">Hubungi Kami</a>
          </div>
        </div>
      </nav>
    <script type="text/javascript">
      window.addEventListener("scroll", function(){
      var nav = document.querySelector("nav");
      nav.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>

    <div class="container mt-4">
      @yield('container')
    </div>
  
  <!-- end Navbar -->
  </section>

  <section id="footer">
  <div class="container">
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