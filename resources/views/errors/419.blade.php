<x-error-layout>
    <x-slot name="img">
        <img src="{{ asset("storage/img/not found.png") }}">
    </x-slot>
    <x-slot name="message">
        {{ __('Page Expired') }}
    </x-slot>
</x-error-layout>
