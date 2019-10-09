<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Brand;
use App\http\Requests\BrandRequest;

class BrandController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $n = $request->input('show');
        $brands = Brand::paginate(5);
        $all = Brand::all();
        return view('admin/system/brand/index',compact('brands','all'));
    }

    public function create()
    {
        return view('admin/system/brand/create');
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(BrandRequest $request)
    {
        $brand = new Brand();
        $brand->NameBrand = $request->input('NameBrand');
        $brand->save();
        session()->flash('success','The brand has been registered');
        return redirect()->intended('/system-management/brand');

    }

    public function show($id)
    {
        $brand = Brand::find($id);
    
        return view('admin/system/brand/poster',compact('brand'));
    
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin/system/brand/edit',compact('brand'));
    }

    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::find($id);
        $brand->NameBrand = $request->input('NameBrand');
        $brand->save();
        session()->flash('info','The brand has been well modified');

        return redirect('system-management/brand');
    }

 
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('danger','The brand has been deleted');
        return redirect('system-management/brand');
  }


  
}
