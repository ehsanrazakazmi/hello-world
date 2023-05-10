<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Services;
use App\Models\orderconfirm;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use App\Notifications\TechOrderNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class TechnicianController extends Controller
{
    public function intro()
    {
        return view('technician.pages.introduction');
    }
    public function dashboard()
    {
        $order = DB::select('SELECT * from orders WHERE status = ?', ['shipped']);
        
        return view('technician.pages.dashboard')->with(['order' => $order]);
    }
    public function view($id)
    {
        $states = ['accepted'];
        $order = Order::with('user', 'items', 'items.services', 'items.color')-> findOrFail($id);
        return view('technician.pages.view', ['order' => $order, 'states' => $states]);
        
    }
    public function store(Request $request)
    {
        $user = User::all();
        $orderconfirm = new orderconfirm;
        $orderconfirm->status = 'accepted';
        $orderconfirm->save();
        Notification::send($user, new TechOrderNotification($request->id));
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

    public function chat(){
        return view('technician.pages.chat');
    }


    
    
    
}
