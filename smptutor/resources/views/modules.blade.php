@extends('layouts.modulesdash')

@section('content')
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h4>Basics of writing</h4>

                            <p>Course One</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-list-box"></i>
                        </div>
                        <a href="{{ route('tutorcourses') }}" class="small-box-footer">Start course<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            
        </section>
@endsection