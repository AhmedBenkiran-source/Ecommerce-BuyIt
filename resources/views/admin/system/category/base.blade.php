@extends('admin.layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Category
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="{{url('/product')}}">Category</a></li>
       
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection