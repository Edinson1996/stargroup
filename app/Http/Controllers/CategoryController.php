<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories=CategoryPost::get();
        return view('panel.categories.index',compact('categories'));
    }

    public function edit(CategoryPost $category){
        return view('panel.categories.edit',compact('category'));
    }

    public function create(){
        return view('panel.categories.create');
    }

    public function store(Request $request){
        $category = new CategoryPost();
        $category->name=$request->get('name');
        $category->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function update(CategoryPost $category, Request $request){
        $category->name=$request->get('name');
        $category->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function destroy(CategoryPost $category){
        $category->delete();
        return back()->with('success','Acción Realizada Correctamente');
    }
}
