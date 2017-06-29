@extends('layouts.app')

@section('content')

    <div class="jumbotron bg-primary">
        <div class="container">
            <h1>{{ $newsletter->title }}</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-10">

                {{ $newsletter->content_html }}

            </div>
        </div>
    </div>

@endsection
