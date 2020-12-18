<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = SubCategory::get();
        return view('admin.sub-category.index',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('admin.sub-category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cat_id'=>'required',
            'sub_cat_name' => 'required',
            'img' => 'mimes:png',
        ]);
        if($validator->fails()){
            echo "error";
        }
        try {
            if($request->hasFile('img')){
                $slug = Str::slug($request->sub_cat_name);
                $currentDate = Carbon::now()->toDateString();
                $imagename = 'IMG-'.$slug.'-'.$currentDate.'-'.uniqid().'.'.$request->img->getClientOriginalExtension();

                if (!file_exists(public_path('category/subcategory'))) {
                    mkdir(public_path('category/subcategory'));
                }
                $request->img->move(public_path('category/subcategory'),$imagename);
                $path = 'category/subcategory/'.$imagename;
            }
            $subCategory = new SubCategory();
            $subCategory->cat_id = $request->cat_id;
            $subCategory->name = $request->sub_cat_name;
            $subCategory->slug = Str::slug($request->sub_cat_name);
            if($request->hasFile('img')){
                $subCategory->image = $path;
            }
            if ($request->sub_cat_desc) {
                $subCategory->description = $request->sub_cat_desc;
            }
            $subCategory->save();
        
        return redirect(route('admin.subcategory'))->with('succesMsg','Sub Category Inserted Succesfully.');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::get();
        $subCategory = SubCategory::find($id);
        return view('admin.sub-category.update',compact('category','subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'cat_id'=>'required',
            'sub_cat_name' => 'required',
            'img' => 'mimes:png',
        ]);
        if($validator->fails()){
            echo "error";
        }
        try {
            $subCategory = SubCategory::find($id);
            $subCategory->cat_id = $request->cat_id;
            $subCategory->name = $request->sub_cat_name;
            $subCategory->slug = Str::slug($request->sub_cat_name);
            if($request->hasFile('img')){
                if(File::exists(public_path($subCategory->image))){
                    unlink(public_path($subCategory->image));
                }
                $slug = Str::slug($request->categorie_name);
                $currentDate = Carbon::now()->toDateString();
                $imagename = 'IMG-'.$slug.'-'.$currentDate.'-'.uniqid().'.'.$request->img->getClientOriginalExtension();

                $request->img->move(public_path('category/subcategory'),$imagename);
                $path = 'category/subcategory/'.$imagename;
                $subCategory->image = $path;
            }
            if ($request->sub_cat_desc) {
                $subCategory->description = $request->sub_cat_desc;
            }
            $subCategory->save();
        
        return redirect(route('admin.subcategory'))->with('succesMsg','Sub Category Updated Succesfully.');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $subCategory = Category::findOrFail($id);
            if(File::exists(public_path($subCategory->image)) && $subCategory->image !== 'category/subcategory/default.png' ){
                unlink(public_path($subCategory->image));
            }
            $subCategory->delete();
        } catch (\Throwable $th) {
            return $th;
        }
        return redirect(route('admin.category'))->with('succesMsg','Category Deleted Succesfully.');
    }
}
