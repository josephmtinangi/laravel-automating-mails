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

                {!! $newsletter->content_html !!}

                <br>

                <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Send</a>
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <form method="POST"
                              action="{{ route('newsletters.send', [$newsletter->slug, $newsletter->id]) }}">
                            {{ csrf_field() }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title">Send Newsletter</h4>
                                </div>
                                <div class="modal-body">
                                    Confirm sending this newsletter to all newsletter subscribers.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
