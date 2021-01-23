<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\UserRegistrationRequest;

class UserController extends Controller
{
    /**
     * Get Register Method
     */
    public function register(UserRegistrationRequest $request){
        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);

        return 'User Created Successfully';
    }

    /**
     * User Logged In User Method
     */
    public function user(Request $request){
        return $request->user();
    }


    public function index(){
        return User::all();
    }
}
