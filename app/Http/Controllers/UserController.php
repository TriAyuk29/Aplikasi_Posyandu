<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view("user/register");
    }

    public function processRegister(request $request)
    {
        $request->validate([
            "name"             => "required",
            "email"            => "required|unique:users",
            "password"         => "required|min:6",
            "reenter_password" => "required|same:password",
        ]);

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);
        $data['level'] = 0; // Member

        // dump($data);

        $user = User::create($data);

        // dd($user);

        // return $this->registerSuccess($user->id);

        return view("user/register_success", [
            "userID" => $user->id,
        ]);

    }

    public function login()
    {
        return view("user/login");
    }

    public function processLogin()
    {
        return view("admin/dashboard");   
    }
    
    public function logout(){
        
    }

}