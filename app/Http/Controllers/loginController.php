<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
// use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function showUserLogin()
    {

        return view('user.signup');

    }
   
    public function store(Request $request)
    {
        print_r($request->all());

        $user = new Users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return ('user save ');
    }

}
