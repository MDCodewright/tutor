@extends('layouts.modulesdash')

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
        <section class="content-header">
            <h1>
                Modules
                <small>List of courses(Basic plan)</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Students</li>
            </ol>
        </section>
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