<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
use App\Admin;
use App\Item;
class CustomerImpController extends Controller
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

        $customers = $this->Data();
        $pdf = PDF::loadView('admin/impression/pdfCustomer', compact('customers'));
        return $pdf->download('report_from_Customers'.'.pdf');
   }
  
   public function exportExcelProduct(){
    
    $customers = $this->Data();
    Excel::create('Admins', function($excel) use($customers) {
        $excel->sheet('Sheet 1', function($sheet) use($customers) {
            $sheet->fromArray($customers);
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
    return DB::table('users')
    ->select('users.id','users.name', 'users.email', 
        'users.created_at','users.updated_at')
         ->get()
    ->map(function ($item, $key) {
    return (array) $item;
    })
    ->all();
    }
  
}
