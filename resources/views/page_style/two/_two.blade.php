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

        @yield('right_content')

    </div>

</div>
<!-- /.row -->
@endsection