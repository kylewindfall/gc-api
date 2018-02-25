<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class SessionsController extends Controller
{

    public function create()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login');
    }

    public function store()
    {
        if (Auth::attempt(Input::only('username', 'password'))) {
            $user = Auth::user()->first_name;
            return redirect('/')->with('success', 'You are logged in as ' . $user);
        }

        return redirect('login')->with('error', 'Your username or password is incorrect.');
        ;
    }

    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
