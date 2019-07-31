<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class OnboardingController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth', 'onboarding']);
        $this->middleware(['auth']);
    }


    public function profile()
    {
        return view('profile');
    }

    public function updateProfile()
    {
        $user = User::find(1);
        $user->profile = 1;
        $user->save();

        //return redirect()->route('post');
        return redirect()->route('home');
    }

    public function post()
    {
        return view('post');
    }

    public function updatePostCount()
    {
        $user = User::find(1);
        $user->post = 1;
        $user->save();
        return redirect()->route('home');
    }
}
