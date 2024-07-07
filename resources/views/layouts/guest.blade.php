<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/stylesHS/cssPropio.css') }}" rel="stylesheet">
        <style>
        #bgBrick {
            background-image: url('{{ asset('multimedia/fondoAI.jpeg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .row {
            margin: 0;
        }
    </style>
        <!-- Scripts -->
     </head>
     <div>
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                {{ $slot }}
            </div>
            <div class="col-md-6" id="bgBrick">
                
            </div>
        </div>
    </div>
</html>

 