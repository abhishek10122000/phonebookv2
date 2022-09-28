<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Auth;


class AuthController extends Controller
{
    public function signup(Request $req){
        if($req->isMethod('post')){
            $data=$req->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);
            User::create($data);
            return redirect()->route('login');
            
        }
        return view('user.auth.register');
    }
    public function login(Request $req){
        if($req->isMethod('post')){
            $data=$req->only('email','password');
            if(Auth::guard('web')->attempt($data)){
                return redirect()->route("home");
            }
            else{
                return "fail";
            }
            
        }
        return view('user.auth.login');
    }

    public function userlogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function adminlogin(Request $req){
        if($req->isMethod('post')){
            $data=$req->only('email','password');
            if(Auth::guard('admin')->attempt($data)){
                return redirect()->route("admin");
            }
            else{
                return "faildefghjhgfcvbnbv";
            }
            
        }
        return view('admin.auth.login');
    }
    public function adminlogout(){
        Auth::logout();
        return redirect()->route('adminlogin');
    }
}
