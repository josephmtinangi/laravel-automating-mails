<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/vendor/trumbowyg/dist/ui/trumbowyg.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans" rel="stylesheet">
    <style>
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Dosis', sans-serif;
            font-weight: 900;
        }

        p {
            font-family: 'Open Sans', sans-serif;
            font-size: medium;
        }
    </style>
</head>
<body>
<div id="app">
    @include('partials.navbar')

    @if (session('message'))
        <p class="alert alert-success">{{ session('message') }}</p>
    @endif

    @yield('content')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="/vendor/trumbowyg/dist/trumbowyg.min.js"></script>
<script>
    $('textarea').trumbowyg({
        autogrow: true
    });
</script>
</body>
</html>
