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
