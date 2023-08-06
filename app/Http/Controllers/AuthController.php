<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', ['title' => 'login', 'isAuthPage' => true]);
    }
    public function signIn(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($data)){
            return redirect('/');
        }else{
            return redirect()->route('login')->with('message', 'username atau password salah');
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function signup(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        $data['password'] = Hash::make($request->password);
        $login = [
            'email' => $request->email,
            'password' => $request->email
        ];
        if(User::create($data)){
            if(Auth::attempt($login)){
                return redirect('/');
            }else{
                return redirect()->route('login')->with('message', 'username atau password salah');
            }

        }
        dd($data);
    }

}
