<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
use App\Order;
use App\Admin;
use App\Item;
use App\Cart;
use App\Product;
use Carbon\Carbon;
class BillsImpController extends Controller
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
       
    }
    public function exportPDFProduct() {

        $customers = $this->Data();
        $pdf = PDF::loadView('admin/impression/pdfCustomer', compact('customers'));
        return $pdf->download('report_from_Bills'.'.pdf');
   }
  
   public function exportExcelBills(){
    
    $customers = $this->ExcelData();
    Excel::create('Bills', function($excel) use($customers) {
        $excel->sheet('Sheet 1', function($sheet) use($customers) {
            $sheet->fromArray($customers);
        });
    })->export('xlsx');

}
public function show($id){
    $current = Carbon::now();
    $current = new Carbon();
    $cart = Cart::find(10);
    $products = Product::all();

    $order = Order::find($id);
        $pdf = PDF::loadView('admin/pdfbills', compact('order','current','cart','products'));
        return $pdf->download('report_from_Bills'.'.pdf');
}
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function Data($id) {
        return DB::table('orders')
        ->leftJoin('carts', 'orders.user', '=', 'carts.user_id')
        ->select('orders.id','orders.ContactName', 'orders.Country', 'orders.City', 'orders.Addrese', 'orders.Postal'
        ,'carts.Qt as Qt'
        , 'orders.PhoneNumber','orders.created_at','orders.updated_at')->where('id',$id)
             ->get()
        ->map(function ($item, $key) {
        return (array) $item;
        })
        ->all();
        }
        private function ExcelData() {
            return DB::table('orders')
            ->leftJoin('carts', 'orders.user', '=', 'carts.user_id')
            ->select('orders.id','orders.ContactName', 'orders.Country', 'orders.City', 'orders.Addrese', 'orders.Postal'
            ,'carts.Qt as Qt'
            , 'orders.PhoneNumber','orders.created_at','orders.updated_at')
                 ->get()
            ->map(function ($item, $key) {
            return (array) $item;
            })
            ->all();
            }
  
}
