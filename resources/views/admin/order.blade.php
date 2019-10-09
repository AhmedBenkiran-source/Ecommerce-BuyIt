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
      
       <li class="active">List</li>
    </ol>
    </section>
    <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-xs-12">
            <!-- general form elements -->
            @if(session()->has('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>   
              @endif
              @if(session()->has('danger'))
              <div class="alert alert-danger">
                {{ session()->get('danger') }}
              </div>   
              @endif
              @if(session()->has('info'))
              <div class="alert alert-info">
                {{ session()->get('info') }}
              </div>   
              @endif
            <div class="box box-info">
              <div class="box-header with-border">
                <h1 class="box-title"><b> List of Orders</b></h1>
              </div>
             
              
    
              <!-- /.box-header -->
              <!-- form start -->
            
                      <div class="table-wrapper">
                        
                    <div class="table-filter">
                        <div class="box-header ">
                          </div>
                          <div class="row">
                            <form action="{{ url('/system-management/brand') }}" >
                              <div class="col-sm-3">
                               
                                </div>
                            </form>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                <div class="filter-group">
                                  <label>Name</label>
                                  <input type="text"  onkeyup="myFunction()" placeholder="Search for names.." class="form-control" id="myinput">
                                </div>
                              
                                    </div>
                                </div>
                      </div>
                    <div class="row">
                        <table class="table table-striped table-hover " id="mytable" >
                            <thead>                                     
                                                  <tr >
                                                      <th >Orders</th>                                                  
                                                      <th>Created At</th>
                                                      <th>Status</th>
                                                      <th></th><th></th>
                                                  </tr>
                                     </thead>
                                      <tbody>
                                              @if($orders)
                                              @foreach($orders as $order)
                                         
                                                <tr>
                                                  <td>{{ $order->id }}</td>
                                                  <td>{{ $order->created_at }}</td>
                                                  @if( $order->Status == "Valide")
                                                  <td><span class="label label-success">Valide</span></td>
                                                  @endif   
                                                  @if( $order->Status == "On Hold...")
                                                  <td><span class="label label-warning">On Hold...</span></td>
                                                  @endif   
                                                  @if( $order->Status == "Refused")
                                                  <td><span class="label label-danger">Refused</span></td>
                                                  @endif   

                                                  <td >
                                                      <form id="delete" class="row" method="POST"   action="{{ route('order.destroy', ['id' => $order->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}        
                                                      
                                                          <button  class="btn btn-danger " onclick="Delete()" >
                                                              <span class="fa fa-trash" ></span>
                                                          </button>
                                                          <a href="{{ route('order.edit', ['id' => $order->id]) }}"  class="btn btn-primary"> 
                                                             Valide</a>
                                                             <a href="{{ route('mailbox.edit', ['id' => $order->id]) }}"  class="btn btn-primary"> 
                                                                Refused</a>                                        
                                                         <a href="{{ route('order.show', ['id' => $order->id]) }}"  class="btn btn-default">
                                                            <span class="fa fa-plus"></span></a>   
                                                          </form>                                          
                                                            
                                                    </td>  
                                                    <td></td>                                              
                                                </tr>
                                          
                                            @endforeach
                                            @endif
                                      </tbody>
                       </table>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                    </div>
                                    <div class="col-sm-7">
                                      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                          {{ $orders->links() }} 
                
                                      </div>
                                    </div>
                                  </div>
                                  </div>
                              </div>     
                      <!--/.col (left) -->
                      <!-- right column -->
                     
                      <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                  </section>
     
        </div>
  <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i;
          input = document.getElementById("myinput");
          filter = input.value.toUpperCase();
          table = document.getElementById("mytable");
          tr = table.getElementsByTagName("tr");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>
@endsection