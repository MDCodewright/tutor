@extends('layouts.coursesdashboard')

@section('content')

    <!-- Box Comment -->
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block" style="align:center;">
                <span class="username"><a href="#">WELCOME TO {COURSE NAME}.</a></span>
                <span class="description">This is class will be taught entirely online</span>
            </div>
                <!-- /.user-block -->
            <div class="box-tools">
                
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <br>
            <p>I am looking forward to this learning
            time however 
            I will warn you it will be very fast paced as we will cover four chapters in 
            one week. My role is to introduce you to the world of writing, which is 
            an important part of every writer.</p>

            <p>If you have any questions concerning this class please email at the addresses 
            listed below:</p>

            <p>Electronic Mail:  <a>tutor@smptutors.com</a> I will 
            respond within 48 hours.</p>

            <br>

            <!-- Attachment -->
            <div class="attachment-block clearfix">
            <img class="attachment-img" src="{{asset('public/dist/img/photo1.png')}}" alt="Attachment Image">

            <div class="attachment-pushed">
                <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Ready to start the class?</a></h4>
                <br>
                <div class="attachment-text">
                    This will be an amazing class. Click here to start... <a href="#">start</a>
                </div>
                <!-- /.attachment-text -->
            </div>
            <!-- /.attachment-pushed -->
            </div>
            <!-- /.attachment-block -->            
        </div>
        <!-- /.box-body -->
        <div class="box-footer box-comments">
            <p>Hope you enjoy the class</p>
        </div>
        <!-- /.box-footer -->
    </div>
@endsection