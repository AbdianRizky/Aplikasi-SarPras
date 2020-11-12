<x-auth-layout>
<div class="fpw-form">
    <div class="form-body-fpw">
        <!--! Link Back -->
        <div class="row-back back-fpw">
            <a href="/login">
                <div class="link-back">
                    <x-arrow-back/>
                    <span>Kembali</span>
                </div>
            </a>
        </div>
        <div class="container-fpw">
            <!--! Title -->
            <div class="header">
                <h1 class="title title-fpw">
                    {{ __('Setel Ulang Password') }}
                </h1>
            </div>

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
                <div class="formel formel-fpw">
                    <x-inputs.label for="email" value="{{ __('Email') }}"/>
                    <x-inputs.form-input type="text" name="email"  id="email" class="form-input" placeholder="Masukan Email" autocomplete="off" />
                </div>

                <div class="row-btn btn-fpw">
                    <!--! Button -->
                    <x-inputs.btn class="btn">
                        {{ __('Kirim') }}
                    </x-inputs.btn>
                </div>
            </form>
        </div>
    </div>
</div>
</x-auth-layout>
