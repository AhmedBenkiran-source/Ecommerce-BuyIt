@extends('admin.system.country.base')

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
            <h1 class="box-title"><b>Edit country</b></h1>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form class="form-horizontal" action="{{ route('country.update', ['id' => $country->id]) }}" method="POST"  >
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="PUT">

            <div class="box-body">

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Name Bountry</label>                
                     <div class="col-sm-8">
                         <input type="text" class="form-control" value="{{ $country->NameCountry }}" name="NameCountry" placeholder="Name" required="required" value="{{ $country->NameCountry}}">
                         @if ($errors->has('NameCountry'))
                         <span class="help-block text-danger">
                             <strong >{{ $errors->first('NameCountry') }}</strong>
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
