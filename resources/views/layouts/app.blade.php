<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title', 'Landed')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload landing">
<div id="page-wrapper">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
