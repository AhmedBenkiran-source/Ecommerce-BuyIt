<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
use App\Product;
use App\Item;
class ImpressionController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user-management';

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
    public function index()
    {
       
        return view('admin/impression/index');
    }
    public function exportPDFProduct() {

        $products = $this->Data();
        $pdf = PDF::loadView('admin/impression/pdfProduct', compact('products'));
        return $pdf->download('report_from_Product'.'.pdf');
   }
  
   public function exportExcelProduct(){
    
    $products = $this->Data();
    Excel::create('Products', function($excel) use($products) {
        $excel->sheet('Sheet 1', function($sheet) use($products) {
            $sheet->fromArray($products);
        });
    })->export('xlsx');

}
public function show(){
    
}
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function Data() {
    return DB::table('products')
    ->leftJoin('providers', 'products.Provider', '=', 'providers.id')
    ->leftJoin('brand', 'products.Brand', '=', 'brand.id')
    ->leftJoin('categories', 'products.Category', '=', 'categories.id')
    ->select('products.id','products.NameProduct', 'products.PriceProduct', 'products.QuantityProduct'
        ,'providers.NameProvider as provider', 'brand.NameBrand as brand','categories.NameCat as category' 
        ,'products.created_at','products.updated_at')
         ->get()
    ->map(function ($item, $key) {
    return (array) $item;
    })
    ->all();
    }
  
}
