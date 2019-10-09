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
	<!-- SECTION -->
    <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-1">
						<div id="product-main-img">
							<div class="product-preview">
                                    <img src="{{ asset('storage/'.$product->ImageProduct) }}" width="300" height="400" alt="">
                                </div>

							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2 ">
						<div id="product-imgs">
							
							
						</div>
					</div>
					<!-- /Product thumb imgs -->

                    <!-- Product details -->
                    <form class="form-horizontal" action="{{ route('Carts.show', ['id' => $product->id])  }}"   enctype="multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{ $product->NameProduct }}</h2>
							<div>
						
							<div>
								<h3 class="product-price">${{ $product->PriceProduct }} <del class="product-old-price">$990.00</del></h3>
                                @if($product->QuantityProduct >0 )
                                <span class="product-available"> In Stock</span>
                                @else
                                <span class="product-available">Not available</span>
                                @endif
							</div>
							<p>{{ $product->DesignationProduct }}</p>


							<div class="add-to-cart">
								<div class="qty-label">
                                    Qty
                                    <SELECT name="Qt" size="1">
                                            
                                       @for ( $i=1 ;  $i<= $product->QuantityProduct; $i++)
                                       <OPTION value="{{ $i }}">{{ $i }}
                                       @endfor
                                    </SELECT>
									
								</div>
								<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a  href="{{  route('PosterCategory.show', ['NameCat' => $product->GetNameCate->NameCat]) }}">{{ $product->GetNameCate->NameCat  }}</a></li>
							</ul>

			

						</div>
					</div>
					<!-- /Product details -->
                    </div>
                </form>
					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li  class="active"><a data-toggle="tab" href="#tab2">Description</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
                                            <center>
                                            <p>{{ $product->DescriptionProduct }}</p>
                                            </center>
										</div>
									</div>
								</div>
								<!-- /tab1  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
        <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                    </ul>
                    <!-- /product tab nav -->

                   
                </div>
            </div>
		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

                    <div class="section">
                            <!-- container -->
                            <div class="container">
                              <!-- row -->
                              <div class="row">
                          
                                <!-- section title -->
                                <div class="col-md-12">
                                  <div class="section-title">
                                    <h3 class="title">Related Products</h3>
                               
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
                            @foreach($products as $pro)
                            @if(  $pro->Category  == $product->Category)			<!-- product -->

							<div class="col-md-4 col-xs-6">
                                    <div class="product">
                                        <div class="product-img">
                                            <img class="a" src="{{ asset('storage/'.$pro->ImageProduct) }}" alt="" height="250" width="150">
                                            
                                            @if(time() > $pro->created_at->diffInSeconds() + 1527901765)
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $pro->GetNameCate->NameCat}}</p>
                                            <h3 class="product-name"><a href="#">{{ $pro->NameProduct }}</a></h3>
                                            <h4 class="product-price">${{ $pro->PriceProduct }} </h4>
                                           
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                <a href=" {{  route('PosterProduct.show', ['id' => $pro->id]) }}" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        </div>
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
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

@yield('action-content')
<!-- /.content -->
</div>

@endsection