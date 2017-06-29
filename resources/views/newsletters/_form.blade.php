<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control">
</div>
<div class="form-group">
    <label for="content_html">Content</label>
    <textarea name="content_html" id="content_html" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="published_at">Publish On</label>
    <input type="date" name="published_at" id="published_at" class="form-control">
</div>

<button type="submit" class="btn btn-primary">{{ $btnText }}</button>