@extends('layouts.master')

@section('title', 'Categories')

@section('content')

    <div class="container-fluid px-4">
        
        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-9">
                        <h4>View Category </h4>
                    </div>
                    <div class="col-md-3">
                        <a href="{{route('add-category') }}" class="btn btn-outline-success my-2 my-sm-0">create Category</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
            @if(session('message'))
            <div class = "alert alert-success">{{session('message')}}</div>
            @endif

            </div>
        </div>
    </div>

@endsection()
