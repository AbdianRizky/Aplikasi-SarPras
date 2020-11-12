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
                    <div class="formel formel-fpw">
                        <x-inputs.label for="email" value="{{ __('Email') }}"/>
                        <x-inputs.form-input type="text" name="email" id="email" :value="old('email', $request->email)" class="form-input" placeholder="Masukan Email" autocomplete="off" />
                    </div>

                    <!--! Password -->
                    <div class="formel form-fwp">
                        <x-inputs.label for="password" value="{{ __('Password') }}"/>
                        <x-inputs.form-input type="password" name="password" id="password" class="form-input" placeholder="Masukan Password" autocomplete="off" maxlength="16" />
                        @error('password')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!--! Konfirmasi -->
                    <div class="formel form-fwp">
                        <x-inputs.label for="password" value="{{ __('Konfirmasi') }}"/>
                        <x-inputs.form-input type="password" name="password_confirmation" id="password" class="form-input" placeholder="Konfirmasi Password" autocomplete="off" maxlength="16" />
                        @error('password_confirmation')
                            <span>
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row-btn btn-fpw">
                        <!--! Button -->
                        <x-inputs.btn class="btn">
                            {{ __('Setel Ulang') }}
                        </x-inputs.btn>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth-layout>
