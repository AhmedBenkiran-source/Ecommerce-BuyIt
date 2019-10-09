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
                       
                                  <div class="box-body">
                              
                                        <div class="box-header ">
                                            </div>
                                            
                                        <div class="col-md-4">
                                                <div class="shop">
                                                        <button type="button" class="btn btn-block btn-social btn-bitbucket btn btn-primary " data-toggle="dropdown">
                                                                 <i class="fa fa-language "style="font-size:25px;"></i> 
                                                                         <div class="shop-body">
                                                                           <h3>Adminstrator<br>Report</h3>
                                                                         </div>
                                                          </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                       
                                                                <li><a class="btn btn-default" href="{{ url('system-management/impression/admin/pdf') }}" >Pdf</a></li>
                                                                <li><a  class="btn btn-default" href="{{ url('system-management/impression/admin/excel') }}" >Excel</a></li>
                                                               
                                                           </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                            <div class="shop">
                                                        <button type="button" class="btn btn-block btn-social btn-bitbucket btn btn-primary " data-toggle="dropdown">
                                                                 <i class="fa fa-language "style="font-size:25px;"></i> 
                                                                         <div class="shop-body">
                                                                           <h3>Customer<br>Report</h3>
                                                                         </div>
                                                          </button>
                                                          <ul class="dropdown-menu pull-right" role="menu">
                                                            <li><a class="btn btn-default" href="{{ url('system-management/impression/customer/pdf') }}" >Pdf</a></li>
                                                            <li><a  class="btn btn-default" href="{{ url('system-management/impression/customer/excel') }}" >Excel</a></li>
                                                           </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                        <div class="shop">
                                                                <button type="button" class="btn btn-block btn-social btn-bitbucket btn btn-primary " data-toggle="dropdown">
                                                                         <i class="fa fa-language "style="font-size:25px;"></i> 
                                                                                 <div class="shop-body">
                                                                                   <h3>Products<br>Report</h3>
                                                                                 </div>
                                                                  </button>
                                                                  <ul class="dropdown-menu pull-right" role="menu">
                                                                      <li><a class="btn btn-default" href="{{ url('system-management/impression/pdf') }}" >Pdf</a></li>
                                                                      <li><a  class="btn btn-default" href="{{ url('system-management/impression/excel') }}" >Excel</a></li>
                                                                 </ul>
                                                        </div>
                                                    </div>
                                                    
                                  </div>
                                  <div class="box-body">

                                                            <div class="col-md-4">
                                                                        <div class="shop">
                                                                                <button type="button" class="btn btn-block btn-social btn-bitbucket btn btn-primary " data-toggle="dropdown">
                                                                                         <i class="fa fa-language "style="font-size:25px;"></i> 
                                                                                                 <div class="shop-body">
                                                                                                   <h3>Brands<br>Report</h3>
                                                                                                 </div>
                                                                                  </button>
                                                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                                                        <li><a class="btn btn-default" href="#">Pdf</a></li>
                                                                                        <li><a  class="btn btn-default" href="#">Excel</a></li>
                                                                                   </ul>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-4">
                                                                                <div class="shop">
                                                                                        <button type="button" class="btn btn-block btn-social btn-bitbucket btn btn-primary " data-toggle="dropdown">
                                                                                                 <i class="fa fa-language "style="font-size:25px;"></i> 
                                                                                                         <div class="shop-body">
                                                                                                           <h3>Categories<br>Report</h3>
                                                                                                         </div>
                                                                                          </button>
                                                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                                                <li><a class="btn btn-default" href="#">Pdf</a></li>
                                                                                                <li><a  class="btn btn-default" href="#">Excel</a></li>
                                                                                           </ul>
                                                                                </div>
                                                                            </div>
                                                 <div class="col-md-4">
                                                                                        <div class="shop">
                                                                                                <button type="button" class="btn btn-block btn-social btn-bitbucket btn btn-primary " data-toggle="dropdown">
                                                                                                         <i class="fa fa-language "style="font-size:25px;"></i> 
                                                                                                                 <div class="shop-body">
                                                                                                                   <h3>Providers<br>Report</h3>
                                                                                                                 </div>
                                                                                                  </button>
                                                                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                                                                        <li><a class="btn btn-default" href="#">Pdf</a></li>
                                                                                                        <li><a  class="btn btn-default" href="#">Excel</a></li>
                                                                                                   </ul>
                                                                                        </div>
                                                                                    </div>
          </div>       
      </div>
    </div>
</section>  
@endsection