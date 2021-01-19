<x-auth-layout>
    <div class="register-form">
        <div class="form-body">
            <a href="/login" class="back">
                <x-auth.arrow-back/>
                <span>Kembali</span>
            </a>

            <!--! Title -->
            <h1 class="header">Daftarkan Kelasmu!</h1>

            <form method="post" action="{{ route('register') }}">
                @csrf
                <!--! Nama -->
                <x-auth.input type="name" field="name" label="Nama Lengkap" />

                <div class="section-kelas">
                    <!--! Angkatan -->
                    <x-auth.input-select field="angkatan" label="Angkatan" />
                    <!--! Jurusan -->
                    <x-auth.input-select field="jurusan" label="Jurusan" />
                    <!--! Kelas -->
                    <x-auth.input-select field="kelas" label="Kelas" />
                </div>

                <!--! email -->
                <x-auth.input type="email" field="email" label="Email" />

                <div class="section-password">
                    <!--! Password -->
                    <x-auth.input type="password" field="password" label="Password" />
                    <!--! Konfirmasi -->
                    <x-auth.input type="password" field="password_confirmation" label="Konfirmasi" />
                </div>

                <!--! Button -->
                <x-auth.btn label="Daftar" />
            </form>
        </div>

        <!--! images -->
        <x-auth.form-img for="register" />
    </div>
</x-auth-layout>
