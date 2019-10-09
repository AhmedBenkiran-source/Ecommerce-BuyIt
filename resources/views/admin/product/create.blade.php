@extends('admin.product.base')
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
        <form class="form-horizontal" action="{{ route('product.store') }}" method="POST"  enctype="multipart/form-data" >
          {{ csrf_field() }}
            <div class="box-body">

            <div class="form-group">
              <label for="NameProduct" class="col-sm-2 control-label">Name</label>
            
                <div class="col-sm-8">
                <input  id="NameProduct" value="{{ old('NameProduct') }}" type="text" class="form-control" name="NameProduct" placeholder="Name" >
                @if ($errors->has('NameProduct') )
                <span class="help-block text-danger">
                    <strong >{{ $errors->first('NameProduct') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group">
                  <label for="Brand" class="col-sm-2 control-label">Brand</label>
                   <div class="col-sm-8">
                    <select class="form-control" name="Brand" >
                                      <option value="" >---selected---</option>
                                @if($brand)
                                    @foreach($brand as $brand)
                                       <option value = {{ $brand->id }} >{{ $brand->NameBrand }}</option>
                                     @endforeach
                                 @endif
                    </select>
                    @if ($errors->has('Brand') )
                    <span class="help-block text-danger">
                        <strong >{{ $errors->first('Brand') }}</strong>
                    </span>
                    @endif
                   </div>
              </div>
            <div class="form-group">
              <label for="Category" class="col-sm-2 control-label">Category</label>
               <div class="col-sm-8">
                <select class="form-control" name="Category">
                                  <option value="" >---selected---</option>
                            @if($category)
                                @foreach($category as $category)
                                   <option value = {{ $category->id }} >{{ $category->NameCat }}</option>
                                 @endforeach
                             @endif
                </select>
                @if ($errors->has('Category') )
                    <span class="help-block text-danger">
                        <strong >{{ $errors->first('Category') }}</strong>
                    </span>
                    @endif
               </div>
            </div>
            <div class="form-group">
                <label for="Provider" class="col-sm-2 control-label">Provider</label>
                 <div class="col-sm-8">
                  <select class="form-control" name="Provider">
                                    <option value="" >---selected---</option>
                              @if($provider)
                                  @foreach($provider as $provider)
                                     <option value = {{ $provider->id }} >{{ $provider->NameProvider }}</option>
                                   @endforeach
                               @endif
                  </select>
                  @if ($errors->has('Provider') )
                  <span class="help-block text-danger">
                      <strong >{{ $errors->first('Provider') }}</strong>
                  </span>
                  @endif
                 </div>
              </div>
         
           
            <div class="form-group">
              <label for="PriceProduct" class="col-sm-2 control-label">Price</label>

              <div class="col-sm-8">
              <input type="number" class="form-control" name="PriceProduct" placeholder="Price in Dollars" value="{{ old('PriceProduct') }}">
              @if ($errors->has('PriceProduct') )
              <span class="help-block text-danger">
                  <strong >{{ $errors->first('PriceProduct') }}</strong>
              </span>
              @endif 
            </div>
            </div>
            <div class="form-group">
              <label for="QuantityProduct" class="col-sm-2 control-label">Quantity</label>

              <div class="col-sm-8">
              <input type="number" class="form-control" name="QuantityProduct" placeholder="Quantity" value="{{ old('QuantityProduct') }}">
              @if ($errors->has('QuantityProduct') )
              <span class="help-block text-danger">
                  <strong >{{ $errors->first('QuantityProduct') }}</strong>
              </span>
              @endif   
            </div>
            </div>
           <div class="form-group">
             <label for="DesignationProduct" class="col-sm-2 control-label">Designation</label>
            
             <div class="col-sm-8">
                <textarea class="form-control" name="DesignationProduct" rows="3" placeholder="Enter Designation ..."> {{ old('DesignationProduct') }}</textarea>
                @if ($errors->has('DesignationProduct') )
                <span class="help-block text-danger">
                    <strong >{{ $errors->first('DesignationProduct') }}</strong>
                </span>
                @endif   
              </div>
           </div>
           <div class="form-group">
             <label for="DescriptionProduct" class="col-sm-2 control-label">Description</label>
            
                <div class="col-sm-8">
                <textarea class="form-control" name="DescriptionProduct" rows="3" placeholder="Enter Description ..."> {{ old('DescriptionProduct') }}</textarea>
                @if ($errors->has('DescriptionProduct') )
                <span class="help-block text-danger">
                    <strong >{{ $errors->first('DescriptionProduct') }}</strong>
                </span>
                @endif   
              </div>
          </div>
            <div class="form-group">
              <label for="image" class="col-sm-2 control-label">Image</label>
              <div class="col-sm-8">
                <input type="file" id="ImageProduct"  name="ImageProduct">
                <p class="help-block">Add product image.</p>
                @if ($errors->has('ImageProduct') )
                <span class="help-block text-danger">
                    <strong >{{ $errors->first('ImageProduct') }}</strong>
                </span>
                @endif  
              </div>
            </div>
        
          </div>
          <!-- /.box-body -->
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
