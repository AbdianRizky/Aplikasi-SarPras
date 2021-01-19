<x-auth-layout>
<div class="fpw-form">
    <div class="form-body">
        <!--! Link Back -->
        <a href="/login" class="row-back">
            <x-auth.arrow-back/>
            <span>Kembali</span>
        </a>

        <!--! Title -->
        <h1 class="header">
            {{ __('Setel Ulang Password') }}
        </h1>

        <div class="desc_fpw">
            @if (session('status') == null)
            <p>
                {{ __('Cukup masukkan alamat email Anda di bawah ini dan kami akan mengirimkan link untuk mengatur ulang kata sandi Anda!') }}
            </p>
            @elseif(session('status'))
            <p>
                {{ session('status') }}
            </p>
            @endif
        </div>

        <form method="post" action="{{ route('password.email') }}">
            @csrf

            <!--! email -->
            <x-auth.input type="email" field="email" label="Email"/>

            <div class="row-btn">
                <!--! Button -->
                <x-auth.btn label="Kirim"/>
            </div>
        </form>
    </div>
</div>
</x-auth-layout>
