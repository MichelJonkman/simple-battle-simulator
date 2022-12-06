<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="@if(config('app.debug'))none @else @yield('robots', isset($title) && $title ? $title : 'index, follow')@endif">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', isset($title) && $title ? $title : config('app.name'))</title>

    <meta name="description" content="@yield('description', isset($description) && $description ? $description : '')">
    <link rel="icon" type="image/png" sizes="32x32" href="@yield('favicon', isset($favicon) && $favicon ? $favicon : '/favicon.png')">

    @stack('meta')

    @stack('styles')
</head>
<body @yield('body', '')>

@yield('base_content')

@stack('scripts')

</body>
</html>
