<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Country;
use App\http\Requests\CountryRequest;


class CountryController extends Controller
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

        return view('admin/system/country/index',compact('countrys','all'));
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
