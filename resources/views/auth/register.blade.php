<x-auth-layout>
    <div class="register-form">
        <div class="form-body">

            <div class="row-back">
                <a href="/login">
                    <div class="link-back">
                        <x-auth.arrow-back/>
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
                <x-auth.input type="name" field="name" label="Nama Lengkap" class="form-regis" />

                <div class="section-kelas">
                    <!--! Angkatan -->
                    <x-auth.input-select field="angkatan" label="Angkatan" class="form-regis" />
                    <!--! Jurusan -->
                    <x-auth.input-select field="jurusan" label="Jurusan" class="form-regis" />
                    <!--! Kelas -->
                    <x-auth.input-select field="kelas" label="Kelas" class="form-regis" />
                </div>

                <!--! email -->
                <x-auth.input type="email" field="email" label="Email" class="form-regis" />

                <div class="section-password">
                    <!--! Password -->
                    <x-auth.input type="password" field="password" label="Password" class="form-regis" />
                    <!--! Konfirmasi -->
                    <x-auth.input type="password" field="password_confirmation" label="Konfirmasi" class="form-regis" />
                </div>

                <!--! Button -->
                <div class="row-btn">
                    <x-auth.btn label="Daftar" />
                </div>

            </form>
        </div>

        <!--! images -->
        <x-auth.register-svg/>
    </div>
</x-auth-layout>
