<?php

namespace App\Http\Controllers;


use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;

class SessionsController extends Controller
{
    public function login()
    {
        return view('usi.login');
    }


    public function doLogin(Request $request)
    {
        Log::error('antes de validar');
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //$credentials = $request->only(['email', 'password']);
        Log::error('flag1');

        if (Auth::attempt($credentials)) {
            Log::error('flag2');
            // Inicio de sesión exitoso
            return redirect()->route('products.hello');
        }


        // Inicio de sesión fallido
        return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros regitros']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('products.hello');
    }

    public function destroy($id)
    {
        Log::error('error1');

        $user = User::find($id);
        Log::error('error2');
        $user->delete();
        Log::error('error3');
        return redirect()->route('register');
    }


}
