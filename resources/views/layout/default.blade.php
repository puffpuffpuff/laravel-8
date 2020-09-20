<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>

        <link rel="shortcut icon" sizes="16x16" href="{{ asset('favicon-16x16.png') }}"/>
        <link rel="shortcut icon" sizes="32x32" href="{{ asset('favicon-32x32.png') }}"/>
        <link rel="icon" href="{{ asset('favicon.ico') }}"/>
        <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">

        <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">

        @yield('body-style')
    </head>
    <body>

        @yield('body-content')
        <script src="{{ asset(mix('js/app.js')) }}" defer></script>
        @yield('body-script')

    </body>
</html>
