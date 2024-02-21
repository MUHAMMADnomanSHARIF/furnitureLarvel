@extends('frontend.layout.app')

@section('CoustomCSS')

@endsection

@section('content')

 <!-- Breadcrumb Area Start -->
 <div class="breadcrumb-area bg-dark">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Blog Section Start -->
<div class="blog-section pt-80 pb-35">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <?php
                    $date = $blog->created_at; // Your date from the database

                    // Extract the day and month from the date
                    $day = date("d ", strtotime($date)); // Format the date as "21 February"
                    $month = date("M ", strtotime($date));
                   ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="/blog-detail/{{$blog->id}}">
                            <img src="{{$blog->getFirstMediaUrl('blog.image')}}" alt="" height="300px" width="400px">
                            <span><?php echo $day; ?> <span><?php echo $month; ?></span></span>
                        </a>
                    </div>
                    <div class="blog-text">
                        <h5><a href="/blog-detail/{{$blog->id}}">{{$blog->title}}</a></h5>
                        <p style="overflow: hidden;">{{$blog->description}}</p>
                        <a href="/blog-detail/{{$blog->id}}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Blog Section End -->


@endsection

@section('coustomJS')

@endsection
