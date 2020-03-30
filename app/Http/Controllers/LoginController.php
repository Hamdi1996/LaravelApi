<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    //

    public function login(Request $request)
    {

       
        if(auth()->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
        {
            $user = auth()->user();
            $user->api_token=Str::random(60);
            $user->save();
            return $user;
        }
        return 'No';
    }


    public function logout()
    {

        if(auth()->user())
        {
            $user = auth()->user();
            $user->api_token=NULL;
            $user->save();
            return response()->json(['message'=>'Thank You']);
        }

        return response()->json(['error'=>'Unable to logout user']);

    }
}
