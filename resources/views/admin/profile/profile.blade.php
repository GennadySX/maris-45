@extends('layouts.admin')

@section('content')

    <!-- Page-body start -->
    <div class="page-body">
        <!--profile cover start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="cover-profile">
                    <div class="profile-bg-img">
                        <img class="profile-bg-img img-fluid"
                             src="{{asset('admin\assets\images\user-profile\bg-img1.jpg')}}" alt="bg-img">
                            <profile-header />
                    </div>
                </div>
            </div>
        </div>
        <!--profile cover end-->
        <div class="row">
            <div class="col-lg-12">
                <!-- tab header start -->

                <!-- tab header end -->
                <!-- tab content start -->
                <div class="tab-content">
                    <div class="tab-pane active" id="personal" role="tabpanel">
                        <profile-data
                            getdata="{{$data}}"
                        />
                    </div>

                </div>
                <!-- tab content end -->
            </div>
        </div>
    </div>

@endsection
