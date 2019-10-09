<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;


class CategoryController extends Controller
{
 
    public function index(Request $request)
    {
       
        $NameCat = $request->input('Category');
        $NameProduct = $request->input('NameProduct');
        $categories = Category::all();
        $brands = Brand::all();

        $products = Product::paginate(9); 
        $all = Product::all();
        
        return view('customer/category',compact('NameCat','categories','products','all','brands','NameProduct'));


        }


    public function create()
    {
    }

   
    public function store(CategoryRequest $request)
    {
    }

    public function show($NameCat)
    {
        $categories = Category::all();
        $brands = Brand::all();

        $products = Product::paginate(9); 
        $all = Product::all();
        $NameProduct = 1;

        return view('customer/category',compact('NameCat','categories','products','all','brands','NameProduct'));
         
    }


    public function edit($id)
    {
         }

    public function update(CategoryRequest $request, $id)
    {
        }

 
    public function destroy($id)
    {
       }

}
