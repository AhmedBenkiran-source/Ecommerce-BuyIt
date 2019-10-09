@extends('admin.system.provider.base')
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
          <h1 class="box-title"><b>Poster provider</b></h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-header">
          </div>
    
      <table class="table">
         
          <tbody>
            <tr>
              <td></td>
              <td>Name of provider </td>  
              <td >{{$provider->NameProvider}}</td>       
            </tr>
            <tr>
                <td></td>
                <td>E-mail </td>  
                <td >{{$provider->MailProvider}}</td>       
            </tr>
            <tr>
                  <td></td>
                  <td>Phone numberr </td>  
                  <td >{{$provider->TeleProvider}}</td>       
            </tr>
            <tr>
                    <td></td>
                    <td>Address </td>  
                    <td >{{$provider->AddrProvider}}</td>       
                  </tr>
           <tr>
              <td></td>
                  <td >Created At  </td>  
                  <td>{{$provider->created_at}}</td>
           </tr>   
           <tr>
              <td></td>
                  <td >Updated At  </td>  
                  <td>{{$provider->updated_at}}</td>
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