@extends('admin.system.country.base')
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
            <h1 class="box-title"><b>Add city</b></h1>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form class="form-horizontal"action="{{ route('city.store') }}" method="POST"   >
          {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="City" class="col-sm-2 control-label">City</label>
                     <div class="col-sm-8">
                      <select class="form-control" name="Id_Country" >
                                        <option value="" >---selected---</option>
                                  @if($countries)
                                      @foreach($countries as $country)
                                         <option value = {{ $country->id }} > {{ $country->NameCountry }}</option>
                                       @endforeach
                                   @endif
                      </select>
                      @if ($errors->has('Id_Country') )
                      <span class="help-block text-danger">
                          <strong >{{ $errors->first('Id_Country') }}</strong>
                      </span>
                      @endif
                     </div>
                </div>
              <div class="form-group">
                <label for="NameCity" class="col-sm-2 control-label">Name City</label>
              
                  <div class="col-sm-8">
                  <input id="NameCity" value="{{ old('NameCity') }}" type="text" class="form-control" name="NameCity" placeholder="Name"  >
                  @if ($errors->has('NameCity'))
                  <span class="help-block text-danger">
                      <strong >{{ $errors->first('NameCity') }}</strong>
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
