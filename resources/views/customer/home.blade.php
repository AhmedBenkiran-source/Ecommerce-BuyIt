@extends('customer.layouts.app-template')
@section('content')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="{{  route('All.index') }}">All Categories</a></li>
                @if($categories)
                    @foreach($categories as $category)
                    <li>
                        <a href="{{  route('PosterCategory.show', ['NameCat' => $category->NameCat]) }}">{{ $category->NameCat }}</a>
                    </li>
                        @endforeach
                    @endif
                <li><a href="{{  route('Contact.index') }}">Contact</a></li>

                   
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="products-slick" data-nav="#slick-nav-">
            @if($categories)
            @foreach($categories as $category)
        <!-- shop -->
        <div class="col-md-4 col-xs-6">
          <div class="shop">
            <div class="shop-img">
              <img src="{{ asset('storage/'.$category->ImageCat) }}" height="250" width="300" alt="">
            </div>
            <div class="shop-body">
              <h3>{{ $category->NameCat }}<br>Collection</h3>
              <a href="{{  route('PosterCategory.show', ['NameCat' => $category->NameCat]) }}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        @endforeach
        @endif
        <!-- /shop -->
      </div>
      <!-- /tab -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
        <!-- SECTION -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <!-- section title -->
      <div class="col-md-12">
        <div class="section-title">
          <h3 class="title">New Products</h3>
        
        </div>
      </div>
      <!-- /section title -->

      <!-- Products tab & slick -->
      <div class="col-md-12">
        <div class="row">
          <div class="products-tabs">
            <!-- tab -->
            <div id="tab1" class="tab-pane active">
              <div class="products-slick" data-nav="#slick-nav-1">
                <!-- product -->
                @if($products)
                @foreach($products as $product)
                @if(time() > $product->created_at->diffInSeconds() + 1527901765)

                <div class="product">
                    <div class="product-img">
                        <img class="a" src="{{ asset('storage/'.$product->ImageProduct) }}" alt="" height="250" width="150">
                        
                        <div class="product-label">
                            <span class="new">NEW</span>
                        </div>
                    </div>     
                    <div class="product-body">
                        <p class="product-category">{{ $product->GetNameCate->NameCat }}</p>
                        <h3 class="product-name"><a href="#">{{ $product->NameProduct }}</a></h3>
                        <h4 class="product-price">${{ $product->PriceProduct }} </h4>
                  
      <div class="product-btns">
                            <a  href=" {{  route('Wishlist.show', ['id' =>  $product->id]) }}" class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> add to wishlist</span></a>
                            <a href=" {{  route('PosterProduct.show', ['id' => $product->id]) }}" class="quick-view"><br><i class="fa fa-eye"></i> quick view</a>
                          </div>
                       
                    </div>										 

                    <div class="add-to-cart">
    <a  href=" {{  route('PosterProduct.show', ['id' => $product->id]) }}"  class="add-to-cart-btn"><span class="tooltipp"> add to cart</span></a>
                    </div>
                </div>
                <!-- /product -->
                @endif

                @endforeach
                @endif
                
              </div>
              <div id="slick-nav-1" class="products-slick-nav"></div>
            </div>
            <!-- /tab -->
          </div>
        </div>
      </div>
      <!-- Products tab & slick -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /SECTION -->


    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection