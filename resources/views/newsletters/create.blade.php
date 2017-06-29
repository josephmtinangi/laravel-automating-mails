@extends('layouts.app')

@section('content')

    <div class="jumbotron bg-primary">
        <div class="container">
            <h1>Compose new newsletter</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-10">            

                <form method="POST" action="{{ route('newsletters.store') }}">
                    {{ csrf_field() }}


                    @include('newsletters._form', ['btnText' => 'Finish'])

                </form>

            </div>
        </div>
    </div>

@endsection
