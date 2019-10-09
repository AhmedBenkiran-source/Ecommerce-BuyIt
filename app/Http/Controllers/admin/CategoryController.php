<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   
    public function index(Request $request)
    {
        $n = $request->input('show');
        $categorys = Category::paginate(5);
        $all = Category::all();
    
        return view('admin/system/category/index',compact('categorys','all'));
    }


    public function create()
    {
        return view('admin/system/category/create');
    }

   
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->NameCat = $request->input('NameCat');
        
        if( $request->file('ImageCat')){
            $category->ImageCat = $request->ImageCat->store('images');
        }else
        $category->ImageCat =  "0";

        $category->save();
        session()->flash('success','The product has been registered');
        return redirect('system-management/category');

    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('admin/system/category/poster',compact('category'));
    
    }

    public function edit($id)
    {
        $category = Category::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin/system/category/edit',compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $category->NameCat = $request->input('NameCat');
        $category->save();
        session()->flash('info','The category has been well modified');

        return redirect('system-management/category');
    }

 
    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        session()->flash('danger','The category has been deleted');
        return redirect('system-management/category');
  }

}
