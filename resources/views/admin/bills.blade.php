@extends('admin.impression.base')
@section('action-content')
<li class="active">List</li>
</ol>
</section>
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-xs-12">
          <div class="box box-info">
                    <div class="box-header with-border">
                      <h1 class="box-title"><b> List of report</b></h1>
                    </div>

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
                                  <th> <a  class="btn btn-default" href="{{ url('system-management/impression/bills/excel') }}" >All bills Excel</a>
                                  </th>                    
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
                                                  @if($order->Status =="Valide")
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

                                                        <a class="btn btn-default"  href="{{ route('impression.show', ['id' => $order->id]) }}" >Pdf</a>                                                                                  
                                                        
                                                                 
                                                           </div>                                            
                                                                
                                                        </td>  
                                                        <td></td>                                              
                                                    </tr>
                                              @endif
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
    </div>
</section>  
@endsection