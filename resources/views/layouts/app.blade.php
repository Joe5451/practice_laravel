<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?time=<?php echo date('YmdHis'); ?>">
    
</head>
<body>
    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')
</body>
</html>