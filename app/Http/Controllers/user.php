<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function sginup(){
        return view("sginup");
    }

    public function sginupRequest(Request $request){

        $request->validate([
            "email"=>"unique:users,email"
        ]);

        DB::table('users')->insert([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=> bcrypt($request->password),
            "admin"=> 1
        ]);

        return redirect("login");
    }

    public function login(){
        return view("login");
    }

    public function loginRequest(Request $request){
        
        if(Auth::attempt($request->except("_token"))){
            return redirect("/index");
        }
        return redirect("/login");
    }

    public function logout(){
        Auth::logout();
        return redirect("/");
    }
}