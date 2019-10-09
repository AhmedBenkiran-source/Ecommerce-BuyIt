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
                            <h3 class="aside-title" >My Account</h3>
                            <ul  class="main-nav nav navbar-nav">
                                    <li></li>
                                    <li  class="active"><a href="{{ route('Account.index') }}"> <label for=""> Personal Information </label></a></li>
                                    <li><a href="{{ route('Wishlist.index') }}"> <label for=""> My Wishlist </label></a></li>                                  
                                    <li><a href="{{ route('Carts.index') }}"> <label for="">My Shopping Cart  </label></a></li>   
                                    <li ><a href="{{ route('AllOrders.index') }}"> <label for="">  My All Orders </label></a></li>
                            </ul>  
                    
                        </div>
                    </div>
                    <div id="store" class="col-md-9">
                        <div class="aside">
                                <h3 class="aside-title" ><i><u>My Information</u></i></h3>

                        </div>
                    <!-- /aside Widget -->
                    <table >
               
                            <tbody>
                              <tr>
                                <td></td>
                                <td>User Name: </td>  
                                <td>{{ Auth::user()->name }}</td>
                              </tr>
                              <tr>
                                        <td></td>
                                        <td>E-Mail: </td>  
                                        <td>{{ Auth::user()->email }}</td>
                                   
                             </tr>    
                             <tr>
                                <td></td>
                                    <td >Created At : </td>  
                                    <td>{{ Auth::user()->created_at }}</td>

                             </tr>   
                             <tr>
                                <td></td>
                                    <td >Updated At : </td>  
                                    <td>{{ Auth::user()->updated_at }}</td>
                             </tr>   
                             
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                            <a href="{{ route('logout') }}"    onclick="event.preventDefault();
                                            document.getElementById('admin-logout-form').submit();">
                                                    <i class="fa fa-user-o"></i>
                                                    Click here to logout </a>
                                    </td>

                                </tr>

                            </tfoot>
                  
                        </table>
                        <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                     </form>  
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