<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $cats = Category::all();
        return view('categories.list', compact('cats'));
    }
    public function create(){
        return view('categories.new');
    }
    public function store(Request $data){
        $category = new Category();
        $category->name = request('name');
        $category->save();
        return redirect('/categories');
    }

    public function show($id){
        $cat = Category::find($id);
        return view('categories.show', compact('cat'));
    }
    public function edit($id){
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
        // return 'zeyad mahmoud';
    }
    public function update($id){
        $category = Category::find($id);
        $category->name = request('name');
        $category->save();
        return redirect('/categories');
    }
}
