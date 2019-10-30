@extends('layouts.coursesdashboard')

@section('content')

<style>
    .mini-submenu{
    display:none;  
    background-color: rgba(0, 0, 0, 0);  
    border: 1px solid rgba(0, 0, 0, 0.9);
    border-radius: 4px;
    padding: 9px;  
    /*position: relative;*/
    width: 42px;
    }

    .mini-submenu:hover{
    cursor: pointer;
    }

    .mini-submenu .icon-bar {
    border-radius: 1px;
    display: block;
    height: 2px;
    width: 22px;
    margin-top: 3px;
    }

    .mini-submenu .icon-bar {
    background-color: #000;
    }

    #slide-submenu{
    background: rgba(0, 0, 0, 0.45);
    display: inline-block;
    padding: 0 8px;
    border-radius: 4px;
    cursor: pointer;
    }
</style>

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
              @foreach($assignments as $assignment)
              <div class="box-body">
                <a href="#">{{$assignment->assignment_title}}</a>
              </div>
              @endforeach
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
              @foreach($announcements as $announcement)
              <div class="box-body">
                <a href="#">{{$announcement->content}} 1</a>
              </div>
              @endforeach
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
      </div>
    </section>
    
@endsection