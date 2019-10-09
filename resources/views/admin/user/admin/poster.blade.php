@extends('admin.user.admin.base')
@section('action-content')
<li class="active">Poster</li>
</ol>
</section>
<section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h1 class="box-title"><b>Poster Users</b></h1>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
      
              <div class="box-header">
              </div>
            <table class="table">
               
                <tbody>
                  <tr>
                    <td></td>
                    <td>User Name: </td>  
                    <td >{{ $user->username }}</td>
                    <td rowspan="8">
                 
                      <div class="img-magnifier-container">
                          <img id="myimage" src="{{ asset('storage/'.$user->ImageAdmin) }}" width="250" height="250">
                        </div>
                     </td>
                  </tr>
                  <tr>
                        <td></td>
                        <td>First Name: </td>  
                        <td >{{$user->firstname}}</td>
                   
                      </tr>
                      <tr>
                            <td></td>
                            <td>Last Name: </td>  
                            <td >{{$user->lastname}}</td>
                       
                      </tr>
                      <tr>
                            <td></td>
                            <td>E-Mail: </td>  
                            <td >{{$user->email}}</td>
                       
                      </tr>
                      
                 <tr>
                    <td></td>
                        <td >Created At : </td>  
                        <td>{{$user->created_at}}</td>
                 </tr>   
                 <tr>
                    <td></td>
                        <td >Updated At : </td>  
                        <td>{{$user->updated_at}}</td>
                 </tr>   
                </tbody>
      
            </table>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </section>
      
@endsection