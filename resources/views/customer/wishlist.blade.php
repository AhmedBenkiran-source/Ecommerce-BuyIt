@extends('customer.layouts.app-template')
@section('content')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                     <li><a href="{{  route('home') }}">Home</a></li>
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
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                            <h3 class="aside-title">My Account</h3>
                            <ul  class="main-nav nav navbar-nav">
                                    <li></li>
                                    <li  ><a href="{{ route('Account.index') }}"> <label for=""> Personal Information </label></a></li>
                                    <li class="active"><a href="{{ route('Wishlist.index') }}"> <label for=""> My Wishlist </label></a></li>                                  
                                    <li><a href="{{ route('Carts.index') }}"> <label for="">My Shopping Cart  </label></a></li>   
                                    <li ><a href="{{ route('AllOrders.store') }}"> <label for="">  My All Orders </label></a></li>
                            </ul>  
                    
                        </div>
                    </div>
                    <!-- /aside Widget -->
                <div id="store" class="col-md-9">
                       
                        <div class="aside">
                                <h3 class="aside-title" ><i><u>My Wishlist</u></i></h3>
    
                        </div>
                        @if($wishlists)
                        @foreach($wishlists as $wishlist)
                        @if($wishlist->user_id == Auth::user()->id)
                        @foreach ( $products as $product )
                        @if($product->id == $wishlist->product_id)
                        
                        <div class="col-md-4">
                                <div class="product">
                                        <div class="product-img">
                                            <img class="a" src="{{ asset('storage/'.$product->ImageProduct) }}" alt="" height="250" width="150">
                                            
                                            @if(time() > $product->created_at->diffInSeconds() + 1527901765)
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{ $product->NameProduct }}</a></h3>
                                            <h4 class="product-price">${{ $product->PriceProduct }} </h4>
                                            <form id="delete" class="row" method="POST"  action="{{ route('Wishlist.destroy', ['id' => $wishlist->id]) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}        
                                                  
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-trash"></i><span class="tooltipp"> delete</span> </button>
                                                <a href=" {{  route('PosterProduct.show', ['id' => $product->id]) }}" class="quick-view"><br><i class="fa fa-eye"></i> quick view</a>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        </div>
                                    </div>
                        </div>
                        
                        @endif
                       
                        @endforeach
                        @endif
                      @endforeach
                      @endif
                </div>
                						<!-- store bottom filter -->
						<div class="store-filter clearfix">
                                <ul class="store-pagination">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                                {{ $wishlists->links() }} 
                      
                                            </div>
                                </ul>
                            </div>
                            <!-- /store bottom filter -->
            </div>
                <!-- /ASIDE -->
        </div>
           
</div>

@yield('action-content')
<!-- /.content -->
</div>
	
<style>
        img.a:hover {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }
       
        </style>
@endsection