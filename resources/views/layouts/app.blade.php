
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <x-head.favicon/>

    <!-- Fonts -->
    <x-head.font/>

    <!-- My Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

    {{ $slot }}

    <!-- My Js -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('sweetalert::alert')

</body>
</html>
