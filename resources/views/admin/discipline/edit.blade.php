@extends('layouts.admin')
@section('content')
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Product edit card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Дисциплина</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product-edit">
                                    <!-- Tab panes -->
                                    <discipline-edit
                                        get_discipline="{{json_encode($data)}}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product edit card end -->
            </div>
        </div>
    </div>
@endsection
