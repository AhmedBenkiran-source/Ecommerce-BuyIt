<header>
<!-- TOP HEADER -->
<div id="top-header">
										
    </div>
    <!-- /TOP HEADER -->
    
    <!-- MAIN HEADER -->
    <div id="header">
        
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-2">
                    <div class="header-logo">
                        <a href="{{url('/home')}}" class="logo">
                                <img src={{ asset("customer/img/logo.png") }} alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">

                    <div class="header-search">
                        <form action="{{  route('PosterCategory.index')}}">
                            <select class="input-select" name="Category">

                                    @if($categories)
                                        <option value="#">All categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->NameCat }}">{{ $category->NameCat }}</option>
                                    @endforeach
                                    @endif
                            </select>
                            <input class="input" placeholder="Search here" name="NameProduct">
                            <button  type="submit" class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-4 clearfix">
                    <div class="header-ctn">

                        <!-- Wishlist -->
                        <div>
                            <a href="{{ route('Wishlist.index') }}">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                               

                            </a>
                        </div>
                        <!-- /Wishlist -->
                        <!-- Cart -->
                        <div>
                            <a href="{{ route('Carts.index') }}">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                </a>
                            </div>
                            <!-- /Cart -->
                        <!--Account-->
                        <div>
                            
                            @guest
                            <a href="{{ route('login') }}">
                                    <i class="fa fa-user-o"></i>
                                    <span>Sign in | Join</span>
                              @else
                                    <a href="{{ route('Account.index') }}" >
                                            <i class="fa fa-user-o"></i>
                                      <span>  {{ Auth::user()->name }} </span>
                                    </a>
                                    
                                           
                        @endguest
                        </div>
                        <!--/Account-->
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
    <div id="top-header">
        
        </div>
</header>
<!-- /HEADER -->
