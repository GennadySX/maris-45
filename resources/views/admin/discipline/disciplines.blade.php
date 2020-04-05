@extends('layouts.admin')
@section("content")
            <!-- Page-body start -->

            <div class="page-body">
                @if(\Illuminate\Support\Facades\Auth::user()->role === 'admin')
                <div class="mb-1" style="position: relative; top: -15px; ">
                    <a href="/home/discipline/new" class="btn btn-success p-2 pl-4 pr-4 font-weight-bold">+</a>
                </div>
                @endif
                <div class="row" >

                    <discipline-list></discipline-list>
                    <discipline-list></discipline-list>
                    <discipline-list></discipline-list>
                    <discipline-list></discipline-list>


                </div>
            </div>
            <!-- Page-body end -->



@endsection
