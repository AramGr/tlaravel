<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function construct()
    {
//        $this->middleware('auth');
    }

    public function show(Request $request)
    {
//        $user = $request->user();
        $user = Auth::user();
        if(!Auth::check()){
            $user = User::find(9);
//            Auth::guard('web')->login($user);
//            Auth::guard('web')->logout();

            Auth::loginUsingId(9);

//            return redirect('login');
        }

        if(Auth::viaRemember()){
            echo 'yes';
        }
        dump(Auth::id());

        return view('home');
    }
}
