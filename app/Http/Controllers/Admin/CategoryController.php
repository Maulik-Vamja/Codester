<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

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
            'categorie_name'   =>  'required',
            'img' => 'mimes:png'
        ]);
        if($validator->fails()){
            echo "error";
        }
        try {
            if($request->hasFile('img')){
                $slug = Str::slug($request->categorie_name);
                $currentDate = Carbon::now()->toDateString();
                $imagename = 'IMG-'.$slug.'-'.$currentDate.'-'.uniqid().'.'.$request->img->getClientOriginalExtension();

                if (!file_exists(public_path('category'))) {
                    mkdir(public_path('category'));
                }
                $request->img->move(public_path('category/'),$imagename);
                $path = 'category/'.$imagename;
            }
            $category = new Category();
            $category->name = $request->categorie_name;
            $category->slug = Str::slug($request->categorie_name);
            if($request->hasFile('img')){
                $category->image = $path;
            }
            if ($request->categorie_desc) {
                $category->description = $request->categorie_desc;
            }
            $category->save();
        
        return redirect(route('admin.category'))->with('succesMsg','Category Inserted Succesfully.');
        } catch (\Throwable $th) {
            return $th;
        }   
            
    }
    // Edit Function
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.update',compact('category'));
    } 
    // Update Function
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'categorie_name'   =>  "required",
            'img' => 'mimes:png'
        ]);
        if($validator->fails()){
            echo "error";
        }
        try {
                $category =Category::find($id);
                $category->name = $request->categorie_name;
                $category->slug = Str::slug($request->categorie_name);
                if($request->hasFile('img')){
                    if(File::exists(public_path($category->image))){
                            unlink(public_path($category->image));
                        }
                        $slug = Str::slug($request->categorie_name);
                    $currentDate = Carbon::now()->toDateString();
                    $imagename = 'IMG-'.$slug.'-'.$currentDate.'-'.uniqid().'.'.$request->img->getClientOriginalExtension();
                    
                    $request->img->move(public_path('category/'),$imagename);
                    $path = 'category/'.$imagename;
                    $category->image = $path;
                }
                if ($request->categorie_desc) {
                    $category->description = $request->categorie_desc;
                }
            $category->save();
            } catch (\Throwable $th) {
                return $th;
            }
        return redirect(route('admin.category'))->with('succesMsg','Category Updated Succesfully.');
    }
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            if(File::exists(public_path($category->image)) && $category->image !== 'category/default.png' ){
                unlink(public_path($category->image));
            }
            $category->delete();
        } catch (\Throwable $th) {
            return $th;
        }
        return redirect(route('admin.category'))->with('succesMsg','Category Deleted Succesfully.');
    }
}
