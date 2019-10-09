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
class AdminImpController extends Controller
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

        $admins = $this->Data();
        $pdf = PDF::loadView('admin/impression/pdfAdmin', compact('admins'));
        return $pdf->download('report_from_Admins'.'.pdf');
   }
  
   public function exportExcelProduct(){
    
    $admins = $this->Data();
    Excel::create('Admins', function($excel) use($admins) {
        $excel->sheet('Sheet 1', function($sheet) use($admins) {
            $sheet->fromArray($admins);
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
    return DB::table('admins')
    ->select('admins.id','admins.username', 'admins.email', 'admins.firstname'
        ,'admins.lastname', 'admins.ImageAdmin',
        'admins.created_at','admins.updated_at')
         ->get()
    ->map(function ($item, $key) {
    return (array) $item;
    })
    ->all();
    }
  
}
