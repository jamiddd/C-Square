<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>C Square</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0px !important;
            }

            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            .footer {
                /* width: 100%; */
                /* height: 400px; */
                background-color: #f5f5f5;
            }
        </style>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="mdc-typography">
        @include('layouts.top-app-bar')
        @yield('content')
        @include('layouts.footer')
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
