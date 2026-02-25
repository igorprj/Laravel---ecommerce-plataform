<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    


    

    public function showlogin() {
        return view('login');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

       if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            if(Auth::user()->role === 'admin') {
                return redirect()->route('create');
            }

            return redirect()->route('home');
       }

       throw ValidationException::withMessages([
            'credentias' => 'Senha ou E-mail Incorretos'
       ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }



    public function showcadastro() {
        return view ('cadastro');
     
    }

    public function register(Request $request) {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('home');
    }
}

