<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categorie_name'   =>  "required",
        ]);
        if($validator->fails()){
            echo "error";
        }else{
            $category = new Category();
            $category->name = $request->categorie_name;
            $category->slug = Str::slug($request->categorie_name);
            $category->save();
        }
        return redirect(route('admin.category'))->with('succesMsg','Category Inserted Succesfully.');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.update',compact('category'));
    }
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'categorie_name'   =>  "required",
        ]);
        if($validator->fails()){
            echo "error";
        }else{
            $category =Category::find($id);
            $category->name = $request->categorie_name;
            $category->slug = Str::slug($request->categorie_name);
            $category->save();
        }
        return redirect(route('admin.category'))->with('succesMsg','Category Updated Succesfully.');
    }
    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
        } catch (\Throwable $th) {
            return $th;
        }
        return redirect(route('admin.category'))->with('succesMsg','Category Deleted Succesfully.');
    }
}
