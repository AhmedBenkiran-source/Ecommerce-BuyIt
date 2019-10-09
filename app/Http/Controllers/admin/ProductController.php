<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\http\Requests\ProductRequest;
use Illuminate\Http\UploadedFile;



use App\Product;
use App\Brand;
use App\Category;
use App\Provider;




class ProductController extends Controller
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
    //lister 
     public function index(Request $request){

        $n = $request->input('show');



        
        $products = Product::paginate(5);
        $all = Product::all();
        return view('admin/product/index',compact('products','all'));

     
    }
    // affiche form
    public function create(){
        $category = Category::all();
        $brand = Brand::all();
        $provider = Provider::all();

        return view('admin/product/create',compact('category','brand','provider'));
    }
    //enregistre
    public function store(ProductRequest $request){
        $products = new Product();

        $products->NameProduct = $request->input('NameProduct');
        $products->Brand = $request->input('Brand');
        $products->Category = $request->input('Category');
        $products->Provider = $request->input('Provider');
        $products->PriceProduct = $request->input('PriceProduct');
        $products->QuantityProduct = $request->input('QuantityProduct');
        $products->DesignationProduct = $request->input('DesignationProduct');
        $products->DescriptionProduct = $request->input('DescriptionProduct');


        if( $request->file('ImageProduct')){
            $products->ImageProduct = $request->ImageProduct->store('images');
        }else
        $products->ImageProduct =  "0";
        $products->save();
        session()->flash('success','The product has been registered');
        return redirect('/system-management/product');

    }
    public function show($id)
    {
        $products = Product::find($id);
        return view('admin/product/poster',compact('products'));       
    
    }
    //recuper 
    public function edit($id){
        $products = Product::find($id);
        $category = Category::all();
        $brand = Brand::all();
        $provider = Provider::all();

        return view('admin/product/edit',compact('products','category','brand','provider'));

    }
    //modif
    public function update(ProductRequest $request, $id){
        $products = Product::find($id);

        $products->NameProduct = $request->input('NameProduct');
        $products->Brand = $request->input('Brand');
        $products->Category = $request->input('Category');
        $products->Provider = $request->input('Provider');
        $products->PriceProduct = $request->input('PriceProduct');
        $products->QuantityProduct = $request->input('QuantityProduct');
        $products->DesignationProduct = $request->input('DesignationProduct');
        $products->DescriptionProduct = $request->input('DescriptionProduct');
        $products->ImageProduct = $request->input('ImageProduct');
        $products->save();
        session()->flash('info','The product has been well modified');

        return redirect('/system-management/product');


    }
    //delete
    public function destroy(Request $request, $id){
        $products = Product::find($id);
        $products->delete();
        session()->flash('danger','The product has been deleted');
        return redirect('/system-management/product');
    }
   
}
