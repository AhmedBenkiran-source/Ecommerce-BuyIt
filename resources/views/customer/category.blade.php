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
                           
                                @if( $category->NameCat  == $NameCat)
                                     <li class="active">
                                        <a href="{{  route('PosterCategory.show', ['NameCat' => $category->NameCat]) }}">{{ $category->NameCat }}</a>
                                     </li>
                                @else
                                     <li>
                                        <a href="{{  route('PosterCategory.show', ['NameCat' => $category->NameCat]) }}">{{ $category->NameCat }}</a>
                                     </li>
                                @endif
                               
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
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

							
                                @if($categories)
                                @foreach($categories as $category)
								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-2">
										<span></span>
										{{ $category->NameCat }}
										<small>
                                            (  )
                                            
                                        </small>
									</label>
								</div>
                                @endforeach
                                @endif
						
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

                        <!-- aside Widget -->
                       
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
					

						<!-- store products -->
						<div class="row">
                            <!-- product -->   
                            @if($products)
                           	 @foreach($products as $product)
								@if(  $product->GetNameCate->NameCat  == $NameCat)
									@if( $product->NameProduct == $NameProduct )
									<div class="col-md-4 col-xs-6">
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
													<p class="product-category">{{ $NameCat }}</p>
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
										</div>
									@elseif($NameProduct == 1)
								<!-- product -->
								<div class="col-md-4 col-xs-6">
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
												<p class="product-category">{{ $NameCat }}</p>
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
									</div>
									<!-- /product -->
								@endif
								@elseif( $product->NameProduct == $NameProduct )
									<div class="col-md-4 col-xs-6">
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
													<p class="product-category">{{ $NameCat }}</p>
													<h3 class="product-name"><a href="#">{{ $product->NameProduct }}</a></h3>
													<h4 class="product-price">${{ $product->PriceProduct }} </h4>
												
													<div class="product-btns">
															<a  href=" {{  route('Wishlist.show', ['id' =>  $product->id]) }}" class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp"> add to wishlist</span></a>
														<a href=" {{  route('PosterProduct.show', ['id' => $product->id]) }}" class="quick-view"><br><i class="fa fa-eye"></i> quick view</a>
													</div>
												</div>
												<div class="add-to-cart">
														<a  href=" {{  route('Carts.show', ['id' =>  $product->id]) }}"  class="add-to-cart-btn"><span class="tooltipp"> add to cart</span></a>
												</div>
											</div>
										</div>
								
									<!-- /product -->
								@endif
                                <!-- /product -->
                                @endforeach
                                @endif
						</div>

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<ul class="store-pagination">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            {{ $products->links() }} 
                  
                                        </div>
							</ul>
                        </div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
    
					<!-- Products tab & slick -->
					
                    <style>
                            img.a:hover {
                                -webkit-transform: scaleX(-1);
                                transform: scaleX(-1);
                                box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
                            }
                           
                            </style>
@yield('action-content')
<!-- /.content -->
</div>

@endsection