@extends('layouts.master')

@section('title', 'Categories')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Add Categories</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add Categories</li>
        </ol>
        <div class="row">

        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h4>Add Category</h4>
            </div>

            <div class="card-body">

                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error )
                    <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif
                
                <form action="{{ route('add-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="md-3">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="md-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <h6>SEO Tags</h6>
                    <div class="md-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="meta_description">Meta Desription</label>
                        <input type="text" name="meta_description" rows="3" class="form-control">
                    </div>
                    <div class="md-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" rows="3" class="form-control">
                    </div>
                    <h6> Status </h6>
                    <div class="row">
                        <div class="col-md-3 md-3">
                            <label for="navbar_status">Navbar status</label>
                            <input type="checkbox" name="navbar_status" >
                        </div>

                        <div class="col-md-3 md-3">
                            <label for="status">Status</label>
                            <input type="checkbox" name="status">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary" >Save Category</button>
                        </div>
                    </div>
                    
                    
                   
                </form>


            </div>
        </div>

    </div>

@endsection()
