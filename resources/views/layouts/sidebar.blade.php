<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('img/user.png') }}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">USERNAME</span>
                    <span class="profession">User</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="">
                        <a href="#">
                            <i class='bx bxs-user-circle icon'></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class='bx bx-box icon' ></i>
                            <span class="text nav-text">Lihat Barang</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class='bx bx-list-check icon' ></i>
                            <span class="text nav-text">Peminjaman</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class='bx bx-calendar-exclamation icon' ></i>
                            <span class="text nav-text">Pengembalian</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Riwayat</span>
                        </a>
                    </li>
                </ul>
            </div> 
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>       
            </div>
        </div>
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">
            @yield('lihatbarang')
        </div>
    </section>


    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeText = body.querySelector(".mode-text");


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

</body>
</html>
