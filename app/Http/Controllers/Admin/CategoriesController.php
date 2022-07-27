<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index(){
        return view('admin.categories.index');
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(CategoryFormRequest $request){
       
        $data = $request->validated();

        $category = new Category();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if($data->hasfile('image')){
            $file = $data->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('upload/category/', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];

        $category->navbar_status = $data['navbar_status'];
        $category->status = $data['status'];
        $category->created_by = Auth::user()->id;
    }
}
