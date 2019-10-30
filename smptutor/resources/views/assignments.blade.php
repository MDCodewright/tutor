@extends('layouts.coursesdashboard')

@section('content')

<style>
   
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
    </section>
    
@endsection