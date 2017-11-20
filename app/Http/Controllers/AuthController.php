<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AuthController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        

        if($user->save()) {
            $user->sigin = [
                'href' => 'api/v1/user/signin',
                'method' => 'POST',
                'params' => 'email, password'
            ];

            $result = [
                'msg' => 'User created',
                'user' => $user
            ];  
            dd('created');
            return response()->json($result,201);             
        } else {
            $result = [
                'msg' => 'User not create',
                'user' => $user
            ];
            return response()->json($result, 404);
        }

        


    }

    public function signin(Request $request)
    {
        return 'It works - AuthController ja';
    }

}
