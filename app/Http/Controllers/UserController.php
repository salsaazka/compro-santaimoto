<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Mail\SubscriptionConfirmed;
use App\Models\Emailnews;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

class UserController extends Controller
{
    public function index()
    {
        $datas = Form::latest()->get();
        return view('data', compact('datas'));
    }
    public function login()
    {
        return view('login');
    }
    public function auth(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|exists:users,email',
                'password' => 'required',
            ]
        );

        $user = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', "failed to login, try again!");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function news(){
        $datas = Emailnews::latest()->get();
        return view('news', compact('datas'));
    }

    public function postNews(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:emailnews,email'
        ]);
        
        Emailnews::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
       
        return back()->with('status', 'Thank you for subscribing :)');
    }

    public function emailnewsDestroy($id){
        $data = Emailnews::find($id);
  
        $data->delete();
        return back()->with('status', 'successfuly deleted data');
    }
}
