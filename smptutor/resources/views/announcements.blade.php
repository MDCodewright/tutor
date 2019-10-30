@extends('layouts.coursesdashboard')

@section('content')

<section class="content">
      
      <div class="row">
          <div class="col-md-10">
            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Announcements</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              @foreach($announcements as $announcement)
              <div class="box-body">
                <a href="#">{{$announcement->content}} 1</a>
                <a href="#">{{$announcement->created_at}} 1</a>
              </div>
              @endforeach
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
    </section>

@endsection