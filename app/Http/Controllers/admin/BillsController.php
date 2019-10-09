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
use App\Country;

use App\http\Requests\CountryRequest;


class BillsController extends Controller
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
        $countrys = Country::paginate(5);;
        $all = Country::all();
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        $carts = Cart::paginate(9);
        $orders = Order::paginate(9);
        $p =0;
        $pr =0;
        return view('admin/bills',compact('categories','products','brands','orders','carts','pr','p'));
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
   
    public function store(CountryRequest $request)
    {
        $country = new Country();
        $country->NameCountry = $request->input('NameCountry');
        $country->save();
        session()->flash('success','The country has been registered');
        return redirect('system-management/country');

    
    }

    public function show($id)
    {
        $country = Country::find($id);
    
        return view('admin/system/country/poster',compact('country'));
    
    }

   

    public function edit($id)
    {
        $country = Country::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin/system/country/edit',compact('country'));
    }

    public function update(CountryRequest $request, $id)
    {
        $country = Country::find($id);
        $country->NameCountry = $request->input('NameCountry');
        $country->save();
        session()->flash('info','The country has been well modified');

        return redirect('system-management/country');
    }

 
    public function destroy($id)
    {
        Country::where('id', $id)->delete();
        session()->flash('danger','The country has been deleted');
        return redirect('system-management/country');
  }

}
