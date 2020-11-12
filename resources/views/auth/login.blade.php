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
                <div class="formel">
                    <x-inputs.label for="email" value="{{ __('Email') }}"/>
                    <x-inputs.form-input type="email" name="email"  id="email" class="@error('email') is-invalid @enderror" placeholder="Masukan Email"  autocomplete="email" />
                    @error('email')
                        <span class="is-invalid">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!--! Password -->
                <div class="formel">
                    <x-inputs.label for="password" value="{{ __('Password') }}"/>
                    <x-inputs.form-input type="password" name="password" id="password" placeholder="Masukan Password" autocomplete="off" maxlength="16" />
                    @error('password')
                        <span class="is-invalid">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="lupa-pw">{{ __('Lupa Password?') }}</a>
                @endif

                <div class="row-btn-login">
                    <!--! Remember me -->
                    <div class="remember-me">
                        <x-inputs.checkbox name="remember" id="remember" checked />
                        <x-inputs.label for="remember" value="{{ __('Remember Me') }}"/>
                    </div>

                    <!--! Button -->
                    <x-inputs.btn class="btn-login">
                        {{ __('Masuk') }}
                    </x-inputs.btn>
                </div>
            </form>

            <!--! Link -->
            <div class="register-section">
                <x-login.batas />
                <div class="daftar-link">
                    <a href="{{ route('register') }}">Daftarkan kelasmu disini!</a>
                </div>
            </div>
        </div>

        <!--! images -->
        <x-login.img-login/>
    </div>
</x-auth-layout>
