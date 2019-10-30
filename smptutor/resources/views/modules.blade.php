@extends('layouts.modulesdash')

@section('content')
        <section class="content">
            <div class="row">
            @foreach($modules as $module)
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h4>{{$module->title}}</h4>

                            <p>{{$module->content}}</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-list-box"></i>
                        </div>
                        <a href="{{ route('home_courses') }}" class="small-box-footer">Start course<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
            
                </div>
            @endforeach    <!-- ./col -->
        </section>
@endsection