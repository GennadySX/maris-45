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
                        <div class="card-block user-info">
                            <div class="col-md-12">
                                <div class="media-left">
                                    <a href="#" class="profile-image">
                                        <img class="user-img img-radius"
                                             src="{{asset('admin\assets\images\user-profile\user-img.jpg')}}"
                                             alt="user-img">
                                    </a>
                                </div>
                                <div class="media-body row">
                                    <div class="col-lg-12">
                                        <div class="user-title">
                                            <h2>Джуанна Полкова</h2>
                                            <span class="text-white">Учитель</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
