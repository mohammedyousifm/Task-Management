<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Task Management')</title>

    {{-- Css FIls % Css Library --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    {{-- Navber --}}


    @yield('content')

    {{-- Footer --}}


    {{-- Js Fils --}}
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
