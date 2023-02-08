<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    {{--endFonts--}}
    <link rel="stylesheet" href="{{ asset('css/resetCss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sideBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/iconFont.css') }}">

    <title>Document</title>
</head>
<body>
    <div class="body-content">
        @include('panels/sideBarPanel')
        @yield('content') {{--сюда будут подгружаться все секции, которые называются content--}}
    </div>
</body>
</html>
