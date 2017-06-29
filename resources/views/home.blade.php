@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="jumbotron bg-primary">
        <div class="container">
            <h1>{{ Auth::user()->name }}</h1>
            <p>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}

<button type="submit" class="btn btn-primary">Logout</button>

                                </form>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-10">

            </div>
        </div>
    </div>

@endsection
