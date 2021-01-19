<x-auth-layout>
    <div class="rpw-form">
        <div class="form-body">
            <!--! Title -->
            <h1 class="header">
                {{ __('Setel Ulang Password') }}
            </h1>

            <form method="post" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!--! email -->
                <x-auth.input type="email" field="email" label="Email"/>

                <!--! Password -->
                <x-auth.input type="password" field="password" label="Password"/>

                <!--! Konfirmasi -->
                <x-auth.input type="password" field="password_confirmation" label="Konfirmasi"/>

                <div class="row-btn">
                    <!--! Button -->
                    <x-auth.btn label="Setel Ulang" />
                </div>
            </form>
        </div>
    </div>
</x-auth-layout>
