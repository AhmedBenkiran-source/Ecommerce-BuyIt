<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Contact;
use App\Order;
class MailController extends Controller
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
 
    public function index(){
        $contacts = Contact::all();
        return view('admin.mailbox.index',compact('contacts'));

   } 
    public function mailbox()
    {
        # code...
        return view('admin.mailbox.mailbox');
    }
    public function show($id){
        $contact = Contact::find($id);
        return view('admin.mailbox.readmail',compact('contact'));

    }
    public function readmail()
    {
        # code...
        return view('admin.mailbox.readmail');
    }
    public function edit($id)
    {
        $order = Order::find($id);
        $order->Status = "Refused";
        $order->save();
        return redirect('/system-management/order');
         }
   
}
