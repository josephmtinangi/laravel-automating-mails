@extends('layouts.app')

@section('content')

    <div class="jumbotron bg-primary">
        <div class="container">
            <h1>Newsletters</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                @include('partials.sidebar')
            </div>
            <div class="col-sm-10">
                @if($newsletters->count())
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($newsletters as $newsletter)
                                <tr>
                                    <td class="text-right">{{ $i++ }}.</td>
                                    <td>
                                        <a href="{{ route('newsletters.show', [$newsletter->slug, $newsletter->id]) }}">
                                            {{ $newsletter->title }}
                                        </a>
                                    </td>
                                    <td>{{ $newsletter->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
