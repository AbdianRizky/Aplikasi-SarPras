<x-auth-layout>
    <div class="register-form">
        <div class="form-body">

            <div class="row-back">
                <a href="/login">
                    <div class="link-back">
                        <x-arrow-back/>
                        <span>Kembali</span>
                    </div>
                </a>
            </div>

            <!--! Title -->
            <div class="header">
                <h1 class="title title-register">Daftarkan Kelasmu!</h1>
            </div>

            <form method="post" action="{{ route('register') }}">
                @csrf
                <!--! Nama -->
                <div class="formel form-regis">
                    <x-inputs.label for="name" value="{{ __('Nama Lengkap') }}"/>
                    <x-inputs.form-input type="text" name="name" id="name" class="form-input" placeholder="Masukan Nama" :value="old('name')" autocomplete="off" required autofocus/>
                    @error('name')
                        <span>
                            <strong> {{ $message }} </strong>
                        </span>
                    @enderror
                </div>

                <div class="section-kelas">

                    <!--! Angkatan -->
                    <div class="formel form-regis">
                        <x-inputs.label for="angkatan" value="{{ __('Angkatan') }}"/>
                        <x-inputs.select-angkatan />
                    </div>

                    <!--! Jurusan -->
                    <div class="formel form-regis">
                        <x-inputs.label for="jurusan" value="{{ __('Jurusan') }}"/>
                        <x-inputs.select-jurusan />
                    </div>

                    <!--! Kelas -->
                    <div class="formel form-regis">
                        <x-inputs.label for="kelas" value="{{ __('Kelas') }}"/>
                        <x-inputs.select-kelas />
                    </div>
                </div>

                <!--! email -->
                <div class="formel form-regis">
                    <x-inputs.label for="email" value="{{ __('Email') }}"/>
                    <x-inputs.form-input type="text" name="email" id="email" class="form-input" placeholder="Masukan Email" :value="old('email')" autocomplete="off" required />
                    @error('email')
                        <span>
                            <strong> {{ $message }} </strong>
                        </span>
                    @enderror
                </div>

                <div class="section-password">

                    <!--! Password -->
                    <div class="formel form-regis">
                        <x-inputs.label for="password" value="{{ __('Password') }}"/>
                        <x-inputs.form-input type="password" name="password" id="password" class="form-input" placeholder="Masukan Password" autocomplete="off" maxlength="16" required />
                        @error('password')
                            <span>
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <!--! Konfirmasi -->
                    <div class="formel form-regis">
                        <x-inputs.label for="password" value="{{ __('Konfirmasi') }}"/>
                        <x-inputs.form-input type="password" name="password_confirmation" id="password" class="form-input" placeholder="Konfirmasi Password" autocomplete="off" maxlength="16" required />
                        @error('password_confirmation')
                            <span>
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!--! Button -->
                <div class="row-btn">
                    <x-inputs.btn >
                        {{ __('Daftar') }}
                    </x-inputs.btn>
                </div>

            </form>
        </div>

        <!--! images -->
        <x-register.img-register/>
    </div>
</x-auth-layout>
