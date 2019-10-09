<?php

namespace App\Http\Controllers\customer;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use App\Contact;
class ContactController extends Controller
{
 
    public function index(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();

        $products = Product::paginate(6); 
        $all = Product::all();

        return view('customer/contact',compact('categories','products','all','brands'));
   
        }


    public function create()
    {
    }

   
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->Name = $request->input('Name');
        $contact->Email = $request->input('Email');
        $contact->Phone = $request->input('Phone');
        $contact->Message = $request->input('Message');
        $contact->user = $request->user()->id;

        $contact->save();
        return redirect('/Contact');

    }

    public function show($NameCat)
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
       }

}
