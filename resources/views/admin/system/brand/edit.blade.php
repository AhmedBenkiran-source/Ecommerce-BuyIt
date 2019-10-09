@extends('admin.system.brand.base')

@section('action-content')
<li class="active">Edit</li>
</ol>
</section>
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h1 class="box-title"><b>Edit brand</b></h1>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form class="form-horizontal" action="{{ route('brand.update', ['id' => $brand->id]) }}" method="POST"    >
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

            <div class="box-body">

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Name Brand</label>                
                     <div class="col-sm-8">
                         <input type="text" class="form-control" value="{{ $brand->NameBrand }}" name="NameBrand" placeholder="Name" required="required" value="{{ $brand->NameBrand}}">
                         @if ($errors->has('NameBrand'))
                         <span class="help-block text-danger">
                             <strong >{{ $errors->first('NameBrand') }}</strong>
                         </span>
                     @endif
                        </div>
              </div>                 
            <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-danger pull-right">Edit</button>
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
