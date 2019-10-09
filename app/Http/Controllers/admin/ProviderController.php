<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provider;
use App\http\Requests\ProviderRequest;

class ProviderController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   
    public function index(Request $request)
    {
        $n = $request->input('show');
        $providers = Provider::paginate(5);
        $all = Provider::all();
        return view('admin/system/provider/index',compact('providers','all'));
    }


    public function create()
    {
        return view('admin/system/provider/create');
    }

   
    public function store(ProviderRequest $request)
    {
        $provider = new Provider();
        $provider->NameProvider = $request->input('NameProvider');
        $provider->AddrProvider = $request->input('AddrProvider');
        $provider->TeleProvider = $request->input('TeleProvider');
        $provider->MailProvider = $request->input('MailProvider');

        $provider->save();
        session()->flash('success','The provider has been registered');
        return redirect('system-management/provider');

    }

    public function show($id)
    {
        $provider = Provider::find($id);
    
        return view('admin/system/provider/poster',compact('provider'));
    
    }

    public function edit($id)
    {
        $provider = Provider::find($id);
        // Redirect to country list if updating country wasn't existed
       
        return view('admin/system/provider/edit',compact('provider'));
    }

    public function update(Request $request, $id)
    {
        $provider = Provider::find($id);
        $provider->NameProvider = $request->input('NameProvider');
        $provider->AddrProvider = $request->input('AddrProvider');
        $provider->TeleProvider = $request->input('TeleProvider');
        $provider->MailProvider = $request->input('MailProvider');
        $provider->update();
        
        session()->flash('info','The provider has been well modified');
        return redirect('system-management/provider');
    }

 
    public function destroy($id)
    {
        Provider::where('id', $id)->delete();
        session()->flash('danger','The provider has been deleted');
        return redirect('system-management/provider');
  }

}
