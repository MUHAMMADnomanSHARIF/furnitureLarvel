@extends('frontend.layout.app')

@section('CoustomCSS')
<style>
input[type="radio"]{
   appearance: none;
   border: 1px solid #d3d3d3;
   width: 14px;
   height: 14px;
   content: none;
   outline: none;
   margin: 10;
   margin-top: 10px;

}
input[type="radio"]:checked {
  appearance: none;
  outline: none;
  padding: 0;
  content: none;
  border: none;
}

input[type="radio"]:checked::before{
  position: absolute;
  color: green !important;
  content: "\00A0\2713\00A0" !important;
margin-top: 8px;
  font-weight: bolder;
  font-size: 10px;
}
</style>

@endsection

@section('content')
 <!-- Breadcrumb Area Start -->
 <div class="breadcrumb-area bg-dark">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                 @if(empty($categories))
                 <li class="breadcrumb-item active" aria-current="page">ProductbyCategory</li>
                @else
                  @foreach($categories as $category)
                <li class="breadcrumb-item active text-capitalize" aria-current="page"> <span class="text-light">Category</span> <span class="text-secondary">>&nbsp;</span>{{$category->name}}</li>
                 @endforeach
                 @endif
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->

</div>
<!-- Shop Area End --> <!-- Shop Area Start -->
        <div class="shop-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8">
                        <div class="shop-banner">
                            <img src="assets/img/banner/19.jpg" alt="">
                        </div>
                        @foreach($categories as $categor)
                        @endforeach

                        <h1 class="page-title">{{$categor->name}}</h1>

                        <div class="ht-product-shop tab-content">
                            <div class="tab-pane active show fade text-center" id="grid" role="tabpanel">
                                <div class="row">
                                     @foreach($product as $category)
                                     <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                  <div class="product-item">
                                  @if($category->availability == 'on')
                                        <span class="in-stock">In Stock</span>
                                    @else
                                        <span class="in-stock">Out of Stock</span>
                                    @endif
                                    <div class="product-image-hover">
                                   <a href="{{ url('product-detail/'.$category->name) }}">
                                     <img class="primary-image" src="{{$category->getFirstMediaUrl('product.image')}}" alt="" />
                                     </a>
                                    <div class="product-hover">
                                        <button class="add-to-cart" data-product-id="{{$category->id}}" role="button"><i class="icon icon-FullShoppingCart"></i></button>
                                        <button class="add-to-wish" data-product-id="{{$category->id}}"><i class="icon icon-Heart"></i></button>
                                        <a href="{{ url('product-detail/'.$category->name) }}"><i class="icon icon-Files"></i></a>
                                    </div>
                                              </div>
                                                        <div class="product-text">
                                                <div class="product-rating">
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star"></i>
                                                        </div>
                                    <h4><a href="{{ url('product-detail/'.$category->name) }}">{{$category->name}}</a></h4>
                                    @if('$category->discounted_price ?')

                                     <div class="product-price">
                                            <span>{{$category->discounted_price}}</span>
                                            <span class="prev-price">{{$category->price}}</span>
                                        </div>
                                        @else
                                        <div class="product-price">
                                            <span>{{$category->price}}</span>
                                        </div>
                                    @endif
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>

        </div>

                        </div>
                <div class="pagination-wrapper">
                    <nav aria-label="navigation">
                        <ul class="pagination align-items-center">
                            @if ($product->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $product->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            @foreach ($product->getUrlRange(1, $product->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $product->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($product->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $product->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
</div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="sidebar-widget widget-style-1 panel-group" id="widget-parent" aria-multiselectable="true" role="tablist">
                            <h4>Shop By</h4>
                            <div class="panel widget-option">
                                <a data-bs-toggle="collapse" href="#category" data-parent="#widget-parent">Category</a>
                                <div class="collapse show" id="category">
                                    <div class="collapse-content">
                                        @foreach($categories as $categories)
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="tables">
                                            <label for="tables">{{$categories->name}}<span>({{ $categories->products->count() }})</span></label>
                                        </div>
                                     @endforeach

                                    </div>
                                </div>
                            </div>
                           >
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->

        <!-- Ctaegory Discription  -->
        <div class="container">

            <p class="fw-3 fs-2">{!! $categor->description !!}</p>
        </div>



        <!--End Ctaegory Discription  -->
  <!-- Blog Area Start -->
<div class="blog-area pb-85">
    <div class="container text-center">
        <div class="section-title">
            <span>Latest New</span>
            <h2><span>FROM OUR BLOG</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="blog-carousel owl-carousel">
                @foreach($blogs as $blog)
                <?php
                    $date = $blog->created_at; // Your date from the database

                    // Extract the day and month from the date
                    $day = date("d ", strtotime($date)); // Format the date as "21 February"
                    $month = date("M ", strtotime($date));
                   ?>
                <div class="custom-col">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="/blog-detail/{{$blog->id}}">
                                <img src="{{$blog->getFirstMediaUrl('blog.image')}}" alt="" height="200px" width>
                                <span><?php echo $day; ?> <span><?php echo $month; ?></span></span>
                            </a>
                        </div>
                        <div class="blog-text">
                            <h5><a href="/blog-detail/{{$blog->id}}">{{$blog->title}}</a></h5>
                            <p>{{$blog->description}}</p>
                            <a href="/blog-detail/{{$blog->id}}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->


@endsection

@section('coustomJS')




@endsection
