<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingupController extends Controller
{
    //
    public function index()
    {
        return view('auth.singup');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('username'));

        //validate the request...
        $this->validate($request, [
            'name' => ['required', 'max:30'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
            'password_confirmation' => ['required', 'min:6']
        ]);
    }
}
