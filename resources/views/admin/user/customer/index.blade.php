@extends('admin.user.customer.base')
@section('action-content')
<li class="active">List</li>
</ol>
</section>
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-xs-12">
        <!-- general form elements -->
        @if(session()->has('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>   
          @endif
          @if(session()->has('danger'))
          <div class="alert alert-danger">
            {{ session()->get('danger') }}
          </div>   
          @endif
          @if(session()->has('info'))
          <div class="alert alert-info">
            {{ session()->get('info') }}
          </div>   
          @endif
        <div class="box box-info">
          <div class="box-header with-border">
            <h1 class="box-title"><b> List of Customer </b></h1>
          </div>
        
          <!-- /.box-header -->
          <!-- form start -->
        
                  <div class="table-wrapper">
                    
                <div class="table-filter">
                    <div class="box-header ">
                      </div>
                  <div class="row">
                      <form action="{{ url('/user-management/customer') }}" >
                        <div class="col-sm-3">
                            <div class="show-entries">
                             
                              </div>
                          </div>
                      </form>
                     <div class="col-sm-9">
                          <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                          <div class="filter-group">
                            <label>Name</label>
                            <input type="text"  onkeyup="myFunction()" placeholder="Search for names.." class="form-control" id="myinput">
                          </div>
                        
                              </div>
                          </div>
                </div>
                <div class="row">
                      <table class="table table-striped table-hover " id="mytable" >
                              <thead>                            
                                  <tr >
                                      <th colspan="2">Username</th>
                                      <th colspan="2" >E-Mail</th>
                                      <th colspan="2">Created At</th>
                                      <th colspan="2" >Updated At</th>

                                  </tr>
                              </thead>
                              <tbody>
                                @if($customers)
                                @foreach($customers as $customer)
                                    <tr>
                                        <td colspan="2">{{ $customer->name }}</td>
                                        <td colspan="2">{{ $customer->email }}</td>
                                        <td colspan="2">{{ $customer->created_at}}</td>
                                        <td colspan="2">{{ $customer->updated_at}}</td>

                                        <td >
                                          <form id="delete" class="row" method="POST"  action="{{ route('customer.destroy', ['id' => $customer->id]) }}">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}        
                                            
                                                <button  class="btn btn-danger "  >
                                                    <span class="fa fa-trash" ></span>
                                                </button>
                        
                                          </form>                                        
                                        </td>  
                                        
                                    </tr>
                                @endforeach
                            @endif
                              </tbody>
                          </table>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                      <div class="dataTables_info" id="example2_info" role="status" aria-live="polite"><strong> {{ 1 }} to {{ count($customers) }} of {{count($all)}} entries </strong></div>
                    </div>
                    <div class="col-sm-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        {{ $customers->links() }}
                      </div>
                    </div>
                  </div>                 
              </div>
              </div>     
      <!--/.col (left) -->
      <!-- right column -->
     
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <script type="text/javascript">
            function Delete(){
              swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
        
        })
        .then((result) => {
          if (result.value) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            }
            );
          } else {
            swal("Your imaginary file is safe!");
          }
        });
        
    }
  </script>
    <script type="text/javascript">
      function Edit(){
        swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});
  
}
</script>
<script>
  function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("myinput");
    filter = input.value.toUpperCase();
    table = document.getElementById("mytable");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
  </script>
  <script>
  $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#mytable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
  </script>
@endsection