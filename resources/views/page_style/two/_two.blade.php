@extends('template')

@section('container')

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <!-- left content -->
        @yield('left_content')
    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">

        @foreach($right_composers as $composer)
            @include('composers.right.'.$composer , ['data' => $$composer])
        @endforeach

    </div>
</div>
<!-- /.row -->
@endsection