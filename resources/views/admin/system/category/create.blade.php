@extends('admin.system.category.base')
@section('action-content')
<li class="active">Add</li>
     </ol>
   </section>
<section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h1 class="box-title"><b>Add product</b></h1>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
            <form class="form-horizontal" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="box-body">
  
                  <div class="form-group">
                    <label for="NameCat" class="col-sm-2 control-label">Name Category</label>
                  
                      <div class="col-sm-8">
                      <input id="NameCat" value="{{ old('NameCat') }}" type="text" class="form-control" name="NameCat" placeholder="Name">
                      @if ($errors->has('NameCat'))
                      <span class="help-block text-danger">
                          <strong >{{ $errors->first('NameCat') }}</strong>
                      </span>
                  @endif
                    </div>
                  </div> 
                  <div class="form-group">
                      <label for="ImageCat" class="col-sm-2 control-label">Image</label>
                      <div class="col-sm-8">
                        <input type="file" id="ImageCat"  name="ImageCat">
                        <p class="help-block">Add category image.</p>
                        @if ($errors->has('ImageCat') )
                        <span class="help-block text-danger">
                            <strong >{{ $errors->first('ImageCat') }}</strong>
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
