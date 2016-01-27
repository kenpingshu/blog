<!-- Blog Categories Well -->
<div class="well">
    <h4>{{ $data->title}}</h4>
    <div class="row">
        @foreach($data->categories as $key => $category)
            @if( $key%4 === 0)
            <div class="col-lg-6">
            @endif
                <ul class="list-unstyled">

                    <li><a href="{{ $category['link'] }}">{{ $category['name'] }}</a>
                    </li>

                </ul>
            @if( $key%4 === 3 || $key === count($data->categories) -1 )
            </div>
            @endif
        @endforeach
<!--         /.col-lg-6 
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
         /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>