@extends('admin.user.admin.base')

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
                                <h1 class="box-title"><b>Add Adminstrator</b></h1>
                        </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">User Name</label>

                                <div class="col-md-8">
                                    <input  type="text" class="form-control" name="username"  placeholder="username"  value="{{ old('username') }}" >

                                    @if ($errors->has('username'))
                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">E-Mail Address</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email"  placeholder="E-mail" value="{{ old('email') }}" >

                                    @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="col-sm-2 control-label">First Name</label>

                                <div class="col-md-8">
                                    <input id="firstname" type="text" class="form-control" placeholder="firstname" name="firstname" value="{{ old('firstname') }}" >

                                    @if ($errors->has('firstname'))
                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lastname" class="col-sm-2 control-label">Last Name</label>

                                <div class="col-md-8">
                                    <input  type="text" class="form-control"  placeholder="lastname" name="lastname" value="{{ old('lastname') }}" >

                                    @if ($errors->has('lastname'))
                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Password</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" placeholder="password" name="password" >

                                    @if ($errors->has('password'))
                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-sm-2 control-label">Confirm Password</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="password-confirm" name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ImageAdmin" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-8">
                                  <input type="file" id="ImageAdmin"  name="ImageAdmin">
                                  <p class="help-block">Add Adminstrator image.</p>
                                  @if ($errors->has('ImageAdmin') )
                                  <span class="help-block text-danger">
                                      <strong >{{ $errors->first('ImageAdmin') }}</strong>
                                  </span>
                                  @endif  
                                </div>
                              </div>
                            <div class="box-footer">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary pull-right">Create</button>
                            </div>
                          
                        </div>
                    </form>
                
             </div>
    </div>
</div>
</section>
@endsection
