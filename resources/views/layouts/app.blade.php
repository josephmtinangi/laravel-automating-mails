<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

    <footer>
        <div class="container">
            <div class="row">
                <h3 class="text-center">Subscribe for Weekly Newsletters</h3>

                @if($errors->count())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-success">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <div class="col-sm-4 col-sm-offset-4">
                    <form method="POST" action="{{ route('newsletter-subscribers.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>

                        <button type="submit" class="btn btn-info btn-block">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

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
