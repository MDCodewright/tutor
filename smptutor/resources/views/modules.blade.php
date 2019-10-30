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
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>1</h3>

                            <p>Course Outline</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-list-box"></i>
                        </div>
                        <a href="#" class="small-box-footer">Start course<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>10</h3>

                            <p>Course 1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-folder"></i>
                        </div>
                        <a href="#" class="small-box-footer">Start course<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <!-- row -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>5</h3>

                            <p>Course 2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-barcode"></i>
                        </div>
                        <a href="#" class="small-box-footer">Start course<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>3</h3>

                            <p>Graduate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-archive"></i>
                        </div>
                        <a href="#" class="small-box-footer">Start course<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <!-- ./col -->
            </div>
            
        </section>
@endsection