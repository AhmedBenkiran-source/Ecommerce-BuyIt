@extends('admin.layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Orders
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="{{url('/product')}}">Orders</a></li>
      
       <li class="active">Pster</li>
    </ol>
    </section>

    <section class="content">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h1 class="box-title"><b>Poster produt</b></h1>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
          
                  <div class="box-header">
                  </div>
                  <table class="table">
                       
                      <tbody>
                   @if($order)
                        <tr>
                          <td></td>
                          <td>Name customer: </td>  
                          <td >{{$order->ContactName}}</td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                                <td></td>
                                <td>Adrrese:</td>  
                                <td>{{$order->Country}} ,{{$order->City}} ,{{$order->Addrese}} ,{{$order->Postal}}</td>
                                <td></td><td></td><td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td>Number Phone :</td>
                            <td>{{$order->PhoneNumber}}</td>
                            <td></td><td></td><td></td>
                        </tr>
                        <tr>
                                <td></td>
                                <td>Card Number :</td>
                                <td>{{$order->CardNumber}}</td>
                                <td></td><td></td><td></td>
                            </tr>
                            <tr>
                                    <td></td>
                                    <td>Securty Code:</td>
                                    <td>{{$order->SecurtyCode}}</td>
                                    <td></td><td></td><td></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td>Cardholder Name:</td>
                                        <td>{{$order->CardholderName}}</td>
                                        <td></td><td></td><td></td>
                                    </tr>
                                    <tr>
                                            <td></td>
                                            <td>Created At:</td>
                                            <td>{{$order->created_at}}</td>
                                            <td></td><td></td><td></td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                                <td>Status:</td>
                                                <td>{{$order->Status}}</td>
                                                <td></td><td></td><td></td>
                                            </tr>
                               
                         
                       @endif
                      </tbody>
          </table>
              </div>
              <!--/.col (left) -->
              <!-- right column -->
             
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </section>
    </div>
@endsection