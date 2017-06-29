<form action="{{ route('newsletter-subscribers.store') }}" method="POST" class="form-inline" role="form">
    {{ csrf_field() }}

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="email" name="email" class="form-control input-lg" placeholder="Your email goes here">
    </div>


    <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-envelope"></span></button>
</form>