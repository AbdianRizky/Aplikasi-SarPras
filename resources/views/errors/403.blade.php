<x-error-layout>
    <x-slot name="img">
        <img src="{{ asset("storage/img/not found.png") }}">
    </x-slot>
    <x-slot name="message">
        {{ __($exception->getMessage() ?: 'Forbidden') }}
    </x-slot>
</x-error-layout>
