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
                @foreach($blogs as $blog)
                @endforeach
                <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Blog Details Area Start -->
<div class="blog-details-area ptb-80">
    <div class="container">
        <div class="row">
            @foreach($detail as $details)
            <div class="col-xl-9 col-lg-8">
                <div class="blog-image">
                    <a ><img src="{{$details->getFirstMediaUrl('blog.image')}}" alt=""></a>
                </div>
                <h5>{{$details->title}} </h5>
                <div class="post-information">
                    <span>BY : ADMIN</span>

                </div>
                <div class="blog-details-text">
                    <p>{{$details->description}}</p>
                    <h5>{{$details->second_title}} </h5>
                    <p  >{{$details->second_description}} </p>
                    <h5>{{$details->third_title}} </h5>
                    <p>{{$details->third_description}}</p>
                    <h5>{{$details->fourth_title}} </h5>
                    <p>{{$details->fourth_description}}</p>
                    <h5>{{$details->fifth_title}} </h5>
                    <p>{{$details->fifth_description}}</p>

                </div>


            </div>
            @endforeach

            <div class="col-xl-3 col-lg-4">


                <div class="single-widget">
                    <h4 class="details-title">LATEST POST</h4>
                    @foreach($blogs as $blog)
                    <div class="recent-item">
                        <a href="/blog-detail/{{$blog->id}}"><img src="{{$blog->getFirstMediaUrl('blog.image')}}" alt=""></a>

                        <?php
                            $date = $blog->created_at; // Your date in YYYY-MM-DD format

                            // Format the date as "14 SEP 2017"
                            $formattedDate = date("d M Y", strtotime($date));
                            ?>
                            <?php
                                    $time = $blog->created_at; // Your time in HH:MM:SS format (24-hour format)

                                    // Format the time as "5 : 00 PM"
                                    $formattedTime = date("g : i A", strtotime($time));
                                    ?>
                        <div class="recent-text">
                            <h5><a href="/blog-detail/{{$blog->id}}">{{$blog->title}}</a></h5>
                            <div class="recent-info">
                            <span><?php echo $formattedDate; ?></span>
                                <span><?php echo $formattedTime; ?></span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Blog Details Area End -->

@endsection

@section('coustomJS')

@endsection
