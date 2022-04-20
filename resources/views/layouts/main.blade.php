<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Artina @if(!empty($pageTitle))| {{ $pageTitle }}@endif</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.includes.header')

@yield('content')
@include('auth.login')
FOOTER
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@stack('scripts')
</body>
</html>
