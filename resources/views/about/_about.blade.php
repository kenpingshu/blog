@extends('page_style.two._two')
@section('left_content')
@include('script._ckeditor')
<div class="row">
    <div class='col-md-6'>
        <img class="img-responsive" />
    </div>
    <div class='col-md-6'>
        <pre>
            <code class="language-php">

                echo "123";
            </code>
        </pre>
    </div>
    
</div>
@endsection


