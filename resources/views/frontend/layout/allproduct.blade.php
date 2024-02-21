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
                 @if(empty($category))
                 <li class="breadcrumb-item active" aria-current="page">All Products</li>
                @else
                  @foreach($category as $category)
                <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                 @endforeach
                 @endif
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Shop Area Start -->
<div class="shop-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8">
                @if(Empty($category))
                <h1 class="page-title text-dark">All Products</h1>
                @else
                <h1 class="page-title text-dark">{{$category->name}}</h1>
                @endif
                <div class="ht-product-shop tab-content">
                    <div class="tab-pane active show fade text-center" id="grid" role="tabpanel">
                        <div class="row" id="product-container">







                        </div>
                    </div>

                </div>
                         <!-- <div class="pagination-wrapper">
                            <nav aria-label="navigation">
                                <ul id="pagination" class="pagination align-items-center">

                                </ul>
                            </nav>
                            <div class="shop-results">
                                <span>Show</span>
                                <select name="number" id="b-number">
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                                <span>per page</span>
                            </div>
                        </div> -->
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-widget widget-style-1 panel-group" id="widget-parent" aria-multiselectable="true" role="tablist">
                    <h4>Shop By</h4>
                    <div class="panel widget-option">
                        <a data-bs-toggle="collapse" href="#category" data-parent="#widget-parent">Category</a>
                        <div class="collapse show" id="category">
                            <div class="collapse-content">
                            <div class="single-widget-opt">
                                        <input type="radio" style="border-radius:none;"class="category-checkbox"  name="cate" value="" checked>
                                        <label for="tables" selected>ALL Products</label>
                                    </div>
                            @foreach($categories as $category)
                                    <div class="single-widget-opt">
                                        <input type="radio" name="cate" class="category-checkbox" value="{{ $category->id }}" id="tables">
                                        <label for="tables">{{ $category->name }}<span>({{ $category->products->count() }})</span></label>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>


                    <div class="panel widget-option">
                        <a class="collapsed" data-bs-toggle="collapse" href="#price" data-parent="#widget-parent">Price</a>
                        <div class="collapse" id="price">
                            <div class="collapse-content">
                                <div class="single-widget-opt">
                                    <input type="checkbox" id="low">
                                    <label for="low">$0.00 - $9.99 <span>(3)</span></label>
                                </div>
                                <div class="single-widget-opt">
                                    <input type="checkbox" id="l-t-m">
                                    <label for="l-t-m">$10.00 - $19.99 <span>(2)</span></label>
                                </div>
                                <div class="single-widget-opt">
                                    <input type="checkbox" id="medium">
                                    <label for="medium">$30.00 - $39.99 <span>(3)</span></label>
                                </div>
                                <div class="single-widget-opt">
                                    <input type="checkbox" id="m-t-h">
                                    <label for="m-t-h">$40.00 - $49.99 <span>(4)</span></label>
                                </div>
                                <div class="single-widget-opt">
                                    <input type="checkbox" id="high">
                                    <label for="high">$50.00 - $59.99 <span>(1)</span></label>
                                </div>
                                <div class="single-widget-opt">
                                    <input type="checkbox" id="highest">
                                    <label for="highest">$70.00 And Above <span>(1)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
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

   <script>
  $(document).ready(function() {
    // Function to fetch all products
    function fetchAllProducts() {
        $.ajax({
            url: '/getallproducts',
            method: 'GET',
            success: function(data) {
                displayProducts(data);
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }

    // Fetch all products when the page loads
    fetchAllProducts();

    // Add an event listener to all checkboxes with class 'category-checkbox'
    $('.category-checkbox').change(function() {
        // Check which checkboxes are checked
        var selectedCategories = $('.category-checkbox:checked').map(function() {
            return $(this).val();
        }).get();

        // Make an AJAX request to your server to get data based on the selected categories
        if (selectedCategories.length > 0) {
            $.ajax({
                url: '/getproduct/' + selectedCategories[0],
                method: 'GET',
                success: function(data) {
                    displayProducts(data);
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        } else {
            // If no category is selected, display all products
            fetchAllProducts();
        }
    });

    // Function to display products in the container
    function displayProducts(products) {
        // Clear existing content
        $('#product-container').empty();

        // Append new product information
        $.each(products, function(index, product) {
            $('#product-container').append(`
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item">
                        <div class="product-image-hover">
                            <a href="{{ url('product-detail/') }}/${product.name}">
                                <img class="primary-image" src="${product.image_url}" alt="">
                            </a>
                            <div class="product-hover">
                                <button class="add-to-cart" data-product-id="${product.id}" role="button"><i class="icon icon-FullShoppingCart"></i></button>
                                <button class="add-to-wish" data-product-id="${product.id}"><i class="icon icon-Heart"></i></button>
                                <a href="{{ url('product-detail/') }}/${product.name}"><i class="icon icon-Files"></i></a>
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
                            <h4><a href="{{ url('product-detail/') }}/${product.name}">${product.name}</a></h4>
                            ${product.discounted_price ?
                                `<div class="product-price">
                                    <span>${product.discounted_price}</span>
                                    <span class="prev-price">${product.price}</span>
                                </div>` :
                                `<div class="product-price">
                                    <span>${product.price}</span>
                                </div>`
                            }
                        </div>
                    </div>
                </div>
            `);
        });
    }
});
</script>



@endsection
