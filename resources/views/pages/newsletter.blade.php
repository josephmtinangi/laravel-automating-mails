@extends('layouts.app')

@section('title', 'Newsletter')

@section('content')

    <div class="jumbotron jumbotron-newsletter bg-secondary">
        <div class="container">
            <h1>Don't miss out on the awesomeness.</h1>
            <p>Subscribe to our free newsletter</p>
            <p>
                @include('partials.forms.newsletter')

            </p>
            <small>Great content, no spam, easy unsubscribe</small>

        </div>
    </div>

@endsection
