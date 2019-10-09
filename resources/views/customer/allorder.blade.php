

@extends('customer.layouts.app-template')
@section('content')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li ><a href="index.html">Home</a></li>
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
                                    <li ><a href="{{ route('Carts.index') }}"> <label for="">My Shopping Cart  </label></a></li>   
                                    <li class="active"><a href="{{ route('Orders.index') }}"> <label for="">  My All Orders </label></a></li>
                            </ul>  
                    
                        </div>
                </div>
                
                <div class="col-md-9 ">
                  
                    <div class="aside">
                            <h3 class="aside-title" ><font color="maroon "><i><u>My All Orders</u></i></font></h3>

                    </div>
                            {{ csrf_field() }}
                            <div class="row">
                                    <table class="table table-striped table-hover " id="mytable" >
                                            <thead>                            
                                                <tr >
                                                    <th>Created At</th>
                                                    <th>Status</th>   
                                                    <th></th>           
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @if($orders)
                                              @foreach($orders as $order)
                                                  <tr>
                                                    <td>{{ $order->created_at }}</td>
                                                    <td>{{ $order->Status }}</td>

                                                    <td></td>
                                                      <td >
                                                        <a   href="{{ route('Carts.index') }}"  class="btn btn-default">
                                                            <span class="fa fa-plus"></span></a>   
                                                      </td>  
                                                      
                                                  </tr>
                                              @endforeach
                                          @endif
                                            </tbody>
                                        </table>
                              </div> 
               
                    </form>
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