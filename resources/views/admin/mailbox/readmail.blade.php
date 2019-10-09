
  
  @extends('admin.mailbox.base')
  @section('action-content')
  <li class="active">List</li>
  </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-3">
        <a href="{{url('/mailbox/compose')}}" class="btn btn-primary btn-block margin-bottom">Compose</a>

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Folders</h3>

            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                <span class="label label-primary pull-right">12</span></a></li>
              <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
              <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
              <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
              </li>
              <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
            </ul>
          </div>
          <!-- /.box-body -->
        </div>
    
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Read Mail</h3>

            <div class="box-tools pull-right">
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
              <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-read-info">
              <h5>From: {{ $contact->Email }}
                <span class="mailbox-read-time pull-right">{{ $contact->created_at }}</span></h5>
            </div>
            <!-- /.mailbox-read-info -->
            <div class="mailbox-controls with-border text-center">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                  <i class="fa fa-trash-o"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                  <i class="fa fa-reply"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                  <i class="fa fa-share"></i></button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                <i class="fa fa-print"></i></button>
            </div>
            <!-- /.mailbox-controls -->
            <div class="mailbox-read-message">
              <p>Hello {{ $contact->Name }},</p>

              <p>{{ $contact->Message }}</p>

             
            </div>
            <!-- /.mailbox-read-message -->
          </div>
          <!-- /.box-body -->

          <!-- /.box-footer -->
          <div class="box-footer">
            <div class="pull-right">
              <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
              <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
            </div>
            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
@endsection							

</body>
</html>
