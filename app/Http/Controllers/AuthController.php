<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function store(Request $request)
    {
        return 'ok';
    }

    public function signin(Request $request)
    {
        return 'It works - AuthController';
    }

}
