<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Country;
use App\City;
use App\http\Requests\CountryRequest;


class CityController extends Controller
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
        $cities = City::paginate(5);;
        $all = City::all();

        return view('admin/system/city/index',compact('cities','all'));
    }

    public function create()
    {
        $countries = Country::all();

        return view('admin/system/city/create',compact('countries'));
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $city = new City();
        $city->NameCity = $request->input('NameCity');
        $city->Id_Country = $request->input('Id_Country');
        $city->save();
        session()->flash('success','The country has been registered');
        return redirect('system-management/city');

    
    }

    public function show($id)
    {
        $city = City::find($id);
        $country = Country::find( $city->Id_Country);

        return view('admin/system/city/poster',compact('country','city'));
    
    }

   

    public function edit($id)
    {
        $city = City::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin/system/city/edit',compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $city->NameCity = $request->input('NameCity');
        $city->save();
        session()->flash('info','The city has been well modified');

        return redirect('system-management/city');
    }

 
    public function destroy($id)
    {
        City::where('id', $id)->delete();
        session()->flash('danger','The country has been deleted');
        return redirect('system-management/city');
  }

}
