<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('img/user.png') }}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Admin</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">

                    <li class="">
                        <a href="/dasbor">
                            <i class='bx bxs-dashboard icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>


                    <li class="">
                        <a href="/datapengguna">
                            <i class='bx bxs-user-circle icon'></i>
                            <span class="text nav-text">Data Pengguna</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/databarang">
                            <i class='bx bx-box icon' ></i>
                            <span class="text nav-text">Data Barang</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/pengajuan">
                            <i class='bx bx-list-check icon' ></i>
                            <span class="text nav-text">Pengajuan</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="/statusbarang">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Status Barang</span>
                        </a>
                    </li>
                </ul>
            </div> 
            <div class="bottom-content">
                <li class="">
                    <a href="logout">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>       
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">
            @yield('content')
        </div>
    </section>


    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeText = body.querySelector(".mode-text");
      

      function visible(){
        dropdown = document.getElementsByClass("dropdown-list");
        dropdown.style.opacity = 1;
        dropdown.style.visibility = visible;

      }

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});


    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
