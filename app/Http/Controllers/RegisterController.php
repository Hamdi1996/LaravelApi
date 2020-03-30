<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        # code...

        // $data  = User::create([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'password'=>Hash::make($request->password),
        //     'api_token'=>Str::random(60),
        //     ]);


        $validator = Validator::make( $request->all(),[
            'name'=>'required|max:255|string',
            'email'=>'required|email|max:255|unique:users|string',
            'password'=>'required|max:255|string',

        ],['name.required'=>'This field required.']);

        if($validator->fails())
        {
            return $validator->errors();
        }

        else{

            $data  = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'api_token'=>Str::random(60),
            ]);

            return $data;
        }

            

        
    }
}
