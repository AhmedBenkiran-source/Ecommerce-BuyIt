<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use App\Cart;
use App\Wishlist;

class PanieController extends Controller
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
        $carts = Cart::paginate(9);
        $p =0;
        $pr =0;
        return view('customer/panie',compact('categories','products','brands','carts','pr','p'));
        }


    public function create()
    {
    }

   
    public function store(Request $request)
    {
       

    }

    public function show(Request $request,$id)
    {
        $cart = new Cart();
        $cart->user_id = $request-> user()->id;
        $cart->Qt = $request->Qt;
        $product = Product::find($id);
        $product->QuantityProduct-=$request->Qt;
        $product->save();
        $cart->product_id =$id;
        $cart->save();
        return redirect('/Carts');
    }


    public function edit($id)
    {
         }

    public function update(Request $request, $c)
    {
       
        }

 
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
       
        return redirect('Carts');
       }

}
