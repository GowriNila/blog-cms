<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/custom_app.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/remixicon.eot') }}">
    <link href="{{ asset('fonts/remixicon.glyph.json') }}">
    <link href="{{ asset('fonts/remixicon.less') }}">
    <link href="{{ asset('fonts/remixicon.ttf') }}">
    <link href="{{ asset('fonts/remixicon.woff') }}">
    <link href="{{ asset('fonts/remixicon.woff2') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>Laravel Blog @yield('title')</title>
</head>