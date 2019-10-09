@extends('admin.system.brand.base')
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
          <h1 class="box-title"><b>Poster brand</b></h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-header">
        </div>
      <table class="table">
         
          <tbody>
            <tr>
              <td></td>
              <td>Name of brand: </td>  
              <td >{{$brand->NameBrand}}</td>
         
            </tr>
    
           <tr>
              <td></td>
                  <td >Created At : </td>  
                  <td>{{$brand->created_at}}</td>
           </tr>   
           <tr>
              <td></td>
                  <td >Updated At : </td>  
                  <td>{{$brand->updated_at}}</td>
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