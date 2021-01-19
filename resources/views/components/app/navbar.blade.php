<div class="navbar">

    <!--Mobile-->
    <a href="/etalase" class="logo">
        <h1>SarPras</h1>
        <p>SMKN 1 Cibinong</p>
    </a>


    <div class="profile-toggle">
        <div class="wrapper__menu">
            <div id="1" class="line__menu half start"></div>
            <div id="2" class="line__menu "></div>
            <div id="3" class="line__menu half end"></div>
        </div>
        <div class="profile">
            <span>Username</span>
            <img src="{{ asset('storage/img/profile.jpg') }}">
        </div>
    </div>

    <nav id="nav">
        <a href="/profil" class="nav__item">
            <span id="userOnNav">Username</span>
            <x-icons.profil />
            <img src="{{ asset("storage/img/profile.jpg") }}">
        </a>
        <a href="/etalase" class="nav__item">
            <span>Etalase</span>
            <x-icons.etalase/>
        </a>
        <a href="/tentang-kami" class="nav__item">
            <span>Tentang Kami</span>
            <x-icons.tentang-kami />
        </a>
        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav__item">
            <span>Keluar</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </nav>
    {{-- <x-app.logo/> --}}
    {{-- <div class="link">
        <x-app.search />
        <div class="batas"></div>
        <div class="profile-toggle">
            <div class="profile-link" >
                <span>Username</span>
                <img src="{{ asset('storage/img/profile.jpg') }}" alt="profile">
            </div>
            <x-app.dropdown />
        </div>
    </div> --}}
</div>
