<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function login(){
        return view('content');
    }
    public function logout(){
        Auth::logout();
        return redirect()->to(request()->server('HTTP_REFERER'));
    }
    public function check(){
        $referer = request()->server('HTTP_REFERER');
        $credentials =[
            'username' => request()->get('username'),
            'password' => request()->get('password')
        ];
        $remember = request()->get('remember') === 'on';
        if(!Auth::attempt($credentials,$remember)){
            return redirect($referer)
                ->withErrors(['username' =>  'Invalid Username or Password.']);
        };

        return redirect($referer);
    }
}
