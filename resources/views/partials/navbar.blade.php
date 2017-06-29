<div class="container">
    <ul class="nav navbar-nav">
        <li class="active">
            <a href="/">Home</a>
        </li>
        <li>
            <a href="{{ route('newsletter') }}">Newsletter</a>
        </li>
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li><a href="{{ route('home') }}">Home</a></li>
        @endif
    </ul>
</div>