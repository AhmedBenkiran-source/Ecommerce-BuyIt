<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

use App\Wishlist;

class AccountController extends Controller
{
           /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        $wishlists = Wishlist::paginate(9);

        return view('customer/account',compact('categories','products','brands','wishlists'));
        }


    public function create()
    {
    }

   
    public function store(Request $request)
    {
      
    }

    public function show(Request $request,$id)
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
        $wishlist = Wishlist::find($id);
        $wishlist->delete();
       
        return redirect('Wishlist');
       }

}
