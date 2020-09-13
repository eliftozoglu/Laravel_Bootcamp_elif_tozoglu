<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function LoginView()
    {
        return view('users.login');
    }
    public function login(Request $request){
        $users= User::all();
        $email = $request->get('email');
        $password = $request->get('password');
        // $hashedPassword = Hash::make($password);
        $user = User::where('email',$email)->where('password', $password)->first();

             if (isset($user)){
                 return view('users.index', compact('users'));
             }
             else{
                 return 'kullanıcı bulunamadı';
             }
    }
}
