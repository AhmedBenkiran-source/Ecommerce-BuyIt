<link rel="stylesheet" type="text/css" href="{{asset('customer/css/bootstrap1.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('customer/css/contact_styles.css')}}">

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
                                <li ><a href="{{ route('Wishlist.index') }}"> <label for=""> My Wishlist </label></a></li>                                  
                                <li class="active"><a href="{{ route('Carts.index') }}"> <label for="">My Shopping Cart  </label></a></li>   
                                <li ><a href="{{ route('AllOrders.store') }}"> <label for="">  My All Orders </label></a></li>
                            </ul>  
                
                    </div>
                </div>
            <div class="col-md-9 ">
                  
                    <div class="aside">
                            <h3 class="aside-title" ><i><u>My Shopping Cart</u></i></h3>

                    </div>
                    <table>
                            <thead>                            
                                    <tr >
                                        <th colspan="2"> Product Name & Details</th>
                                     
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                        <tbody>
                                @if($carts)
                                @foreach($carts as $cart)
                                @if($cart->user_id == Auth::user()->id)
                                @foreach ( $products as $product )
                                @if($product->id == $cart->product_id)
                               
                                    <td> 
                                      {{  ++ $p  }}   <img id="myimage" src="{{ asset('storage/'.$product->ImageProduct) }}" width="80" height="80">
                                    </td>
                                    <td >
                                         {{$product->NameProduct}}/{{ $product->GetNameCate->NameCat }}/ {{ $product->GetNameBrand->NameBrand }}
                                    </td>
                               
                                    <td><center>{{ $product->PriceProduct }}</center></td>
                                    <td><center>{{ $cart->Qt }}</center></td>
                                    <td><center>{{ $cart->Qt* $product->PriceProduct}}</center></td>
                                    <td >
                                      <form id="delete" class="row" method="POST"  action="{{ route('Carts.destroy', ['id' => $cart->id]) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}        
                                      
                                          <button  class="btn btn-danger " onclick="Delete()" >
                                              <span class="fa fa-trash" ></span>
                                          </button>
                                                                               
                                         <a href=" {{  route('PosterProduct.show', ['id' => $product->id]) }}"  class="btn btn-default">
                                            <span class="fa fa-plus"></span></a>   

                                     </form>                                          
                                            
                                    </td> 
                                 
                                </tr>
                               
                                @endif
                       
                                @endforeach
                                @endif
                              @endforeach
                              @endif
                        </tbody>
                    </table>
                        <div class="pull-right">
                                Subtotal ( {{ $p }} goods )
                         </div>
                  
                            <a  class="btn btn-danger " href="{{ route('Orders.index') }}"  >
                                    Place the order
                            </a>
                </div>
            </div>
        </div>
    <div class="panel"></div>
</div>
            <!-- /ASIDE -->
    </div>
       
</div>



@yield('action-content')
<!-- /.content -->
</div>

<style>
   img {
           display: block;
           margin-left: auto;
           margin-right: auto;
       }
         img:hover {
             box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
         }
    table {
border-collapse: collapse;
width: 100%;
}

th, td {
padding: 8px;
text-align: left;
border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
}

</style>

@endsection