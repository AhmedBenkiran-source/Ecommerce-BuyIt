<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class AllController extends Controller
{
 
    public function index(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();

        $products = Product::paginate(6); 
        $all = Product::all();

        return view('customer/all',compact('categories','products','all','brands'));
   
        }


    public function create()
    {
    }

   
    public function store(Request $request)
    {
    }

    public function show($NameCat)
    {
       
       
         
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
