<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $array = $request->all();

        $remember = $request->has('remember');

        if(Auth::attempt([
                        'login' => $array['login'],
                        'password' => $array['password']
                    ], $remember))
        {
            //if he does not find the route you needed, by default sends to admin
            return redirect()->intended('admin');
        }

        return redirect()->back()
                        ->withInput($request->only('login', 'remember'))
                        ->withErrors([
                            'login' => 'Данные аутентификации не верны',

                        ]);
    }
}
