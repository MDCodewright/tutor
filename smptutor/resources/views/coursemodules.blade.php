@extends('layouts.coursesdashboard')

@section('content')

<section class="content">
      
<div class="row">
<div class="box box-primary">
        
            <div class="box-header with-border">
              <h3 class="box-title">coursemodule->content_title</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
        @foreach($coursemodules as $coursemodule)
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$coursemodule->content_title}}</a>
                    <span class="product-description">
                    {{$coursemodule->content_details}}
                        </span>
                  </div>
                </li>
               </ul>
            </div>
        @endforeach

            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@endsection