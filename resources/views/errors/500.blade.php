<x-error-layout>
    <x-slot name="img">
        <img src="{{ asset("storage/img/404.png") }}">
    </x-slot>
    <x-slot name="message">
        {{ __('Server Error') }}
    </x-slot>
</x-error-layout>
