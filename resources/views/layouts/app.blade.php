<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SCRIITOR') }}</title>
    <!-- Favicons -->
    {{-- <link href=" {{asset('images/favicon.png') }}" rel="icon">
    <link href="{{asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .go-pro {
            background-color: #2F2EE9 !important;
            color: #FFF;
        }

        body {
            color: #676A6F;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.13px;
        }

        .sidebar-nav {
            /* color: #ABABAB !important;
            font-size: 15px !important;
            font-weight: 500 !important;
            line-height: 24px !important;
            letter-spacing: -0.15px !important; */
        }

        h6 {
            font-size: 20px !important;
            padding-bottom: 5px !important;
        }

        .mode {
            display: flex !important;
            padding: 10px !important;
            align-items: flex-start !important;
            gap: 10px !important;
            width: 100% !important;
            height: 40px !important;
            flex-shrink: 0 !important;
            border-radius: 10px !important;
            font-size: 11px !important;
            font-weight: 500 !important;
            background-color: #d1d1d1 !important;
            text-align: center !important;
        }
    </style>
</head>

<body>
    <div id="app">
        @extends('layouts.top-bar')

        @extends('layouts.sidebar')

        <main id="main" class="main">
            @yield('content')
        </main>

        @extends('layouts.footer')
    </div>
</body>

</html>
