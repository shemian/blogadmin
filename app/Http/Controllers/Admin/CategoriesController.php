<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cartegories;



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

        $category = new Cartegories();
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move('upload/categories/', $filename);
            $category->image = $filename;
        }

        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];

        $category->navbar_status = $request->navbar_status==true ? '1':'0';
        $category->status = $request->status==true ? '1':'0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message', 'Category Added Sucessfully');
    }
}
