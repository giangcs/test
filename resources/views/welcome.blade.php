<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <style>

        </style>
    </head>
    <body class="antialiased">
    <video width="400" controls="controls" preload="metadata">
{{--        <source src="https://www.w3schools.com/html/mov_bbb.mp4#t=0.5" type="video/mp4">--}}
        <source src="{{asset('img/271154601_1514479558951419_8224764362275851440_n.mp4')}}" type="video/mp4">
    </video>
    <video width="320" height="240" autoplay>
        <source src="{{asset('img/271154601_1514479558951419_8224764362275851440_n.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    </body>
</html>
