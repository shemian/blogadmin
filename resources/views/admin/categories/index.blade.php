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


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Image </th>
                        <th scope="col">Status </th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                     
                        <th>{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>
                            <img src="{{asset('upload/categories/'.$item->image ) }}" height="50px" width="50px" alt="">
                        </td>
                        <td>{{$item->status == '1' ? 'Hidden':'shown'}}</td>
                        <td>
                            <a href="{{ url('edit/'.$item->id )}}" class="btn btn-success my-2 my-sm-0">Edit</a>
                        </td>
                      
                    </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
    </div>

@endsection()
