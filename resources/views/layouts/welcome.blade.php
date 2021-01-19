<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <x-head.favicon/>
    <x-head.font/>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    {{ $slot }}
    <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
