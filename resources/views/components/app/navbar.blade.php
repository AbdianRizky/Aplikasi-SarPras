<div class="container">
    <div class="row">
        <div class="logo">
            <x-app.logo/>
        </div>
        <div class="link">
            <x-app.search />
            <div class="batas"></div>
            <div class="profile-toggle">
                <div class="profile-link" >
                    <span>Username</span>
                    <img src="{{ asset('img/profile.jpg') }}" alt="profile">
                </div>
                <x-app.dropdown />
            </div>
        </div>
    </div>
</div>
