<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user(Request $request){
        return $request->user();
        // dd($request->user());
    }


    public function index(){
        return User::all();
    }
}
