<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile()
    {
        $user = Auth::user();
        $user->profile = 1;
        $user->save();
        return redirect()->route('home');
    }

    public function post()
    {
        return view('post');
    }

    public function updatePostCount()
    {
        $user = Auth::user();
        $user->post = 1;
        $user->save();
        return redirect()->route('home');
    }
}
