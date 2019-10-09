@extends('admin.system.provider.base')
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
            <h1 class="box-title"><b>Add Provider</b></h1>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form class="form-horizontal" action="{{ route('provider.store') }}" method="POST"    >
          {{ csrf_field() }}
            <div class="box-body">

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Name Provider</label>
                  <div class="col-sm-8">
                  <input type="text" class="form-control" name="NameProvider" placeholder="Name" value="{{ old('NameProvider') }}">
                  @if ($errors->has('NameProvider'))
                  <span class="help-block text-danger">
                      <strong >{{ $errors->first('NameProvider') }}</strong>
                  </span>
              @endif
                </div>
              </div>      
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Phone number</label>
                  <div class="col-sm-8">
                    <input type="tel" class="form-control" name="TeleProvider" placeholder="Phone number" value="{{ old('TeleProvider') }}">
                    @if ($errors->has('TeleProvider'))
                    <span class="help-block text-danger">
                        <strong >{{ $errors->first('TeleProvider') }}</strong>
                    </span>
                @endif
                  </div>
              </div> 
              <div class="form-group" >
                <label for="" class="col-sm-2 control-label">E-mail</label>
                  <div class="col-sm-8">
                  <input type="email" class="form-control" name="MailProvider" placeholder="E-mail" value="{{ old('MailProvider') }}">
                  @if ($errors->has('MailProvider'))
                  <span class="help-block text-danger">
                      <strong >{{ $errors->first('MailProvider') }}</strong>
                  </span>
              @endif
                </div>
                </div>
              </div> 
        
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-8">
                  <textarea class="form-control" name="AddrProvider" rows="3" placeholder="Enter Address ..." >{{ old('AddrProvider') }}</textarea>
                  @if ($errors->has('AddrProvider'))
                  <span class="help-block text-danger">
                      <strong >{{ $errors->first('AddrProvider') }}</strong>
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
     
    
    <!-- /.row -->
</section>
@endsection
