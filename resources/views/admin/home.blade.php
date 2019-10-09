@extends('admin.layouts.app-template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ count($orders) }} </h3>

              <p>Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ count($products) }}</h3>

              <p>Number of Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ count($users) }}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ count($brands) }}</h3>

              <p>Number of Brands</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">

      </div>

          <!-- /.box -->
  <!-- TABLE: LATEST ORDERS -->
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Contac Name</th>
                  <th> Created At</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @if($orders)
                  @foreach ( $orders as $order)
                  <tr>
                      <td>{{ $order->id }}</td>
                      <td>{{ $order->ContactName }}</td>
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

              
                    </tr>
                  @endforeach
                  @endif

              
            
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
          </div>
          <!-- /.box-footer -->
    </div>
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Recently Added Categories</h3>
      
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <ul class="products-list product-list-in-box">
                      @if($categories)
                      @foreach ($categories as $category)
                      <li class="item">
                          <div class="product-img">
                              <img class="a" src="{{ asset('storage/'.$category->ImageCat) }}" alt="" height="250" width="150">
                            </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">{{ $category->NameCat }}
                              <span class="label label-warning pull-right">{{ count($products) }}</span></a>
                            <span class="product-description">
                                {{ $category->created_at }}
                              </span>
                          </div>
                        </li>
                      @endforeach                    
                      @endif
                      <!-- /.item -->
                     
                    </ul>
                  </div>
                 
                </div>
                <!-- /.box -->
    <!-- /.box -->
              <!-- PRODUCT LIST -->
    </section>
  
  </div>
  <div class="box box-info">

  </div>

@endsection