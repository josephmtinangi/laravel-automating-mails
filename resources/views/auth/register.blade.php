@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h1>Register</h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input id="name" type="text" class="form-control" placeholder="Name" name="name"
                               value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" class="form-control" placeholder="Email" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" type="password" class="form-control" placeholder="Password" name="password"
                               required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group">

                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"
                               name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                </form>
            </div>
        </div>
    </div>
@endsection
