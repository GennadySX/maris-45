@extends('layouts.admin')
@section('content')

    <!-- Edit With Click card start -->

    <!-- Edit With Click card end -->
    <!-- Edit With Button card start -->
    <user-list
    user_list="{{json_encode($userList)}}"
    ></user-list>
    <!-- Edit With Button card end -->
    @endsection
