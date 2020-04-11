@include('layouts.admin.header')
@include('layouts.admin.sidebar')
@include('layouts.admin.menu')
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4 style="text-transform: none">
                            {{$pageTitle}}
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="/home"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Дисциплины</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
        <!-- Page-header end -->
        @yield('content')


    </div>
</div>

@include('layouts.admin.footer')

