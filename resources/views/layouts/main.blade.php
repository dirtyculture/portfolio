<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Schibalsky</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link href="/css/app.css" rel="stylesheet">
        @yield('stylesheets')
    </head>
    <body>
        <!-- Navigation -->
        @include('inc.nav')

        <div id="app">
            <!-- Page Content -->
            @yield('content')
        </div>

        <!-- Footer -->
        @include('inc.footer')
        <!-- JS -->
        <script src="/js/app.js"></script>
        @yield('scripts')
    </body>
</html>
