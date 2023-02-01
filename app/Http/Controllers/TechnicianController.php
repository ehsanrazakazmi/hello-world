<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\orderconfirm;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnicianController extends Controller
{
    public function dashboard()
    {
        $order = DB::select('SELECT * from orders WHERE status = ?', ['shipped']);
        
        return view('technician.pages.dashboard')->with(['order' => $order]);
    }
    public function view($id)
    {
        $states = ['accepted'];
        $order = Order::with('user', 'items', 'items.product', 'items.color')-> findOrFail($id);
        return view('technician.pages.view', ['order' => $order, 'states' => $states]);
        
    }
    public function store()
    {
        $orderconfirm = new orderconfirm;
        $orderconfirm->status = 'accepted';
        $orderconfirm->save();
        return redirect()->back();
    }
  
   
    
    // public function profile()
    // {
    //     $id = 1;
    //     $products = Product::find($id);
    //     return view('technician.pages.profile.profile', ['products' => $products]);
    // }
     public function confirmed()
    {
        $orderconfirm = orderconfirm::all();
        return view('technician.pages.confirmed')->with(['orderconfirm' => $orderconfirm]);
    }
    public function updateStatus($id, Request $request)
    {
        Order::findOrFail($id)->update(['status' => $request->status]);
        return back()->with('success', 'Order Updated!');

    }


    
    
    
}
