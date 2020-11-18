<ul>
    <a href="#"><li>Profile <x-app.icon-profile class="profile"/></li></a>
    <a href="#"><li>About <x-app.icon-about class="about"/></li></a>
    <a href="#"><li>Service <x-app.icon-service class="service"/></li></a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit().alert('Yakin');">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</ul>
