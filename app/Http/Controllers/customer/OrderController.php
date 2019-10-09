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
class OrderController extends Controller
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
        $p =0;
        $pr =0;
        $Q = array();
        return view('customer/order',compact('categories','products','countries','cities','carts','p','pr','Q'));
        }


    public function create()
    {
    }

   
    public function store(Request $request)
    {

        $order = new Order();
        $order->Status = "On Hold...";
        $order->ContactName = $request->input('ContactName');

        $order->Country = $request->input('Country');
        $order->City =$request->input('City');
        $order->Addrese =$request->input('Addrese');
        $order->Postal =$request->input('Postal');

        $order->PhoneNumber = $request->input('phone');
        $order->CardNumber = $request->input('Card');
        $order->SecurtyCode = $request->input('code');
        $order->CardholderName = $request->input('Cardholder');

       
        $order->user =$request-> user()->id;
     
        $order->save();
      return redirect('/AllOrders');
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
