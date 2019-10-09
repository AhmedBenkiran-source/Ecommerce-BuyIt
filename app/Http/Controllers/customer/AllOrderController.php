<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\City;
use App\Category;
use App\Country;
use App\Product;
use App\Cart;
use App\Wishlist;
use App\Order;

class AllOrderController extends Controller
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
        $countries = Country::all();
        $cities = City::all();
        $products = Product::all();
        $carts = Cart::paginate(9);
        $orders = Order::all();
        $p =0;
        $pr =0;
        return view('customer/allorder',compact('categories','products','countries','cities','carts','orders','p','pr'));
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

        
        $cart->product_id =$id;
        $cart->save();
        return redirect('/home');
    }


    public function edit($id)
    {
         }

    public function update(CategoryRequest $request, $id)
    {
        }

 
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
       
        return redirect('Carts');
       }

}
