<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bingo shops list</title>

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png"/>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app" class="container-fluid">
    @yield('content')
</div>
<script src="{{ mix('/js/app.js') }}" type="application/javascript"></script>
</body>
</html>
