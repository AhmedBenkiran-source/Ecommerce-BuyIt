<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Brand;
use App\Product;
use App\Cart;
use App\Order;

use App\http\Requests\CountryRequest;


class OrderController extends Controller
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
     
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        $carts = Cart::paginate(9);
        $orders = Order::paginate(9);
        $p =0;
        $pr =0;
        return view('admin/order',compact('categories','products','brands','orders','carts','pr','p'));
    }

    public function create()
    {
        return view('admin/system/country/create');
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store($id)
    {
        $order = Order::find($id);
        $order->Status = "Refused";
        $order->save();
        return redirect('/system-management/order');
    }

    public function show($id)
    {
        $order = Order::find($id);
    
        return view('admin/vieworder',compact('order'));
    
    }


    public function edit($id)
    {
        $order = Order::find($id);
        $order->Status = "Valide";
        $order->save();
        return redirect('/system-management/order');
    }

    public function update($id)
    {
       
    }

 
    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        session()->flash('danger','The country has been deleted');
        return redirect('system-management/order');
  }

}
