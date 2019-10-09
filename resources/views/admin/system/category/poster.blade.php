@extends('admin.system.category.base')
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
          <h1 class="box-title"><b>Poster Category</b></h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-header">
        </div>
      <table class="table">
         
          <tbody>
            <tr>
              <td></td>
              <td>Name of category: </td>  
              <td >{{$category->NameCat}}</td>
              <td rowspan="12"><img src="{{ asset('storage/'.$category->ImageCat) }}"  height="300" width="300" > </img> </td>

         
            </tr>
    
           <tr>
              <td></td>
                  <td >Created At : </td>  
                  <td>{{$category->created_at}}</td>
           </tr>   
           <tr>
              <td></td>
                  <td >Updated At : </td>  
                  <td>{{$category->updated_at}}</td>
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
<style>
 img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
  img:hover {
      box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
  }
  </style>
@endsection