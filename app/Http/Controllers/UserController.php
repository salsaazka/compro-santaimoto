<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
