

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
                                    <li class="active"><a href="{{ route('AllOrders.store') }}"> <label for="">  My All Orders </label></a></li>
                            </ul>  
                    
                        </div>
                </div>
                
                <div class="col-md-9 ">
                  
                    <div class="aside">
                            <h3 class="aside-title" ><font color="maroon "><i><u>1. Please fill in your shipping address</u></i></font></h3>

                    </div>
                    <form class="form-horizontal" action="{{ route('Orders.store') }}" method="POST"  enctype="multipart/form-data" >
                            {{ csrf_field() }}
                        <div class="form-group">
                                <label for="ContactName" class="col-sm-3 control-label">Contact Name:</label>                
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="ContactName" placeholder="Contact Name" value="{{ old('ContactName') }}">
                                @if ($errors->has('ContactName') )
                                <span class="help-block text-danger">
                                    <strong >{{ $errors->first('ContactName') }}</strong>
                                </span>
                                @endif 
                              </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="Country" class="col-sm-3 control-label">Country/Region:</label>
                                <div class="col-sm-8">
                                <select class="form-control" name="Country">
                                            @if($countries)
                                                @foreach($countries as $country)
                                                    <option value = {{ $country->NameCountry }} >{{ $country->NameCountry }}</option>
                                                @endforeach
                                            @endif
                                </select>
                                @if ($errors->has('Country') )
                                <span class="help-block text-danger">
                                    <strong >{{ $errors->first('Country') }}</strong>
                                </span>
                                @endif
                                 </div>
                      </div> 
                     
                      <div class="form-group">
                            <label for="Address" class="col-sm-3 control-label">City:</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="City">
                                        @if($cities)
                                            @foreach($cities as $city)
                                                
                                                <option value = {{ $city->NameCity }} >{{ $city->NameCity }}</option>
                                            @endforeach
                                        @endif
                            </select>
                            @if ($errors->has('Address') )
                            <span class="help-block text-danger">
                                <strong >{{ $errors->first('Address') }}</strong>
                            </span>
                            @endif
                             </div>
                  </div> 
                      <div class="form-group">
                            <label for="Addrese" class="col-sm-3 control-label">Street Addrese:</label>                
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="Addrese" placeholder="Street Addrese" value="{{ old('Addrese') }}">
                            @if ($errors->has('Addrese') )
                            <span class="help-block text-danger">
                                <strong >{{ $errors->first('Addrese') }}</strong>
                            </span>
                            @endif 
                          </div>
                    </div> 
                    <div class="form-group">
                      <label for="Postal" class="col-sm-3 control-label">Postal Code:</label>                
                      <div class="col-sm-8">
                      <input type="text" class="form-control" name="Postal" placeholder="Postal Code" value="{{ old('Postal') }}">
                      @if ($errors->has('Postal') )
                      <span class="help-block text-danger">
                          <strong >{{ $errors->first('Postal') }}</strong>
                      </span>
                      @endif 
                    </div>
                     </div>
                    <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Phone number:</label>                
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" placeholder="Country Code - Mobile Number" value="{{ old('phone') }}">
                            @if ($errors->has('phone') )
                            <span class="help-block text-danger">
                                <strong >{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif 
                             </div>
                     </div>

                     <div class="aside"> 
                         <h3 class="aside-title"   > <font color="maroon "> <i><u>2. Payemment methode</u></i> </font>
                            <i></i>
                            <i  class="fa fa-cc-paypal" style="font-size:28px"></i>
                            <i class="fa fa-cc-visa" style="font-size:28px"></i>
                            <i class="fa fa-cc-mastercard" style="font-size:28px"></i>
                            <i class="fa fa-cc-discover" style="font-size:28px"></i>
                            <i class="fa fa-cc-amex" style="font-size:28px"></i>
                            <i class="fa fa-credit-card" style="font-size:28px"></i>

                          
                         </h3>
                    

                        </div>
                     <div class="form-group">
                            <label for="Card" class="col-sm-3 control-label">Card number:</label>                
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="Card" placeholder="Card Number" value="{{ old('Card') }}">
                            @if ($errors->has('Card') )
                            <span class="help-block text-danger">
                                <strong >{{ $errors->first('Card') }}</strong>
                            </span>
                            @endif 
                             </div>
                     </div>
                     <div class="form-group">
                            <label for="code" class="col-sm-3 control-label">Security code:</label>                
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="code" placeholder="Security code" value="{{ old('code') }}">
                            @if ($errors->has('code') )
                            <span class="help-block text-danger">
                                <strong >{{ $errors->first('code') }}</strong>
                            </span>
                            @endif 
                             </div>
                     </div>
                     <div class="form-group">
                            <label for="Cardholder" class="col-sm-3 control-label">Cardholder name:</label>                
                            <div class="col-sm-4">
                            <input type="text" class="form-control" name="Cardholder" placeholder="First name" value="{{ old('Cardholder') }}">
                            @if ($errors->has('Cardholder') )
                            <span class="help-block text-danger">
                                <strong >{{ $errors->first('Cardholder') }}</strong>
                            </span>
                            @endif 
                             </div>

                              <div class="col-sm-4">
                              <input type="text" class="form-control" name="PriceProduct" placeholder="Last name" value="{{ old('PriceProduct') }}">
                              @if ($errors->has('PriceProduct') )
                              <span class="help-block text-danger">
                                  <strong >{{ $errors->first('PriceProduct') }}</strong>
                              </span>
                              @endif 
                               </div>
                     </div>
                     <div class="aside"> 
                            <h3 class="aside-title"   > <font color="maroon "> <i><u>3. Review and confirm your order</u></i> </font></h3>
                    </div>
                    <div class="form-group">
                    <table>
                            <thead>                            
                                    <tr >
                                        <th colspan="2"> Product Name & Details</th>
                                     
                                        <th>Price</th>
                                        <th>Quantity</th>

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
                                   
                                      <td >
                                 {{ $product->NameProduct }}/{{ $product->GetNameCate->NameCat }}/ {{ $product->GetNameBrand->NameBrand }}
                                    </td>
                               
                                    <td>{{ $pr=$product->PriceProduct }}</td>                                      
                                        <td>{{ $cart->Qt }}</td>


                                     
                                </tr>
                               
                                @endif
                       
                                @endforeach
                                @endif
                              @endforeach
                              @endif
                        </tbody>
                    </table>
                </div>
                     <div class="box-footer " >
                            <button type="submit" class="btn btn-danger ">Confirm & pay</button>                                  
                            <button type="reset" class="btn btn-default pull-right" >Cancel</button>
                      </div>
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