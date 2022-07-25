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
}
