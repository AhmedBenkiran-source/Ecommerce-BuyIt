<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class ProductController extends Controller
{
 
    public function index(Request $request)
    {
      

   }


    public function create()
    {
    }

   
    public function store(CategoryRequest $request)
    {
    }

    public function show($id)
    {
        $categories = Category::all();
        $brands = Brand::all();

        $all = Product::all();
        $product = Product::find($id);
        $products = Product::all();

        return view('customer/poster',compact('categories','product','products','all','brands'));
   
         
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
