@extends('admin.system.brand.base')
@section('action-content')
<li class="active">List</li>
</ol>
</section>
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h1 class="box-title"><b>Add brand</b></h1>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form class="form-horizontal" action="{{ route('brand.store') }}" method="POST"  >
          {{ csrf_field() }}
            <div class="box-body">

              <div class="form-group" >
                <label for="NameBrand" class="col-sm-2 control-label">Name Brand</label>
              
                  <div class="col-sm-8">
                  <input id="NameBrand" type="text" class="form-control" value="{{ old('NameBrand') }}" name="NameBrand" placeholder="Name">
                  @if ($errors->has('NameBrand'))
                  <span class="help-block text-danger">
                      <strong >{{ $errors->first('NameBrand') }}</strong>
                  </span>
              @endif
                </div>
              </div>                 
            <div class="box-footer">
              <button type="reset" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary pull-right">Add</button>
            </div>
            <!-- /.box-footer -->
          </div>
        </form>
          
        </div>
      </div>
      <!--/.col (left) -->
      <!-- right column -->
     
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
@endsection
