@extends('page_style.two._two')

@section('left_content')
<h1 class="page-header">
    臉都歪了
    <small>技術日誌</small>
</h1>

<!-- First Blog Post -->
@foreach ($articles as $article)
<h2>
    <a href="{{  url('/article/'.$article->id) }}">{{ $article->title }}</a>
</h2>
<p class="lead">
    by <a href="javascript:void(0)_">{{ $article->user_id }}</a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on {{ $article->create_at }}</p>
<hr>
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<p class="p-mainbox">{{ $article->content }}</p>
<a class="btn btn-primary" href="{{ url('/article/'.$article->id) }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>
@endforeach


<!-- Pager -->
<ul class="pager">
    <li class="previous">
        <a href="#">&larr; Older</a>
    </li>
    <li class="next">
        <a href="#">Newer &rarr;</a>
    </li>
</ul>
@endsection