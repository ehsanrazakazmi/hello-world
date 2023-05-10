<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Events\SendMessage;
use App\Models\PublicContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function public()
    {
        return view('public');
    }
    public function store(Request $request)
    {
        $PublicContact = new PublicContact;
        $PublicContact->email = $request->get('email');
        $PublicContact->msg = $request->get('msg');
        $PublicContact->save();
        return redirect('/');
    }
    public function read()
    {
        $PublicContact= PublicContact::all();
        return view('publicmsgs')->with(['PublicContact'=> $PublicContact]);
    }
    public function delete($id)
    {
        PublicContact::destroy($id);
        return back()->with('success', 'Message Deleted');
    }
   
    public function home()
    {
        $user = User::find(1);
        $services = DB::table('services')->count();
        $orders = DB::table('orders')->count();
        $categories = DB::table('categories')->count();
        $users = DB::table('users')->where('role', 1)->count();
        return view('dashboard', compact('services', 'orders', 'categories', 'users'));
    }
    

    public function chat(){
        return view('chat');
    }

    public function messages(){
        return Message::with('user')->get();
    }

    public function messageStore(Request $request){
        $user = Auth::user();

        $messages = $user->messages()->create([
            'message' => $request->message
        ]);

        broadcast(new SendMessage($user, $messages))->toOthers();

        return 'message sent';
    }
}


    

