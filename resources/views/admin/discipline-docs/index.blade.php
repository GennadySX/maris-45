@extends('layouts.admin')
@section('content')
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">

            <doc-list
                get_data="{{json_encode($list)}}"
                disclinelist="{{json_encode($disciplinelist)}}"
            ></doc-list>
        </div>
        <!-- Add Contact Start Model start-->

        <!-- Add Contact Ends Model end-->
    </div>
    <!-- Page body end -->

    @endsection
