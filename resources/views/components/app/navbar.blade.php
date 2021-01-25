<div class="navbar">
    <a href="/etalase" class="logo">
        <h1>SarPras</h1>
        <p>SMKN 1 Cibinong</p>
    </a>

    <div class="wrapper__link">
        <x-app.search />
        <div class="dropdown-toggle">
            <div class="batas"></div>
            <div class="wrapper__menu">
                <div class="line__menu"></div>
                <div class="line__menu "></div>
                <div class="line__menu"></div>
            </div>
            <div class="profile">
                <span>Username</span>
                <img src="{{ asset('storage/img/profile.jpg') }}">
            </div>
        </div>
    </div>

    <x-app.dropdown />
</div>
