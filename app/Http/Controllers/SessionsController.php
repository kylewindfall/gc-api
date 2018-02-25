<?php

class SessionsController extends Controller
{

    public function create()
    {
        if (Auth::check()) {
            return Redirect::to('/');
        }
        return View::make('login');
    }

    public function store()
    {
        if (Auth::attempt(Input::only('username', 'password'))) {
            $user = Auth::user()->first_name;
            return Redirect::to('/')->with('success', 'You are logged in as ' . $user);
        }

        return Redirect::to('login')->with('error', 'Your username or password is incorrect.');
        ;
    }

    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to('login');
    }
}
