<x-auth-layout>
    <div class="rpw-form">
        <div class="form-body-rpw">

            <div class="container-fpw">
                <!--! Title -->
                <div class="header header-rpw">
                    <h1 class="title title-fpw">
                        {{ __('Setel Ulang Password') }}
                    </h1>
                </div>

                <form method="post" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!--! email -->
                    <x-auth.input type="email" field="email" label="Email" class="formel-fpw"/>

                    <!--! Password -->
                    <x-auth.input type="password" field="password" label="Password" class="formel-fpw"/>

                    <!--! Konfirmasi -->
                    <x-auth.input type="password" field="password_confirmation" label="Konfirmasi" class="formel-fpw"/>

                    <div class="row-btn btn-fpw">
                        <!--! Button -->
                        <x-auth.btn label="Setel Ulang" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
