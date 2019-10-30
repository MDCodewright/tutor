@extends('layouts.modulesdash')

@section('content')
    <section class="content">
      <div class="row">
          <div class="col-md-10">
            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Assignments</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <a href="#">Assignment 1</a>
              </div>
              <div class="box-body">
                <a href="#">Assignment 2</a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
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
              <div class="box-body">
                <a href="#">Announcement 1</a>
              </div>
              <div class="box-body">
                <a href="#">Announcement 2</a>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
    </section>
    
@endsection