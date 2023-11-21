<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->route('reservas.home');
            //return redirect()->route('reservas.index');
        }else{
            return redirect()->route('login.form')->with('erro', 'Email ou senha iválida.');
        }
    }
}
