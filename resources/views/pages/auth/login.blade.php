<x-auth-layout>
    <div class="login-form">
        <div class="form-body">

            <!--! Title -->
            <div class="header">
                <h4 class="title title-header">Selamat Datang Di</h4>
                <h1 class="title title-main">SarPras</h1>
                <h4 class="title title-footer">SMKN 1 Cibinong</h4>
            </div>

            <form method="post" action="{{ route('login') }}">
                @csrf
                <!--! email -->
                <x-auth.input type="email" field="email" label="Email" />

                <!--! Password -->
                <x-auth.input type="password" field="password" label="Password" />
                <a href="{{ route('password.request') }}" class="goto-fpw">{{ __('Lupa Password?') }}</a>

                <div class="row-btn-login">
                    <!--! Remember me -->
                    <div class="remember-me">
                        <x-auth.checkbox type="checkbox" for="remember" label="Remember me" />
                    </div>
                    <!--! Button -->
                    <x-auth.btn label="Masuk" />
                </div>
            </form>

            <!--! Link -->
            <div class="goto-register">
                <div class="batas"></div>
                <a href="{{ route('register') }}">Daftarkan kelasmu disini!</a>
            </div>
        </div>

        <!--! images -->
        <x-auth.form-img for="login" />
    </div>
</x-auth-layout>
