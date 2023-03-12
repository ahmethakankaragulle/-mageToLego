<style>
    /* Dropdown Button */
    .dropbtn {
        background-color: #C70039;
        color: white;
        padding: 5px;
        margin-right: 2rem;
        font-size: 16px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        content: url("/storage/icons/user-2-svgrepo-com.svg");
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #185ADB;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        right: 1.5rem;
        margin-top: 10px;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #C70039;
        color: #fff;
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display: block;
    }

    svg:hover {
        fill: #185ADB;
    }

    .navbar {
        background-color: #ffff;
        -webkit-box-shadow: 0px 5px 20px -18px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 5px 20px -18px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 5px 20px -18px rgba(0, 0, 0, 0.75);
        padding: 0rem 3rem;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <img src="/storage/icons/logo.png" alt="logo" style="padding:5px 10px;">
        <a class="navbar-brand" href="{{ url('/') }}" style="font-weight:800; font-size:25px;"> <span style="color:#C70039;">Trans</span><span style="color:#185ADB;">Lego</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="margin-left:auto; margin-right:auto; font-size:18px;">
                <li class="nav-item" style="padding: 0px 20px;">
                    <a class="nav-link" aria-current="page" href="/#howitworks">Nasıl Çalışır</a>
                </li>
                <li class="nav-item" style="padding: 0px 20px;">
                    <a class="nav-link" href="/#pricing">Fiyatlandırma</a>
                </li>
                <li class="nav-item" style="padding: 0px 20px;">
                    <a class="nav-link" href="/#communication">İletişim</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <button onclick="dropdown()" class="dropbtn"><img class="dropimg" src="/storage/icons/user-2-svgrepo-com.svg" width="30" alt=""></button>

            @if (Route::has('login'))
            <div id="myDropdown" class="dropdown-content">
                @auth
                @if (Auth::user()->type() == 'admin')
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/user/profile') }}">Hesabım</a>
                @else
                <a href="{{ url('/user/orders') }}">Siparişlerim</a>
                <a href="{{ url('/user/profile') }}">Hesabım</a>
                @endif
                @else
                <a href="{{ route('login') }}">Giriş Yap</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Kayıt Ol</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        <a href="{{ url('/sepet') }}"><svg fill="#C70039" width="45px" height="45px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M8,3V7H21L18,17H6V4H4A1,1,0,0,1,4,2H7A1,1,0,0,1,8,3ZM6,20.5A1.5,1.5,0,1,0,7.5,19,1.5,1.5,0,0,0,6,20.5Zm9,0A1.5,1.5,0,1,0,16.5,19,1.5,1.5,0,0,0,15,20.5Z"></path>
                </g>
            </svg></a>
    </div>
</nav>

<script>
    function dropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }

    }
</script>