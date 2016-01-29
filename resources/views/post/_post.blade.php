@extends('page_style.two._two')
@section('left_content')
<script src="{{ url('/ckeditor/ckeditor.js') }}"></script>

<form role="form" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input class="form-control" name="title" id="exampleInputEmail1" placeholder="輸入標題">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="10" cols="80"></textarea>
        <script>
            CKEDITOR.replace( 'content' );
        </script>
    </div>
    {{ csrf_field() }}

    <button type="submit" class="btn btn-default">送出</button>
</form>


@endsection
